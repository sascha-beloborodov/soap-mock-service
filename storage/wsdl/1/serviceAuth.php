<?php

class serviceAuth
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
      $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return serviceAuth
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
