<?php

class getMeasureUnits
{

    /**
     * @var ArrayOfString $units
     */
    protected $units = null;

    /**
     * @param ArrayOfString $units
     */
    public function __construct($units)
    {
      $this->units = $units;
    }

    /**
     * @return ArrayOfString
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param ArrayOfString $units
     * @return getMeasureUnits
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

}
