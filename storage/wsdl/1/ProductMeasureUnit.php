<?php

class ProductMeasureUnit
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $classifier_code
     */
    protected $classifier_code = null;

    /**
     * @var float $volume
     */
    protected $volume = null;

    /**
     * @var float $net_weight
     */
    protected $net_weight = null;

    /**
     * @var float $gross_weight
     */
    protected $gross_weight = null;

    /**
     * @var ArrayOfProductWeightAdjustment $weight_adjustment
     */
    protected $weight_adjustment = null;

    /**
     * @var float $coeff
     */
    protected $coeff = null;

    /**
     * @param string $code
     * @param string $classifier_code
     * @param float $volume
     * @param float $net_weight
     * @param float $gross_weight
     * @param ArrayOfProductWeightAdjustment $weight_adjustment
     * @param float $coeff
     */
    public function __construct($code, $classifier_code, $volume, $net_weight, $gross_weight, $weight_adjustment, $coeff)
    {
      $this->code = $code;
      $this->classifier_code = $classifier_code;
      $this->volume = $volume;
      $this->net_weight = $net_weight;
      $this->gross_weight = $gross_weight;
      $this->weight_adjustment = $weight_adjustment;
      $this->coeff = $coeff;
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
     * @return ProductMeasureUnit
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassifier_code()
    {
      return $this->classifier_code;
    }

    /**
     * @param string $classifier_code
     * @return ProductMeasureUnit
     */
    public function setClassifier_code($classifier_code)
    {
      $this->classifier_code = $classifier_code;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->volume;
    }

    /**
     * @param float $volume
     * @return ProductMeasureUnit
     */
    public function setVolume($volume)
    {
      $this->volume = $volume;
      return $this;
    }

    /**
     * @return float
     */
    public function getNet_weight()
    {
      return $this->net_weight;
    }

    /**
     * @param float $net_weight
     * @return ProductMeasureUnit
     */
    public function setNet_weight($net_weight)
    {
      $this->net_weight = $net_weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getGross_weight()
    {
      return $this->gross_weight;
    }

    /**
     * @param float $gross_weight
     * @return ProductMeasureUnit
     */
    public function setGross_weight($gross_weight)
    {
      $this->gross_weight = $gross_weight;
      return $this;
    }

    /**
     * @return ArrayOfProductWeightAdjustment
     */
    public function getWeight_adjustment()
    {
      return $this->weight_adjustment;
    }

    /**
     * @param ArrayOfProductWeightAdjustment $weight_adjustment
     * @return ProductMeasureUnit
     */
    public function setWeight_adjustment($weight_adjustment)
    {
      $this->weight_adjustment = $weight_adjustment;
      return $this;
    }

    /**
     * @return float
     */
    public function getCoeff()
    {
      return $this->coeff;
    }

    /**
     * @param float $coeff
     * @return ProductMeasureUnit
     */
    public function setCoeff($coeff)
    {
      $this->coeff = $coeff;
      return $this;
    }

}
