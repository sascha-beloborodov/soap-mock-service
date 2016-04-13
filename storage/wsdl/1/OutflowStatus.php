<?php

class OutflowStatus
{

    /**
     * @var boolean $is_fulfilled
     */
    protected $is_fulfilled = null;

    /**
     * @param boolean $is_fulfilled
     */
    public function __construct($is_fulfilled)
    {
      $this->is_fulfilled = $is_fulfilled;
    }

    /**
     * @return boolean
     */
    public function getIs_fulfilled()
    {
      return $this->is_fulfilled;
    }

    /**
     * @param boolean $is_fulfilled
     * @return OutflowStatus
     */
    public function setIs_fulfilled($is_fulfilled)
    {
      $this->is_fulfilled = $is_fulfilled;
      return $this;
    }

}
