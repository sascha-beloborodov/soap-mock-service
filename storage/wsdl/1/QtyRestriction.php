<?php

class QtyRestriction
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
     * @var QtyRestrictionRule $rule
     */
    protected $rule = null;

    /**
     * @var string $warehouse
     */
    protected $warehouse = null;

    /**
     * @param string $product
     * @param float $qty
     * @param string $measure_unit
     * @param QtyRestrictionRule $rule
     * @param string $warehouse
     */
    public function __construct($product, $qty, $measure_unit, $rule, $warehouse)
    {
      $this->product = $product;
      $this->qty = $qty;
      $this->measure_unit = $measure_unit;
      $this->rule = $rule;
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
     * @return QtyRestriction
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
     * @return QtyRestriction
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
     * @return QtyRestriction
     */
    public function setMeasure_unit($measure_unit)
    {
      $this->measure_unit = $measure_unit;
      return $this;
    }

    /**
     * @return QtyRestrictionRule
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param QtyRestrictionRule $rule
     * @return QtyRestriction
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
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
     * @return QtyRestriction
     */
    public function setWarehouse($warehouse)
    {
      $this->warehouse = $warehouse;
      return $this;
    }

}
