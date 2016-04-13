<?php

class PlanningDepartmentAnswerItem
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var string $dispatch_date
     */
    protected $dispatch_date = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @param string $product
     * @param string $dispatch_date
     * @param string $comment
     */
    public function __construct($product, $dispatch_date, $comment)
    {
      $this->product = $product;
      $this->dispatch_date = $dispatch_date;
      $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param string $product
     * @return PlanningDepartmentAnswerItem
     */
    public function setProduct($product)
    {
      $this->product = $product;
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
     * @return PlanningDepartmentAnswerItem
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
     * @return PlanningDepartmentAnswerItem
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

}
