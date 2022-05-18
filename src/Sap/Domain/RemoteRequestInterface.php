<?php
namespace Sap\Domain;

interface RemoteRequestInterface 
{
    /** @return string */
	public function getMethodName();
	
	/** @return string */
	public function getParams();
	
	/** @return bool */
	public function isSapOnline();
	
	/** @return string */
	public static function getSequenceName();
	
}