<?php

class ProductPrice
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var float $price
     */
    protected $price = null;

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
     * @param float $price
     * @param string $measure_unit
     * @param string $city
     */
    public function __construct($product, $price, $measure_unit, $city)
    {
      $this->product = $product;
      $this->price = $price;
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
     * @return ProductPrice
     */
    public function setProduct($product)
    {
      $this->product = $product;
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
     * @return ProductPrice
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return ProductPrice
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
     * @return ProductPrice
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

}
