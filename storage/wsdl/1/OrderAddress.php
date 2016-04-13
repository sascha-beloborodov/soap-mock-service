<?php

class OrderAddress
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
     * @var string $last_name
     */
    protected $last_name = null;

    /**
     * @var string $first_name
     */
    protected $first_name = null;

    /**
     * @var string $middle_name
     */
    protected $middle_name = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $delivery_date
     */
    protected $delivery_date = null;

    /**
     * @var string $loading_method
     */
    protected $loading_method = null;

    /**
     * @var ArrayOfOrderItem $items
     */
    protected $items = null;

    /**
     * @param float $latitude
     * @param float $longitude
     * @param string $address
     * @param string $last_name
     * @param string $first_name
     * @param string $middle_name
     * @param string $phone
     * @param string $delivery_date
     * @param string $loading_method
     * @param ArrayOfOrderItem $items
     */
    public function __construct($latitude, $longitude, $address, $last_name, $first_name, $middle_name, $phone, $delivery_date, $loading_method, $items)
    {
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->address = $address;
      $this->last_name = $last_name;
      $this->first_name = $first_name;
      $this->middle_name = $middle_name;
      $this->phone = $phone;
      $this->delivery_date = $delivery_date;
      $this->loading_method = $loading_method;
      $this->items = $items;
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
     * @return OrderAddress
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
     * @return OrderAddress
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
     * @return OrderAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getLast_name()
    {
      return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return OrderAddress
     */
    public function setLast_name($last_name)
    {
      $this->last_name = $last_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirst_name()
    {
      return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return OrderAddress
     */
    public function setFirst_name($first_name)
    {
      $this->first_name = $first_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddle_name()
    {
      return $this->middle_name;
    }

    /**
     * @param string $middle_name
     * @return OrderAddress
     */
    public function setMiddle_name($middle_name)
    {
      $this->middle_name = $middle_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return OrderAddress
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
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
     * @return OrderAddress
     */
    public function setDelivery_date($delivery_date)
    {
      $this->delivery_date = $delivery_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoading_method()
    {
      return $this->loading_method;
    }

    /**
     * @param string $loading_method
     * @return OrderAddress
     */
    public function setLoading_method($loading_method)
    {
      $this->loading_method = $loading_method;
      return $this;
    }

    /**
     * @return ArrayOfOrderItem
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfOrderItem $items
     * @return OrderAddress
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}
