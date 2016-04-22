<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/22/16
 * Time: 5:49 PM
 */
namespace App\Helpers;

class StringHelper {
    
    private $capitalizeLetters;

    /**
     * @return mixed
     */
    public function getCapitalizeLetters()
    {
        return $this->capitalizeLetters;
    }

    /**
     * @param mixed $capitalizeLetters
     */
    public function setCapitalizeLetters()
    {
        $i = 'A';
        $this->capitalizeLetters = [];
        for (;$i <= 'Z'; $i++) {
            if (strlen($i) > 1) break;
            $this->capitalizeLetters[] = $i;
        }
        return $this;
    }
}