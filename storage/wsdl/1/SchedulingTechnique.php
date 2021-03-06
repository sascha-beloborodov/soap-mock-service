<?php

class SchedulingTechnique
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @param string $code
     * @param string $label
     */
    public function __construct($code, $label)
    {
      $this->code = $code;
      $this->label = $label;
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
     * @return SchedulingTechnique
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return SchedulingTechnique
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
