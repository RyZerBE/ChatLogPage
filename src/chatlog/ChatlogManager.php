<?php

namespace chatlog;

use chatlog\provider\MySQLProvider;
use function explode;
use function spl_autoload_register;
use function str_replace;
use function trim;
use const DIRECTORY_SEPARATOR;

final class ChatlogManager {

	public function __construct() {
		spl_autoload_register(function (string $class): void {
			require str_replace(["chatlog\\", "\\"], [__DIR__ . DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $class) . ".php";
		});
	}
	
	public function getChatlog(string $id): ?Chatlog {
		$provider = new MySQLProvider();
		$result = $provider->getChatlog($id);
		$provider->close();
		return $result;
	}
	
	public static function convertToArray(string $message): array {
		return explode(", ", trim(rtrim($message, "]"), "["));
	}
}