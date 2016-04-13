<?php

class getCities
{

    /**
     * @var ArrayOfString $cities
     */
    protected $cities = null;

    /**
     * @param ArrayOfString $cities
     */
    public function __construct($cities)
    {
      $this->cities = $cities;
    }

    /**
     * @return ArrayOfString
     */
    public function getCities()
    {
      return $this->cities;
    }

    /**
     * @param ArrayOfString $cities
     * @return getCities
     */
    public function setCities($cities)
    {
      $this->cities = $cities;
      return $this;
    }

}
