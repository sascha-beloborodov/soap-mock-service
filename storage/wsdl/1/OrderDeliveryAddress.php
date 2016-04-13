<?php

class OrderDeliveryAddress
{

    /**
     * @var float $latitude
     */
    protected $latitude = null;

    /**
     * @var float $longitude
     */
    protected $longitude = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $delivery_date
     */
    protected $delivery_date = null;

    /**
     * @param float $latitude
     * @param float $longitude
     * @param string $address
     * @param string $delivery_date
     */
    public function __construct($latitude, $longitude, $address, $delivery_date)
    {
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->address = $address;
      $this->delivery_date = $delivery_date;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return OrderDeliveryAddress
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return OrderDeliveryAddress
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return OrderDeliveryAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getDelivery_date()
    {
      return $this->delivery_date;
    }

    /**
     * @param string $delivery_date
     * @return OrderDeliveryAddress
     */
    public function setDelivery_date($delivery_date)
    {
      $this->delivery_date = $delivery_date;
      return $this;
    }

}
