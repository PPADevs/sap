<?php
namespace Sap\Domain\Idoc;

class IdocCreatorParameters
{
    private $path;
    private $interfaceName;
    private $qos;
    private $interfaceNamespace;
    
    public function __construct(
        $path=null, $interfaceName=null, $qos=null, $interfaceNamespace=null
    ){
        $this->interfaceName = $interfaceName;
        $this->path = $path;
        $this->qos = $qos;
        $this->interfaceNamespace = $interfaceNamespace;
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

