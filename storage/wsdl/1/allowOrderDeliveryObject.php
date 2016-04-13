<?php

class allowOrderDeliveryObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $comment
     * @param string $request_code
     */
    public function __construct($order_number, $comment, $request_code)
    {
      $this->order_number = $order_number;
      $this->comment = $comment;
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
     * @return allowOrderDeliveryObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return allowOrderDeliveryObject
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
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
     * @return allowOrderDeliveryObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
