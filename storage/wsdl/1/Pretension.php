<?php

class Pretension
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $pretension
     */
    protected $pretension = null;

    /**
     * @param string $order_number
     * @param string $pretension
     */
    public function __construct($order_number, $pretension)
    {
      $this->order_number = $order_number;
      $this->pretension = $pretension;
    }

    /**
     * @return string
     */
    public function getOrder_number()
    {
      return $this->order_number;
    }

    /**
     * @param string $order_number
     * @return Pretension
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
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
     * @return Pretension
     */
    public function setPretension($pretension)
    {
      $this->pretension = $pretension;
      return $this;
    }

}
