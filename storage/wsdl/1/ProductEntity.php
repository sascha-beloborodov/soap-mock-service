<?php

class ProductEntity
{

    /**
     * @var string $group
     */
    protected $group = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $ekn
     */
    protected $ekn = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $doc_name
     */
    protected $doc_name = null;

    /**
     * @var string $spec_unit
     */
    protected $spec_unit = null;

    /**
     * @var string $base_unit
     */
    protected $base_unit = null;

    /**
     * @var string $shipping_place_unit
     */
    protected $shipping_place_unit = null;

    /**
     * @var ArrayOfProductShippingPlaceUnitAdjustment $shipping_place_unit_adjustment
     */
    protected $shipping_place_unit_adjustment = null;

    /**
     * @var ArrayOfProductMeasureUnit $measure_units
     */
    protected $measure_units = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $application
     */
    protected $application = null;

    /**
     * @var string $storing
     */
    protected $storing = null;

    /**
     * @var ArrayOfProductAttributeValue $attributes
     */
    protected $attributes = null;

    /**
     * @param string $group
     * @param string $code
     * @param string $ekn
     * @param string $name
     * @param string $doc_name
     * @param string $spec_unit
     * @param string $base_unit
     * @param string $shipping_place_unit
     * @param ArrayOfProductShippingPlaceUnitAdjustment $shipping_place_unit_adjustment
     * @param ArrayOfProductMeasureUnit $measure_units
     * @param ArrayOfProductAttributeValue $attributes
     */
    public function __construct($group, $code, $ekn, $name, $doc_name, $spec_unit, $base_unit, $shipping_place_unit, $shipping_place_unit_adjustment, $measure_units, $attributes)
    {
      $this->group = $group;
      $this->code = $code;
      $this->ekn = $ekn;
      $this->name = $name;
      $this->doc_name = $doc_name;
      $this->spec_unit = $spec_unit;
      $this->base_unit = $base_unit;
      $this->shipping_place_unit = $shipping_place_unit;
      $this->shipping_place_unit_adjustment = $shipping_place_unit_adjustment;
      $this->measure_units = $measure_units;
      $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param string $group
     * @return ProductEntity
     */
    public function setGroup($group)
    {
      $this->group = $group;
      return $this;
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
     * @return ProductEntity
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getEkn()
    {
      return $this->ekn;
    }

    /**
     * @param string $ekn
     * @return ProductEntity
     */
    public function setEkn($ekn)
    {
      $this->ekn = $ekn;
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
     * @return ProductEntity
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDoc_name()
    {
      return $this->doc_name;
    }

    /**
     * @param string $doc_name
     * @return ProductEntity
     */
    public function setDoc_name($doc_name)
    {
      $this->doc_name = $doc_name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpec_unit()
    {
      return $this->spec_unit;
    }

    /**
     * @param string $spec_unit
     * @return ProductEntity
     */
    public function setSpec_unit($spec_unit)
    {
      $this->spec_unit = $spec_unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase_unit()
    {
      return $this->base_unit;
    }

    /**
     * @param string $base_unit
     * @return ProductEntity
     */
    public function setBase_unit($base_unit)
    {
      $this->base_unit = $base_unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipping_place_unit()
    {
      return $this->shipping_place_unit;
    }

    /**
     * @param string $shipping_place_unit
     * @return ProductEntity
     */
    public function setShipping_place_unit($shipping_place_unit)
    {
      $this->shipping_place_unit = $shipping_place_unit;
      return $this;
    }

    /**
     * @return ArrayOfProductShippingPlaceUnitAdjustment
     */
    public function getShipping_place_unit_adjustment()
    {
      return $this->shipping_place_unit_adjustment;
    }

    /**
     * @param ArrayOfProductShippingPlaceUnitAdjustment $shipping_place_unit_adjustment
     * @return ProductEntity
     */
    public function setShipping_place_unit_adjustment($shipping_place_unit_adjustment)
    {
      $this->shipping_place_unit_adjustment = $shipping_place_unit_adjustment;
      return $this;
    }

    /**
     * @return ArrayOfProductMeasureUnit
     */
    public function getMeasure_units()
    {
      return $this->measure_units;
    }

    /**
     * @param ArrayOfProductMeasureUnit $measure_units
     * @return ProductEntity
     */
    public function setMeasure_units($measure_units)
    {
      $this->measure_units = $measure_units;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return ProductEntity
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
      return $this->application;
    }

    /**
     * @param string $application
     * @return ProductEntity
     */
    public function setApplication($application)
    {
      $this->application = $application;
      return $this;
    }

    /**
     * @return string
     */
    public function getStoring()
    {
      return $this->storing;
    }

    /**
     * @param string $storing
     * @return ProductEntity
     */
    public function setStoring($storing)
    {
      $this->storing = $storing;
      return $this;
    }

    /**
     * @return ArrayOfProductAttributeValue
     */
    public function getAttributes()
    {
      return $this->attributes;
    }

    /**
     * @param ArrayOfProductAttributeValue $attributes
     * @return ProductEntity
     */
    public function setAttributes($attributes)
    {
      $this->attributes = $attributes;
      return $this;
    }

}
