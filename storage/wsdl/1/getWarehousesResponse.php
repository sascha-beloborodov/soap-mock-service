<?php

class getWarehousesResponse
{

    /**
     * @var ArrayOfWarehouse $result
     */
    protected $result = null;

    /**
     * @param ArrayOfWarehouse $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfWarehouse
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfWarehouse $result
     * @return getWarehousesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
