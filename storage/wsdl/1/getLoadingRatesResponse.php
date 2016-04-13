<?php

class getLoadingRatesResponse
{

    /**
     * @var ArrayOfLoadingRate $result
     */
    protected $result = null;

    /**
     * @param ArrayOfLoadingRate $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfLoadingRate
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfLoadingRate $result
     * @return getLoadingRatesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
