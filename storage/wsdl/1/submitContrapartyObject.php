<?php

class submitContrapartyObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $inn
     */
    protected $inn = null;

    /**
     * @var string $kpp
     */
    protected $kpp = null;

    /**
     * @var string $okpo
     */
    protected $okpo = null;

    /**
     * @var string $payment_account
     */
    protected $payment_account = null;

    /**
     * @var string $bik
     */
    protected $bik = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $legal_address
     */
    protected $legal_address = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $name
     * @param string $inn
     * @param string $kpp
     * @param string $okpo
     * @param string $payment_account
     * @param string $bik
     * @param string $currency
     * @param string $legal_address
     * @param string $request_code
     */
    public function __construct($name, $inn, $kpp, $okpo, $payment_account, $bik, $currency, $legal_address, $request_code)
    {
      $this->name = $name;
      $this->inn = $inn;
      $this->kpp = $kpp;
      $this->okpo = $okpo;
      $this->payment_account = $payment_account;
      $this->bik = $bik;
      $this->currency = $currency;
      $this->legal_address = $legal_address;
      $this->request_code = $request_code;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return submitContrapartyObject
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getInn()
    {
      return $this->inn;
    }

    /**
     * @param string $inn
     * @return submitContrapartyObject
     */
    public function setInn($inn)
    {
      $this->inn = $inn;
      return $this;
    }

    /**
     * @return string
     */
    public function getKpp()
    {
      return $this->kpp;
    }

    /**
     * @param string $kpp
     * @return submitContrapartyObject
     */
    public function setKpp($kpp)
    {
      $this->kpp = $kpp;
      return $this;
    }

    /**
     * @return string
     */
    public function getOkpo()
    {
      return $this->okpo;
    }

    /**
     * @param string $okpo
     * @return submitContrapartyObject
     */
    public function setOkpo($okpo)
    {
      $this->okpo = $okpo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayment_account()
    {
      return $this->payment_account;
    }

    /**
     * @param string $payment_account
     * @return submitContrapartyObject
     */
    public function setPayment_account($payment_account)
    {
      $this->payment_account = $payment_account;
      return $this;
    }

    /**
     * @return string
     */
    public function getBik()
    {
      return $this->bik;
    }

    /**
     * @param string $bik
     * @return submitContrapartyObject
     */
    public function setBik($bik)
    {
      $this->bik = $bik;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return submitContrapartyObject
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegal_address()
    {
      return $this->legal_address;
    }

    /**
     * @param string $legal_address
     * @return submitContrapartyObject
     */
    public function setLegal_address($legal_address)
    {
      $this->legal_address = $legal_address;
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
     * @return submitContrapartyObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
