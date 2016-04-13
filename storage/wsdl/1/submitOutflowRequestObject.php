<?php

class submitOutflowRequestObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $bank_account
     */
    protected $bank_account = null;

    /**
     * @var string $bank_bik
     */
    protected $bank_bik = null;

    /**
     * @var OrderPaymentType $payment_type
     */
    protected $payment_type = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $bank_account
     * @param string $bank_bik
     * @param OrderPaymentType $payment_type
     * @param float $total
     * @param string $request_code
     */
    public function __construct($order_number, $bank_account, $bank_bik, $payment_type, $total, $request_code)
    {
      $this->order_number = $order_number;
      $this->bank_account = $bank_account;
      $this->bank_bik = $bank_bik;
      $this->payment_type = $payment_type;
      $this->total = $total;
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
     * @return submitOutflowRequestObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getBank_account()
    {
      return $this->bank_account;
    }

    /**
     * @param string $bank_account
     * @return submitOutflowRequestObject
     */
    public function setBank_account($bank_account)
    {
      $this->bank_account = $bank_account;
      return $this;
    }

    /**
     * @return string
     */
    public function getBank_bik()
    {
      return $this->bank_bik;
    }

    /**
     * @param string $bank_bik
     * @return submitOutflowRequestObject
     */
    public function setBank_bik($bank_bik)
    {
      $this->bank_bik = $bank_bik;
      return $this;
    }

    /**
     * @return OrderPaymentType
     */
    public function getPayment_type()
    {
      return $this->payment_type;
    }

    /**
     * @param OrderPaymentType $payment_type
     * @return submitOutflowRequestObject
     */
    public function setPayment_type($payment_type)
    {
      $this->payment_type = $payment_type;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param float $total
     * @return submitOutflowRequestObject
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return submitOutflowRequestObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
