<?php

class getMeasureUnitsResponse
{

    /**
     * @var ArrayOfMeasureUnit $result
     */
    protected $result = null;

    /**
     * @param ArrayOfMeasureUnit $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfMeasureUnit
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfMeasureUnit $result
     * @return getMeasureUnitsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
