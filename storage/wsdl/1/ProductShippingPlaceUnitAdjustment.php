<?php

class ProductShippingPlaceUnitAdjustment
{

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $city
     * @param string $code
     */
    public function __construct($city, $code)
    {
      $this->city = $city;
      $this->code = $code;
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
     * @return ProductShippingPlaceUnitAdjustment
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
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
     * @return ProductShippingPlaceUnitAdjustment
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
