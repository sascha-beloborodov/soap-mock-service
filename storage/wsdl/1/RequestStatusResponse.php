<?php

class RequestStatusResponse
{

    /**
     * @var Contraparty $contraparty
     */
    protected $contraparty = null;

    /**
     * @var OrderPlanStatus $order_plan_status
     */
    protected $order_plan_status = null;

    /**
     * @var PlanningDepartmentAnswer $planning_department_answer
     */
    protected $planning_department_answer = null;

    /**
     * @var OrderDeliveryAllowance $order_delivery_allowance
     */
    protected $order_delivery_allowance = null;

    /**
     * @var BankTransferOrder $bank_transfer_order
     */
    protected $bank_transfer_order = null;

    /**
     * @var OrderCancellation $order_cancellation
     */
    protected $order_cancellation = null;

    /**
     * @var OrderDeliveryDisallowance $order_delivery_disallowance
     */
    protected $order_delivery_disallowance = null;

    /**
     * @var OutflowStatus $outflow_status
     */
    protected $outflow_status = null;

    /**
     * @var Pretension $pretension
     */
    protected $pretension = null;

    /**
     * @var OperationFault $operation_fault
     */
    protected $operation_fault = null;

    /**
     * @var StatusResponseState $state
     */
    protected $state = null;

    /**
     * @param StatusResponseState $state
     */
    public function __construct($state)
    {
      $this->state = $state;
    }

    /**
     * @return Contraparty
     */
    public function getContraparty()
    {
      return $this->contraparty;
    }

    /**
     * @param Contraparty $contraparty
     * @return RequestStatusResponse
     */
    public function setContraparty($contraparty)
    {
      $this->contraparty = $contraparty;
      return $this;
    }

    /**
     * @return OrderPlanStatus
     */
    public function getOrder_plan_status()
    {
      return $this->order_plan_status;
    }

    /**
     * @param OrderPlanStatus $order_plan_status
     * @return RequestStatusResponse
     */
    public function setOrder_plan_status($order_plan_status)
    {
      $this->order_plan_status = $order_plan_status;
      return $this;
    }

    /**
     * @return PlanningDepartmentAnswer
     */
    public function getPlanning_department_answer()
    {
      return $this->planning_department_answer;
    }

    /**
     * @param PlanningDepartmentAnswer $planning_department_answer
     * @return RequestStatusResponse
     */
    public function setPlanning_department_answer($planning_department_answer)
    {
      $this->planning_department_answer = $planning_department_answer;
      return $this;
    }

    /**
     * @return OrderDeliveryAllowance
     */
    public function getOrder_delivery_allowance()
    {
      return $this->order_delivery_allowance;
    }

    /**
     * @param OrderDeliveryAllowance $order_delivery_allowance
     * @return RequestStatusResponse
     */
    public function setOrder_delivery_allowance($order_delivery_allowance)
    {
      $this->order_delivery_allowance = $order_delivery_allowance;
      return $this;
    }

    /**
     * @return BankTransferOrder
     */
    public function getBank_transfer_order()
    {
      return $this->bank_transfer_order;
    }

    /**
     * @param BankTransferOrder $bank_transfer_order
     * @return RequestStatusResponse
     */
    public function setBank_transfer_order($bank_transfer_order)
    {
      $this->bank_transfer_order = $bank_transfer_order;
      return $this;
    }

    /**
     * @return OrderCancellation
     */
    public function getOrder_cancellation()
    {
      return $this->order_cancellation;
    }

    /**
     * @param OrderCancellation $order_cancellation
     * @return RequestStatusResponse
     */
    public function setOrder_cancellation($order_cancellation)
    {
      $this->order_cancellation = $order_cancellation;
      return $this;
    }

    /**
     * @return OrderDeliveryDisallowance
     */
    public function getOrder_delivery_disallowance()
    {
      return $this->order_delivery_disallowance;
    }

    /**
     * @param OrderDeliveryDisallowance $order_delivery_disallowance
     * @return RequestStatusResponse
     */
    public function setOrder_delivery_disallowance($order_delivery_disallowance)
    {
      $this->order_delivery_disallowance = $order_delivery_disallowance;
      return $this;
    }

    /**
     * @return OutflowStatus
     */
    public function getOutflow_status()
    {
      return $this->outflow_status;
    }

    /**
     * @param OutflowStatus $outflow_status
     * @return RequestStatusResponse
     */
    public function setOutflow_status($outflow_status)
    {
      $this->outflow_status = $outflow_status;
      return $this;
    }

    /**
     * @return Pretension
     */
    public function getPretension()
    {
      return $this->pretension;
    }

    /**
     * @param Pretension $pretension
     * @return RequestStatusResponse
     */
    public function setPretension($pretension)
    {
      $this->pretension = $pretension;
      return $this;
    }

    /**
     * @return OperationFault
     */
    public function getOperation_fault()
    {
      return $this->operation_fault;
    }

    /**
     * @param OperationFault $operation_fault
     * @return RequestStatusResponse
     */
    public function setOperation_fault($operation_fault)
    {
      $this->operation_fault = $operation_fault;
      return $this;
    }

    /**
     * @return StatusResponseState
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param StatusResponseState $state
     * @return RequestStatusResponse
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

}
