<?php

class getQtyRestrictions
{

    /**
     * @var ArrayOfString $products
     */
    protected $products = null;

    /**
     * @var ArrayOfString $warehouses
     */
    protected $warehouses = null;

    /**
     * @param ArrayOfString $products
     * @param ArrayOfString $warehouses
     */
    public function __construct($products, $warehouses)
    {
      $this->products = $products;
      $this->warehouses = $warehouses;
    }

    /**
     * @return ArrayOfString
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfString $products
     * @return getQtyRestrictions
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
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
     * @return getQtyRestrictions
     */
    public function setWarehouses($warehouses)
    {
      $this->warehouses = $warehouses;
      return $this;
    }

}
