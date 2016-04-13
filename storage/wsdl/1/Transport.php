<?php

class Transport
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
     * @var float $weight_capacity
     */
    protected $weight_capacity = null;

    /**
     * @var float $cubic_capacity
     */
    protected $cubic_capacity = null;

    /**
     * @param string $code
     * @param string $name
     * @param float $weight_capacity
     * @param float $cubic_capacity
     */
    public function __construct($code, $name, $weight_capacity, $cubic_capacity)
    {
      $this->code = $code;
      $this->name = $name;
      $this->weight_capacity = $weight_capacity;
      $this->cubic_capacity = $cubic_capacity;
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
     * @return Transport
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
     * @return Transport
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight_capacity()
    {
      return $this->weight_capacity;
    }

    /**
     * @param float $weight_capacity
     * @return Transport
     */
    public function setWeight_capacity($weight_capacity)
    {
      $this->weight_capacity = $weight_capacity;
      return $this;
    }

    /**
     * @return float
     */
    public function getCubic_capacity()
    {
      return $this->cubic_capacity;
    }

    /**
     * @param float $cubic_capacity
     * @return Transport
     */
    public function setCubic_capacity($cubic_capacity)
    {
      $this->cubic_capacity = $cubic_capacity;
      return $this;
    }

}
