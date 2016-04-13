<?php

class ProductAttributeValue
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $code
     * @param string $value
     */
    public function __construct($code, $value)
    {
      $this->code = $code;
      $this->value = $value;
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
     * @return ProductAttributeValue
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return ProductAttributeValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
