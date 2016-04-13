<?php

class getProductsGroupsResponse
{

    /**
     * @var ArrayOfProductGroup $result
     */
    protected $result = null;

    /**
     * @param ArrayOfProductGroup $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfProductGroup
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfProductGroup $result
     * @return getProductsGroupsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
