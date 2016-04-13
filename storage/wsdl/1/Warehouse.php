<?php

class Warehouse
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @param string $code
     * @param string $label
     * @param string $city
     */
    public function __construct($code, $label, $city)
    {
      $this->code = $code;
      $this->label = $label;
      $this->city = $city;
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
     * @return Warehouse
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return Warehouse
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return Warehouse
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

}
