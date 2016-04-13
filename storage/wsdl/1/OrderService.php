<?php

class OrderService
{

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var float $qty
     */
    protected $qty = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @param string $service
     * @param float $qty
     * @param float $price
     * @param float $total
     */
    public function __construct($service, $qty, $price, $total)
    {
      $this->service = $service;
      $this->qty = $qty;
      $this->price = $price;
      $this->total = $total;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return OrderService
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->qty;
    }

    /**
     * @param float $qty
     * @return OrderService
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return OrderService
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return OrderService
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

}
