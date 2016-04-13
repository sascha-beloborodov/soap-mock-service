<?php

class getRequestStatusResponseObject
{

    /**
     * @var RequestStatusResponse $response
     */
    protected $response = null;

    /**
     * @param RequestStatusResponse $response
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

    /**
     * @return RequestStatusResponse
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param RequestStatusResponse $response
     * @return getRequestStatusResponseObject
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

}
