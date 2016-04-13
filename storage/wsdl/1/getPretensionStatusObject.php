<?php

class getPretensionStatusObject
{

    /**
     * @var string $pretension
     */
    protected $pretension = null;

    /**
     * @param string $pretension
     */
    public function __construct($pretension)
    {
      $this->pretension = $pretension;
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
     * @return getPretensionStatusObject
     */
    public function setPretension($pretension)
    {
      $this->pretension = $pretension;
      return $this;
    }

}
