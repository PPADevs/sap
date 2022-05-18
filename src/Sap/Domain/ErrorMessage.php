<?php
namespace Sap\Domain;

class ErrorMessage 
{
    /** @var string */
	private $type;
	/** @var string */
	private $number;
	/** @var string */
	private $id;
	/** @var string */
	private $parameter1;
	/** @var string */
	private $parameter2;
	/** @var string */
	private $parameter3;
	/** @var string */
	private $parameter4;
	/** @var string */
	private $messageText;
	
	const ERR_TYPE_ERROR   = 'E';
	const ERR_TYPE_WARNING = 'W';
	const ERR_TYPE_ABORT   = 'A';
	const ERR_TYPE_INFO    = 'I';
	
	public function __construct(
		 $type,
		 $number,
		 $id,
		 $parameter1,
		 $parameter2,
		 $parameter3,
		 $parameter4,
		 $messageText
	){
		$this->type = $type;
		$this->number = $number;
		$this->id = $id;
		$this->parameter1 = $parameter1;
		$this->parameter2 = $parameter2;
		$this->parameter3 = $parameter3;
		$this->parameter4 = $parameter4;
		$this->messageText = $messageText;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getNumber() {
		return $this->number;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getParameter1() {
		return $this->parameter1;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getParameter2() {
		return $this->parameter2;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getParameter3() {
		return $this->parameter3;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getParameter4() {
		return $this->parameter4;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getMessageText() {
		return $this->messageText;
	}
	
	/**
	 * 
	 * @return boolean
	 */
	public function isError() {
	    return ($this->getType() == SELF::ERR_TYPE_ERROR);
	}
	
	/**
	 *
	 * @return boolean
	 */
	public function isWarning() {
	    return ($this->getType() == SELF::ERR_TYPE_WARNING);
	}
	
	/**
	 *
	 * @return boolean
	 */
	public function isInfo() {
	    return ($this->getType() == SELF::ERR_TYPE_INFO);
	}
	
	/**
	 *
	 * @return boolean
	 */
	public function isAbort() {
	    return ($this->getType() == SELF::ERR_TYPE_ABORT);
	}
	
}