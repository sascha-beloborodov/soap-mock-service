<?php

class City
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $code
     * @param string $name
     */
    public function __construct($code, $name)
    {
      $this->code = $code;
      $this->name = $name;
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
     * @return City
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
