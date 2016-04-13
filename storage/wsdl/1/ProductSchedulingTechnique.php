<?php

class ProductSchedulingTechnique
{

    /**
     * @var string $product
     */
    protected $product = null;

    /**
     * @var string $warehouse
     */
    protected $warehouse = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $product
     * @param string $warehouse
     * @param string $value
     */
    public function __construct($product, $warehouse, $value)
    {
      $this->product = $product;
      $this->warehouse = $warehouse;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param string $product
     * @return ProductSchedulingTechnique
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouse()
    {
      return $this->warehouse;
    }

    /**
     * @param string $warehouse
     * @return ProductSchedulingTechnique
     */
    public function setWarehouse($warehouse)
    {
      $this->warehouse = $warehouse;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return ProductSchedulingTechnique
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
