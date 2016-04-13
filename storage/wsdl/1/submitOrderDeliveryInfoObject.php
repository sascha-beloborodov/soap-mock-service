<?php

class submitOrderDeliveryInfoObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $dispatch_date
     */
    protected $dispatch_date = null;

    /**
     * @var ArrayOfOrderDeliveryAddress $addresses
     */
    protected $addresses = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $dispatch_date
     * @param ArrayOfOrderDeliveryAddress $addresses
     * @param string $request_code
     */
    public function __construct($order_number, $dispatch_date, $addresses, $request_code)
    {
      $this->order_number = $order_number;
      $this->dispatch_date = $dispatch_date;
      $this->addresses = $addresses;
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
     * @return submitOrderDeliveryInfoObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
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
     * @return submitOrderDeliveryInfoObject
     */
    public function setDispatch_date($dispatch_date)
    {
      $this->dispatch_date = $dispatch_date;
      return $this;
    }

    /**
     * @return ArrayOfOrderDeliveryAddress
     */
    public function getAddresses()
    {
      return $this->addresses;
    }

    /**
     * @param ArrayOfOrderDeliveryAddress $addresses
     * @return submitOrderDeliveryInfoObject
     */
    public function setAddresses($addresses)
    {
      $this->addresses = $addresses;
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
     * @return submitOrderDeliveryInfoObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
