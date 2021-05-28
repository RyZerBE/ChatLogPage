<?php

namespace chatlog;

use function property_exists;

class Chatlog {
	
	/** @var string|null $date */
	public $date = null;
	
	/** @var string|null $id */
	public $id;
	
	/** @var string|null $server */
	public $server;
	
	/** @var string|null $victim */
	public $victim;
	
	/** @var string|null $reporter */
	public $reporter;
	
	/** @var string|null $reason */
	public $reason;
	
	/** @var string $recordTime */
	public $recordTime = "5 Minuten";
	
	/** @var string $messages */
	public $messages = "[]";
	
	private function __construct() {
	
	}
	
	/**
	 * Dynamically loads a chatlog
	 *
	 * @internal
	 *
	 * @param array $data
	 *
	 * @return Chatlog
	 */
	final public static function fromArray(array $data): Chatlog {
		$instance = new Chatlog();
		foreach ($data as $k => $v) {
			if (property_exists($instance, $k)) $instance->{$k} = $v;
		}
		return $instance;
	}
}