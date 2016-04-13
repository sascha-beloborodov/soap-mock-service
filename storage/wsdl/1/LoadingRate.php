<?php

class LoadingRate
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var string $transport
     */
    protected $transport = null;

    /**
     * @var float $qty
     */
    protected $qty = null;

    /**
     * @var string $measure_unit
     */
    protected $measure_unit = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @param string $product
     * @param string $transport
     * @param float $qty
     * @param string $measure_unit
     * @param string $city
     */
    public function __construct($product, $transport, $qty, $measure_unit, $city)
    {
      $this->product = $product;
      $this->transport = $transport;
      $this->qty = $qty;
      $this->measure_unit = $measure_unit;
      $this->city = $city;
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
     * @return LoadingRate
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransport()
    {
      return $this->transport;
    }

    /**
     * @param string $transport
     * @return LoadingRate
     */
    public function setTransport($transport)
    {
      $this->transport = $transport;
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
     * @return LoadingRate
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
     * @return LoadingRate
     */
    public function setMeasure_unit($measure_unit)
    {
      $this->measure_unit = $measure_unit;
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
     * @return LoadingRate
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

}
