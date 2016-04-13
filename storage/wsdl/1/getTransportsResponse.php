<?php

class getTransportsResponse
{

    /**
     * @var ArrayOfTransport $result
     */
    protected $result = null;

    /**
     * @param ArrayOfTransport $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfTransport
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfTransport $result
     * @return getTransportsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
