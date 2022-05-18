<?php
namespace Sap\Domain;

interface RemoteRequestInterface 
{
    /** @return string */
	public function getMethodName();
	
	/** @return array */
	public function getParams();
	
	/** @return bool */
	public function isSapOnline();
	
	/** @return string */
	public static function getSequenceName();
	
}