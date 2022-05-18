<?php
namespace Sap\Domain;

interface PpcBoxRemoteRequestInterface extends RemoteRequestInterface
{
    /** @return string */
    public function getExidv();
    
    /** @return string */
    public function getExidv2();
    
    /** @return string */
    public function getPersonId();
	
}