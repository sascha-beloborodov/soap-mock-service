<?php

class submitPretensionObject
{

    /**
     * @var string $order_number
     */
    protected $order_number = null;

    /**
     * @var string $contraparty_name
     */
    protected $contraparty_name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var ArrayOfUri $files
     */
    protected $files = null;

    /**
     * @var string $request_code
     */
    protected $request_code = null;

    /**
     * @param string $order_number
     * @param string $contraparty_name
     * @param string $description
     * @param ArrayOfUri $files
     * @param string $request_code
     */
    public function __construct($order_number, $contraparty_name, $description, $files, $request_code)
    {
      $this->order_number = $order_number;
      $this->contraparty_name = $contraparty_name;
      $this->description = $description;
      $this->files = $files;
      $this->request_code = $request_code;
    }

    /**
     * @return string
     */
    public function getOrder_number()
    {
      return $this->order_number;
    }

    /**
     * @param string $order_number
     * @return submitPretensionObject
     */
    public function setOrder_number($order_number)
    {
      $this->order_number = $order_number;
      return $this;
    }

    /**
     * @return string
     */
    public function getContraparty_name()
    {
      return $this->contraparty_name;
    }

    /**
     * @param string $contraparty_name
     * @return submitPretensionObject
     */
    public function setContraparty_name($contraparty_name)
    {
      $this->contraparty_name = $contraparty_name;
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
     * @return submitPretensionObject
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return ArrayOfUri
     */
    public function getFiles()
    {
      return $this->files;
    }

    /**
     * @param ArrayOfUri $files
     * @return submitPretensionObject
     */
    public function setFiles($files)
    {
      $this->files = $files;
      return $this;
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
     * @return submitPretensionObject
     */
    public function setRequest_code($request_code)
    {
      $this->request_code = $request_code;
      return $this;
    }

}
