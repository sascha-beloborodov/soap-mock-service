<?php

class getPretensionStatuses
{

    /**
     * @var ArrayOfString $statuses
     */
    protected $statuses = null;

    /**
     * @param ArrayOfString $statuses
     */
    public function __construct($statuses)
    {
      $this->statuses = $statuses;
    }

    /**
     * @return ArrayOfString
     */
    public function getStatuses()
    {
      return $this->statuses;
    }

    /**
     * @param ArrayOfString $statuses
     * @return getPretensionStatuses
     */
    public function setStatuses($statuses)
    {
      $this->statuses = $statuses;
      return $this;
    }

}
