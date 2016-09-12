<?php

namespace solid\ocp\bad;

use solid\ocp\bab\DbLogger;
use solid\ocp\bab\Logger;

class SmtpMail
{
	private $logger;

	public function __construct() {
		$this->logger = new Logger();
		// or $this->logger = new DbLogger();
	}

	public function sendMessage($message)
	{
		// Send
		// Save

		/** @var Logger|DbLogger $message */
		$this->logger->log($message);
	}
}