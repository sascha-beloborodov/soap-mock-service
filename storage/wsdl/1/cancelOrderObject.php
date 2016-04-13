<?php

class cancelOrderObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $request_code
     */
    public function __construct($order_number, $request_code)
    {
      $this->order_number = $order_number;
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
     * @return cancelOrderObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
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
     * @return cancelOrderObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
