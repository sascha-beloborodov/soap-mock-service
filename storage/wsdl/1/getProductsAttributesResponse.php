<?php

class getProductsAttributesResponse
{

    /**
     * @var ArrayOfProductAttribute $result
     */
    protected $result = null;

    /**
     * @param ArrayOfProductAttribute $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfProductAttribute
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfProductAttribute $result
     * @return getProductsAttributesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
