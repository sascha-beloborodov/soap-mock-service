<?php

class PlanningDepartmentAnswer
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var boolean $is_answered
     */
    protected $is_answered = null;

    /**
     * @var ArrayOfPlanningDepartmentAnswerItem $items
     */
    protected $items = null;

    /**
     * @param string $order_number
     * @param boolean $is_answered
     */
    public function __construct($order_number, $is_answered)
    {
      $this->order_number = $order_number;
      $this->is_answered = $is_answered;
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
     * @return PlanningDepartmentAnswer
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_answered()
    {
      return $this->is_answered;
    }

    /**
     * @param boolean $is_answered
     * @return PlanningDepartmentAnswer
     */
    public function setIs_answered($is_answered)
    {
      $this->is_answered = $is_answered;
      return $this;
    }

    /**
     * @return ArrayOfPlanningDepartmentAnswerItem
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfPlanningDepartmentAnswerItem $items
     * @return PlanningDepartmentAnswer
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}
