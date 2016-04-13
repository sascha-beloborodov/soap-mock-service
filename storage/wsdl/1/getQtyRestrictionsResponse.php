<?php

class getQtyRestrictionsResponse
{

    /**
     * @var ArrayOfQtyRestriction $result
     */
    protected $result = null;

    /**
     * @param ArrayOfQtyRestriction $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfQtyRestriction
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfQtyRestriction $result
     * @return getQtyRestrictionsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
