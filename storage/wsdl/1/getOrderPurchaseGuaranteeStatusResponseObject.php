<?php

class getOrderPurchaseGuaranteeStatusResponseObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var boolean $is_expired
     */
    protected $is_expired = null;

    /**
     * @param string $order_number
     * @param boolean $is_expired
     */
    public function __construct($order_number, $is_expired)
    {
      $this->order_number = $order_number;
      $this->is_expired = $is_expired;
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
     * @return getOrderPurchaseGuaranteeStatusResponseObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_expired()
    {
      return $this->is_expired;
    }

    /**
     * @param boolean $is_expired
     * @return getOrderPurchaseGuaranteeStatusResponseObject
     */
    public function setIs_expired($is_expired)
    {
      $this->is_expired = $is_expired;
      return $this;
    }

}
