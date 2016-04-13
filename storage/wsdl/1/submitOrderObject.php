<?php

class submitOrderObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $order_date
     */
    protected $order_date = null;

    /**
     * @var string $contraparty
     */
    protected $contraparty = null;

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
     * @var string $dispatch_date
     */
    protected $dispatch_date = null;

    /**
     * @var string $transport
     */
    protected $transport = null;

    /**
     * @var ArrayOfOrderAddress $addresses
     */
    protected $addresses = null;

    /**
     * @var ArrayOfOrderService $services
     */
    protected $services = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $order_date
     * @param string $contraparty
     * @param string $last_name
     * @param string $first_name
     * @param string $middle_name
     * @param string $phone
     * @param string $dispatch_date
     * @param string $transport
     * @param ArrayOfOrderAddress $addresses
     * @param ArrayOfOrderService $services
     * @param string $request_code
     */
    public function __construct($order_number, $order_date, $contraparty, $last_name, $first_name, $middle_name, $phone, $dispatch_date, $transport, $addresses, $services, $request_code)
    {
      $this->order_number = $order_number;
      $this->order_date = $order_date;
      $this->contraparty = $contraparty;
      $this->last_name = $last_name;
      $this->first_name = $first_name;
      $this->middle_name = $middle_name;
      $this->phone = $phone;
      $this->dispatch_date = $dispatch_date;
      $this->transport = $transport;
      $this->addresses = $addresses;
      $this->services = $services;
      $this->request_code = $request_code;
    }

    /**
     * @return string
     */
    public function getOrder_number()
    {
      return $this->order_number;
    }

    /**
     * @param string $order_number
     * @return submitOrderObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrder_date()
    {
      return $this->order_date;
    }

    /**
     * @param string $order_date
     * @return submitOrderObject
     */
    public function setOrder_date($order_date)
    {
      $this->order_date = $order_date;
      return $this;
    }

    /**
     * @return string
     */
    public function getContraparty()
    {
      return $this->contraparty;
    }

    /**
     * @param string $contraparty
     * @return submitOrderObject
     */
    public function setContraparty($contraparty)
    {
      $this->contraparty = $contraparty;
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
     * @return submitOrderObject
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
     * @return submitOrderObject
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
     * @return submitOrderObject
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
     * @return submitOrderObject
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
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
     * @return submitOrderObject
     */
    public function setDispatch_date($dispatch_date)
    {
      $this->dispatch_date = $dispatch_date;
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
     * @return submitOrderObject
     */
    public function setTransport($transport)
    {
      $this->transport = $transport;
      return $this;
    }

    /**
     * @return ArrayOfOrderAddress
     */
    public function getAddresses()
    {
      return $this->addresses;
    }

    /**
     * @param ArrayOfOrderAddress $addresses
     * @return submitOrderObject
     */
    public function setAddresses($addresses)
    {
      $this->addresses = $addresses;
      return $this;
    }

    /**
     * @return ArrayOfOrderService
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param ArrayOfOrderService $services
     * @return submitOrderObject
     */
    public function setServices($services)
    {
      $this->services = $services;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequest_code()
    {
      return $this->request_code;
    }

    /**
     * @param string $request_code
     * @return submitOrderObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
