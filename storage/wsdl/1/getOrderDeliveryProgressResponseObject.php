<?php

class getOrderDeliveryProgressResponseObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var boolean $is_in_progress
     */
    protected $is_in_progress = null;

    /**
     * @param string $order_number
     * @param boolean $is_in_progress
     */
    public function __construct($order_number, $is_in_progress)
    {
      $this->order_number = $order_number;
      $this->is_in_progress = $is_in_progress;
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
     * @return getOrderDeliveryProgressResponseObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_in_progress()
    {
      return $this->is_in_progress;
    }

    /**
     * @param boolean $is_in_progress
     * @return getOrderDeliveryProgressResponseObject
     */
    public function setIs_in_progress($is_in_progress)
    {
      $this->is_in_progress = $is_in_progress;
      return $this;
    }

}
