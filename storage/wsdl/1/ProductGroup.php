<?php

class ProductGroup
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ArrayOfString $attributes
     */
    protected $attributes = null;

    /**
     * @param string $code
     * @param string $name
     * @param ArrayOfString $attributes
     */
    public function __construct($code, $name, $attributes)
    {
      $this->code = $code;
      $this->name = $name;
      $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return ProductGroup
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return ProductGroup
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return ProductGroup
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

}
