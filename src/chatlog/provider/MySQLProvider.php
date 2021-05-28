<?php

namespace chatlog\provider;

use chatlog\Chatlog;
use mysqli;
use function base64_decode;
use function json_decode;
use function mysqli_close;
use function mysqli_connect;

class MySQLProvider implements Providable {
	/** @var false|mysqli $mysql */
	protected $mysql;
	
	protected const CREDENTIALS = ["127.0.0.1", "username", "password", "ChatLog"];
	
	public function __construct() {
		$this->mysql = mysqli_connect(...self::CREDENTIALS);
		if ($this->mysql->connect_error) exit();
	}
	
	/**
	 * @param string $id
	 *
	 * @return Chatlog|null
	 */
	public function getChatlog(string $id): ?Chatlog {
		$stmt = $this->mysql->prepare("SELECT * FROM ChatLogs WHERE id = ?");
		$stmt->bind_param("s", $id);
		if (!$stmt->execute() or !($result = $stmt->get_result()) or !$result->num_rows) return null;
		
		return Chatlog::fromArray(json_decode(base64_decode($result->fetch_array()["log"]), true));
	}
	
	public function close(): void {
		if ($this->mysql instanceof mysqli) mysqli_close($this->mysql);
		$this->mysql = null;
	}
}
