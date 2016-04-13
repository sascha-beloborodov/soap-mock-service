<?php

class ProductWeightAdjustment
{

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var float $gross_weight
     */
    protected $gross_weight = null;

    /**
     * @var float $net_weight
     */
    protected $net_weight = null;

    /**
     * @param string $city
     * @param float $gross_weight
     * @param float $net_weight
     */
    public function __construct($city, $gross_weight, $net_weight)
    {
      $this->city = $city;
      $this->gross_weight = $gross_weight;
      $this->net_weight = $net_weight;
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
     * @return ProductWeightAdjustment
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return float
     */
    public function getGross_weight()
    {
      return $this->gross_weight;
    }

    /**
     * @param float $gross_weight
     * @return ProductWeightAdjustment
     */
    public function setGross_weight($gross_weight)
    {
      $this->gross_weight = $gross_weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getNet_weight()
    {
      return $this->net_weight;
    }

    /**
     * @param float $net_weight
     * @return ProductWeightAdjustment
     */
    public function setNet_weight($net_weight)
    {
      $this->net_weight = $net_weight;
      return $this;
    }

}
