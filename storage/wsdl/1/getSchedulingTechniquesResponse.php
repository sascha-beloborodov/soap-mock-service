<?php

class getSchedulingTechniquesResponse
{

    /**
     * @var ArrayOfSchedulingTechnique $result
     */
    protected $result = null;

    /**
     * @param ArrayOfSchedulingTechnique $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfSchedulingTechnique
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfSchedulingTechnique $result
     * @return getSchedulingTechniquesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
