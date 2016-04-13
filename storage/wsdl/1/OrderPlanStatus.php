<?php

class OrderPlanStatus
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var OrderPlanStatusValue $status
     */
    protected $status = null;

    /**
     * @var float $vat_amount
     */
    protected $vat_amount = null;

    /**
     * @var string $purchase_guarantee_date
     */
    protected $purchase_guarantee_date = null;

    /**
     * @var ArrayOfOrderPlanStatusItem $items
     */
    protected $items = null;

    /**
     * @var ArrayOfOrderPlanStatusService $services
     */
    protected $services = null;

    /**
     * @param string $order_number
     * @param OrderPlanStatusValue $status
     * @param float $vat_amount
     * @param string $purchase_guarantee_date
     * @param ArrayOfOrderPlanStatusService $services
     */
    public function __construct($order_number, $status, $vat_amount, $purchase_guarantee_date, $services)
    {
      $this->order_number = $order_number;
      $this->status = $status;
      $this->vat_amount = $vat_amount;
      $this->purchase_guarantee_date = $purchase_guarantee_date;
      $this->services = $services;
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
     * @return OrderPlanStatus
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return OrderPlanStatusValue
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param OrderPlanStatusValue $status
     * @return OrderPlanStatus
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return float
     */
    public function getVat_amount()
    {
      return $this->vat_amount;
    }

    /**
     * @param float $vat_amount
     * @return OrderPlanStatus
     */
    public function setVat_amount($vat_amount)
    {
      $this->vat_amount = $vat_amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchase_guarantee_date()
    {
      return $this->purchase_guarantee_date;
    }

    /**
     * @param string $purchase_guarantee_date
     * @return OrderPlanStatus
     */
    public function setPurchase_guarantee_date($purchase_guarantee_date)
    {
      $this->purchase_guarantee_date = $purchase_guarantee_date;
      return $this;
    }

    /**
     * @return ArrayOfOrderPlanStatusItem
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfOrderPlanStatusItem $items
     * @return OrderPlanStatus
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

    /**
     * @return ArrayOfOrderPlanStatusService
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param ArrayOfOrderPlanStatusService $services
     * @return OrderPlanStatus
     */
    public function setServices($services)
    {
      $this->services = $services;
      return $this;
    }

}
