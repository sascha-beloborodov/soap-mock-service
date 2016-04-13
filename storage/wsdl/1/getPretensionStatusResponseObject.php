<?php

class getPretensionStatusResponseObject
{

    /**
     * @var string $pretension
     */
    protected $pretension = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param string $pretension
     * @param string $status
     */
    public function __construct($pretension, $status)
    {
      $this->pretension = $pretension;
      $this->status = $status;
    }

    /**
     * @return string
     */
    public function getPretension()
    {
      return $this->pretension;
    }

    /**
     * @param string $pretension
     * @return getPretensionStatusResponseObject
     */
    public function setPretension($pretension)
    {
      $this->pretension = $pretension;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return getPretensionStatusResponseObject
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
