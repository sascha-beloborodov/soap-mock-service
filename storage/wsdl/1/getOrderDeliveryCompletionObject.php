<?php

class getOrderDeliveryCompletionObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @param string $order_number
     */
    public function __construct($order_number)
    {
      $this->order_number = $order_number;
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
     * @return getOrderDeliveryCompletionObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

}
