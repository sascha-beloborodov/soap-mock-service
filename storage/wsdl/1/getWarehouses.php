<?php

class getWarehouses
{

    /**
     * @var ArrayOfString $warehouses
     */
    protected $warehouses = null;

    /**
     * @param ArrayOfString $warehouses
     */
    public function __construct($warehouses)
    {
      $this->warehouses = $warehouses;
    }

    /**
     * @return ArrayOfString
     */
    public function getWarehouses()
    {
      return $this->warehouses;
    }

    /**
     * @param ArrayOfString $warehouses
     * @return getWarehouses
     */
    public function setWarehouses($warehouses)
    {
      $this->warehouses = $warehouses;
      return $this;
    }

}
