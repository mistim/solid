<?php

namespace solid\ocp\ok;

use solid\ocp\ok\LoggerInterface;

/**
 * Class SmtpMail
 * @package solid\ocp\ok
 */
class SmtpMail
{
	private $logger;

	public function __construct(LoggerInterface $logger) {
		$this->logger = $logger;
	}

	public function sendMessage($message)
	{
		// Send
		// Save

		/** @var LoggerInterface $message */
		$this->logger->log($message);
	}
}