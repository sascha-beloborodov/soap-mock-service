<?php

class OrderPlanStatusItem
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var string $dispatch_date
     */
    protected $dispatch_date = null;

    /**
     * @var string $vat_rate
     */
    protected $vat_rate = null;

    /**
     * @var float $vat_amount
     */
    protected $vat_amount = null;

    /**
     * @param string $product
     * @param string $dispatch_date
     * @param string $vat_rate
     * @param float $vat_amount
     */
    public function __construct($product, $dispatch_date, $vat_rate, $vat_amount)
    {
      $this->product = $product;
      $this->dispatch_date = $dispatch_date;
      $this->vat_rate = $vat_rate;
      $this->vat_amount = $vat_amount;
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
     * @return OrderPlanStatusItem
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatch_date()
    {
      return $this->dispatch_date;
    }

    /**
     * @param string $dispatch_date
     * @return OrderPlanStatusItem
     */
    public function setDispatch_date($dispatch_date)
    {
      $this->dispatch_date = $dispatch_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getVat_rate()
    {
      return $this->vat_rate;
    }

    /**
     * @param string $vat_rate
     * @return OrderPlanStatusItem
     */
    public function setVat_rate($vat_rate)
    {
      $this->vat_rate = $vat_rate;
      return $this;
    }

    /**
     * @return float
     */
    public function getVat_amount()
    {
      return $this->vat_amount;
    }

    /**
     * @param float $vat_amount
     * @return OrderPlanStatusItem
     */
    public function setVat_amount($vat_amount)
    {
      $this->vat_amount = $vat_amount;
      return $this;
    }

}
