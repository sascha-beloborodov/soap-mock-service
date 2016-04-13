<?php

class getProductsListResponse
{

    /**
     * @var ArrayOfProductEntity $result
     */
    protected $result = null;

    /**
     * @param ArrayOfProductEntity $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfProductEntity
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfProductEntity $result
     * @return getProductsListResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
