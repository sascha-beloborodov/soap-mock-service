<?php

class getRequestStatusObject
{

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $request_code
     */
    public function __construct($request_code)
    {
      $this->request_code = $request_code;
    }

    /**
     * @return string
     */
    public function getRequest_code()
    {
      return $this->request_code;
    }

    /**
     * @param string $request_code
     * @return getRequestStatusObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
