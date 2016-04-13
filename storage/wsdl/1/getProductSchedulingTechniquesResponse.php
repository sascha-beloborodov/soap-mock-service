<?php

class getProductSchedulingTechniquesResponse
{

    /**
     * @var ArrayOfProductSchedulingTechnique $result
     */
    protected $result = null;

    /**
     * @param ArrayOfProductSchedulingTechnique $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfProductSchedulingTechnique
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfProductSchedulingTechnique $result
     * @return getProductSchedulingTechniquesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
