<?php

class ProductStock
{

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
     * @var string $warehouse
     */
    protected $warehouse = null;

    /**
     * @param string $product
     * @param float $qty
     * @param string $measure_unit
     * @param string $warehouse
     */
    public function __construct($product, $qty, $measure_unit, $warehouse)
    {
      $this->product = $product;
      $this->qty = $qty;
      $this->measure_unit = $measure_unit;
      $this->warehouse = $warehouse;
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
     * @return ProductStock
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
     * @return ProductStock
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
     * @return ProductStock
     */
    public function setMeasure_unit($measure_unit)
    {
      $this->measure_unit = $measure_unit;
      return $this;
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
     * @return ProductStock
     */
    public function setWarehouse($warehouse)
    {
      $this->warehouse = $warehouse;
      return $this;
    }

}
