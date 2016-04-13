<?php

class getTransportLoadingMethods
{

    /**
     * @var ArrayOfString $methods
     */
    protected $methods = null;

    /**
     * @param ArrayOfString $methods
     */
    public function __construct($methods)
    {
      $this->methods = $methods;
    }

    /**
     * @return ArrayOfString
     */
    public function getMethods()
    {
      return $this->methods;
    }

    /**
     * @param ArrayOfString $methods
     * @return getTransportLoadingMethods
     */
    public function setMethods($methods)
    {
      $this->methods = $methods;
      return $this;
    }

}
