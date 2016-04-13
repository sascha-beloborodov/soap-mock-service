<?php

class getCitiesResponse
{

    /**
     * @var ArrayOfCity $result
     */
    protected $result = null;

    /**
     * @param ArrayOfCity $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfCity
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfCity $result
     * @return getCitiesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
