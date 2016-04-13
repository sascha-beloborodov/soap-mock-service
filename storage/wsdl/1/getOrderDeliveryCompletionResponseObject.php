<?php

class getOrderDeliveryCompletionResponseObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var boolean $is_delivered
     */
    protected $is_delivered = null;

    /**
     * @param string $order_number
     * @param boolean $is_delivered
     */
    public function __construct($order_number, $is_delivered)
    {
      $this->order_number = $order_number;
      $this->is_delivered = $is_delivered;
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
     * @return getOrderDeliveryCompletionResponseObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_delivered()
    {
      return $this->is_delivered;
    }

    /**
     * @param boolean $is_delivered
     * @return getOrderDeliveryCompletionResponseObject
     */
    public function setIs_delivered($is_delivered)
    {
      $this->is_delivered = $is_delivered;
      return $this;
    }

}
