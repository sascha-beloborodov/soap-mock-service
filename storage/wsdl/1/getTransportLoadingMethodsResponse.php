<?php

class getTransportLoadingMethodsResponse
{

    /**
     * @var ArrayOfTransportLoadingMethod $result
     */
    protected $result = null;

    /**
     * @param ArrayOfTransportLoadingMethod $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfTransportLoadingMethod
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfTransportLoadingMethod $result
     * @return getTransportLoadingMethodsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
