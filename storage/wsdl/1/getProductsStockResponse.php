<?php

class getProductsStockResponse
{

    /**
     * @var ArrayOfProductStock $result
     */
    protected $result = null;

    /**
     * @param ArrayOfProductStock $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfProductStock
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfProductStock $result
     * @return getProductsStockResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
