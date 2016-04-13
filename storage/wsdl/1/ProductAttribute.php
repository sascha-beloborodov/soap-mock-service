<?php

class ProductAttribute
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
     * @var ProductAttributeType $type
     */
    protected $type = null;

    /**
     * @var ArrayOfProductAttributeOption $options
     */
    protected $options = null;

    /**
     * @param string $code
     * @param string $name
     * @param ProductAttributeType $type
     */
    public function __construct($code, $name, $type)
    {
      $this->code = $code;
      $this->name = $name;
      $this->type = $type;
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
     * @return ProductAttribute
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
     * @return ProductAttribute
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ProductAttributeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param ProductAttributeType $type
     * @return ProductAttribute
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return ArrayOfProductAttributeOption
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param ArrayOfProductAttributeOption $options
     * @return ProductAttribute
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
