<?php

class OperationFault
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $code
     * @param string $description
     */
    public function __construct($code, $description)
    {
      $this->code = $code;
      $this->description = $description;
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
     * @return OperationFault
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return OperationFault
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
