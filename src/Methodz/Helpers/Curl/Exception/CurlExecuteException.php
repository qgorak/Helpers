<?php

namespace Methodz\Helpers\Curl\Exception;

class CurlExecuteException extends \Exception
{
	public function __construct(string $error_string, int $code = 0, ?\Throwable $previous = null)
	{
		parent::__construct($error_string, $code, $previous);
	}
}
