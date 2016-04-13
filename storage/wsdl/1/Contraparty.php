<?php

class Contraparty
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return Contraparty
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
