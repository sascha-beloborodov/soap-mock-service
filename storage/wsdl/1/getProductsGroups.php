<?php

class getProductsGroups
{

    /**
     * @var ArrayOfString $groups
     */
    protected $groups = null;

    /**
     * @param ArrayOfString $groups
     */
    public function __construct($groups)
    {
      $this->groups = $groups;
    }

    /**
     * @return ArrayOfString
     */
    public function getGroups()
    {
      return $this->groups;
    }

    /**
     * @param ArrayOfString $groups
     * @return getProductsGroups
     */
    public function setGroups($groups)
    {
      $this->groups = $groups;
      return $this;
    }

}
