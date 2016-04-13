<?php

class OrderItem
{

    /**
     * @var string $warehouse
     */
    protected $warehouse = null;

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var float $qty
     */
    protected $qty = null;

    /**
     * @var string $measure_unit
     */
    protected $measure_unit = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @param string $warehouse
     * @param string $product
     * @param float $qty
     * @param string $measure_unit
     * @param float $price
     * @param float $total
     */
    public function __construct($warehouse, $product, $qty, $measure_unit, $price, $total)
    {
      $this->warehouse = $warehouse;
      $this->product = $product;
      $this->qty = $qty;
      $this->measure_unit = $measure_unit;
      $this->price = $price;
      $this->total = $total;
    }

    /**
     * @return string
     */
    public function getWarehouse()
    {
      return $this->warehouse;
    }

    /**
     * @param string $warehouse
     * @return OrderItem
     */
    public function setWarehouse($warehouse)
    {
      $this->warehouse = $warehouse;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param string $product
     * @return OrderItem
     */
    public function setProduct($product)
    {
      $this->product = $product;
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
     * @return OrderItem
     */
    public function setQty($qty)
    {
      $this->qty = $qty;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeasure_unit()
    {
      return $this->measure_unit;
    }

    /**
     * @param string $measure_unit
     * @return OrderItem
     */
    public function setMeasure_unit($measure_unit)
    {
      $this->measure_unit = $measure_unit;
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
     * @return OrderItem
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
     * @return OrderItem
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

}
