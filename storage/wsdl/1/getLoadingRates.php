<?php

class getLoadingRates
{

    /**
     * @var ArrayOfString $products
     */
    protected $products = null;

    /**
     * @var ArrayOfString $cities
     */
    protected $cities = null;

    /**
     * @param ArrayOfString $products
     * @param ArrayOfString $cities
     */
    public function __construct($products, $cities)
    {
      $this->products = $products;
      $this->cities = $cities;
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
     * @return getLoadingRates
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCities()
    {
      return $this->cities;
    }

    /**
     * @param ArrayOfString $cities
     * @return getLoadingRates
     */
    public function setCities($cities)
    {
      $this->cities = $cities;
      return $this;
    }

}
