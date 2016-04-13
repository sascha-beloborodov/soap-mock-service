<?php

class OrderCancellation
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param string $order_number
     * @param string $status
     */
    public function __construct($order_number, $status)
    {
      $this->order_number = $order_number;
      $this->status = $status;
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
     * @return OrderCancellation
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return OrderCancellation
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
