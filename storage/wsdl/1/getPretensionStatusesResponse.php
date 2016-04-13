<?php

class getPretensionStatusesResponse
{

    /**
     * @var ArrayOfPretensionStatus $result
     */
    protected $result = null;

    /**
     * @param ArrayOfPretensionStatus $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ArrayOfPretensionStatus
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ArrayOfPretensionStatus $result
     * @return getPretensionStatusesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
