<?php

namespace chatlog\provider;

use chatlog\Chatlog;

interface Providable {
	
	public function getChatlog(string $id): ?Chatlog;
	
	public function close(): void;
}