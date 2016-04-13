<?php

class getSchedulingTechniques
{

    /**
     * @var ArrayOfString $techniques
     */
    protected $techniques = null;

    /**
     * @param ArrayOfString $techniques
     */
    public function __construct($techniques)
    {
      $this->techniques = $techniques;
    }

    /**
     * @return ArrayOfString
     */
    public function getTechniques()
    {
      return $this->techniques;
    }

    /**
     * @param ArrayOfString $techniques
     * @return getSchedulingTechniques
     */
    public function setTechniques($techniques)
    {
      $this->techniques = $techniques;
      return $this;
    }

}
