<?php
namespace Sap\Domain\Idoc;

class IdocCreatorParameters
{
    private $path;
    private $interfaceName;
    private $qos;
    private $interfaceNamespace;
    private $queueid;
    private $uuid;
    
    public function __construct(
        $path=null, $interfaceName=null, $qos=null, $interfaceNamespace=null, $queueid=null, $uuid = null
    ){
        $this->interfaceName = $interfaceName;
        $this->path = $path;
        $this->qos = $qos;
        $this->interfaceNamespace = $interfaceNamespace;
        $this->queueid = $queueid;
        $this->uuid = $uuid;
    }
    
    public function getUuid()
    {
        return $this->uuid;
    }

    public function getQueueid()
    {
        return $this->queueid;
    }

    public function getInterfaceNamespace()
    {
        return $this->interfaceNamespace;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getInterfaceName()
    {
        return $this->interfaceName;
    }

    public function getQos()
    {
        return $this->qos;
    }
}

