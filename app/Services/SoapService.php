<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/20/16
 * Time: 5:28 PM
 */

namespace App\Services;

use App\Services\tn\SubmittedRequest;
use SoapFault;

class SoapService {
    
    public $request_code;

    public function __call($name, $arguments)
    {
        // Hardcode for NSI
        if ($name == 'getRequestStatusObject') {
            return $this->_getRequestStatus($arguments);
        }
        if ($name == 'serviceAuth') {
            return 'User was authorized.';
        }
        
        $submittedRequest = new SubmittedRequest($this->getRequestCode()); 
        return $submittedRequest;
    }


    /**
     * @return mixed
     */
    public function getRequestCode()
    {
        return $this->request_code;
    }

    /**
     * @param mixed $request_code
     */
    public function setRequestCode($request_code)
    {
        $this->request_code = $request_code;
    }

    private function _getRequestStatus($params = null)
    {
        return null;
    }

    public function __toString()
    {
        return __CLASS__;
    }
}