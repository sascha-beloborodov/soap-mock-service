<?php

class getTransports
{

    /**
     * @var ArrayOfString $transports
     */
    protected $transports = null;

    /**
     * @param ArrayOfString $transports
     */
    public function __construct($transports)
    {
      $this->transports = $transports;
    }

    /**
     * @return ArrayOfString
     */
    public function getTransports()
    {
      return $this->transports;
    }

    /**
     * @param ArrayOfString $transports
     * @return getTransports
     */
    public function setTransports($transports)
    {
      $this->transports = $transports;
      return $this;
    }

}
