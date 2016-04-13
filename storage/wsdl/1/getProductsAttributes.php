<?php

class getProductsAttributes
{

    /**
     * @var ArrayOfString $attributes
     */
    protected $attributes = null;

    /**
     * @param ArrayOfString $attributes
     */
    public function __construct($attributes)
    {
      $this->attributes = $attributes;
    }

    /**
     * @return ArrayOfString
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param ArrayOfString $attributes
     * @return getProductsAttributes
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

}
