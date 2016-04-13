<?php

class getProductsList
{

    /**
     * @var ArrayOfString $products
     */
    protected $products = null;

    /**
     * @param ArrayOfString $products
     */
    public function __construct($products)
    {
      $this->products = $products;
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
     * @return getProductsList
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
