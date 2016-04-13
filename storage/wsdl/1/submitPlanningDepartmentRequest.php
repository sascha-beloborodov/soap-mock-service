<?php

class submitPlanningDepartmentRequest
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
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $dispatch_date
     * @param string $comment
     * @param string $request_code
     */
    public function __construct($order_number, $dispatch_date, $comment, $request_code)
    {
      $this->order_number = $order_number;
      $this->dispatch_date = $dispatch_date;
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
     * @return submitPlanningDepartmentRequest
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
     * @return submitPlanningDepartmentRequest
     */
    public function setDispatch_date($dispatch_date)
    {
      $this->dispatch_date = $dispatch_date;
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
     * @return submitPlanningDepartmentRequest
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
     * @return submitPlanningDepartmentRequest
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
