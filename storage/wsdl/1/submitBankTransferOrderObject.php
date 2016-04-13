<?php

class submitBankTransferOrderObject
{

    /**
     * @var string $contraparty
     */
    protected $contraparty = null;

    /**
     * @var string $bank_account
     */
    protected $bank_account = null;

    /**
     * @var string $bank_bik
     */
    protected $bank_bik = null;

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var float $total
     */
    protected $total = null;

    /**
     * @var string $payment_number
     */
    protected $payment_number = null;

    /**
     * @var OrderPaymentType $payment_type
     */
    protected $payment_type = null;

    /**
     * @var string $payment_date
     */
    protected $payment_date = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $contraparty
     * @param string $bank_account
     * @param string $bank_bik
     * @param string $order_number
     * @param float $total
     * @param string $payment_number
     * @param OrderPaymentType $payment_type
     * @param string $payment_date
     * @param string $request_code
     */
    public function __construct($contraparty, $bank_account, $bank_bik, $order_number, $total, $payment_number, $payment_type, $payment_date, $request_code)
    {
      $this->contraparty = $contraparty;
      $this->bank_account = $bank_account;
      $this->bank_bik = $bank_bik;
      $this->order_number = $order_number;
      $this->total = $total;
      $this->payment_number = $payment_number;
      $this->payment_type = $payment_type;
      $this->payment_date = $payment_date;
      $this->request_code = $request_code;
    }

    /**
     * @return string
     */
    public function getContraparty()
    {
      return $this->contraparty;
    }

    /**
     * @param string $contraparty
     * @return submitBankTransferOrderObject
     */
    public function setContraparty($contraparty)
    {
      $this->contraparty = $contraparty;
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
     * @return submitBankTransferOrderObject
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
     * @return submitBankTransferOrderObject
     */
    public function setBank_bik($bank_bik)
    {
      $this->bank_bik = $bank_bik;
      return $this;
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
     * @return submitBankTransferOrderObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
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
     * @return submitBankTransferOrderObject
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayment_number()
    {
      return $this->payment_number;
    }

    /**
     * @param string $payment_number
     * @return submitBankTransferOrderObject
     */
    public function setPayment_number($payment_number)
    {
      $this->payment_number = $payment_number;
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
     * @return submitBankTransferOrderObject
     */
    public function setPayment_type($payment_type)
    {
      $this->payment_type = $payment_type;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayment_date()
    {
      return $this->payment_date;
    }

    /**
     * @param string $payment_date
     * @return submitBankTransferOrderObject
     */
    public function setPayment_date($payment_date)
    {
      $this->payment_date = $payment_date;
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
     * @return submitBankTransferOrderObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
