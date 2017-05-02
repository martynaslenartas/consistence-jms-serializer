<?php

declare(strict_types = 1);

namespace Consistence\JmsSerializer\Enum;

class NotMultiEnumException extends \Consistence\PhpException implements \Consistence\JmsSerializer\Enum\Exception
{

	/** @var string */
	private $className;

	public function __construct(string $className, \Throwable $previous = null)
	{
		parent::__construct(sprintf('Class "%s" is not an MultiEnum', $className), $previous);
		$this->className = $className;
	}

	public function getClassName(): string
	{
		return $this->className;
	}

}
