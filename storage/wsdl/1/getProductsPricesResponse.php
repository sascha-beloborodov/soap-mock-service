<?php

class getProductsPricesResponse
{

    /**
     * @var ArrayOfProductPrice $result
     */
    protected $result = null;

    /**
     * @param ArrayOfProductPrice $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfProductPrice
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfProductPrice $result
     * @return getProductsPricesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
