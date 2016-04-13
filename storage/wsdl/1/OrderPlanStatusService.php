<?php

class OrderPlanStatusService
{

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var string $vat_rate
     */
    protected $vat_rate = null;

    /**
     * @var float $vat_amount
     */
    protected $vat_amount = null;

    /**
     * @param string $service
     * @param string $vat_rate
     * @param float $vat_amount
     */
    public function __construct($service, $vat_rate, $vat_amount)
    {
      $this->service = $service;
      $this->vat_rate = $vat_rate;
      $this->vat_amount = $vat_amount;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return OrderPlanStatusService
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @return string
     */
    public function getVat_rate()
    {
      return $this->vat_rate;
    }

    /**
     * @param string $vat_rate
     * @return OrderPlanStatusService
     */
    public function setVat_rate($vat_rate)
    {
      $this->vat_rate = $vat_rate;
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
     * @return OrderPlanStatusService
     */
    public function setVat_amount($vat_amount)
    {
      $this->vat_amount = $vat_amount;
      return $this;
    }

}
