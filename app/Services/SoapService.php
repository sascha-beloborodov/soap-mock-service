<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/20/16
 * Time: 5:28 PM
 */

namespace App\Services;

use App\Services\tn\SubmittedRequest;
use OrderDeliveryAllowance;
use SoapFault;

class SoapService {
    
    public $request_code;

    public $responseObjectName;
    
    public $responseObject;

    public $responsePropertyObject;
    
    public $responsePropertyObjectState;

    /**
     * @return mixed
     */
    public function getResponsePropertyObjectState()
    {
        return $this->responsePropertyObjectState;
    }

    /**
     * @param mixed $responsePropertyObjectState
     */
    public function setResponsePropertyObjectState($responsePropertyObjectState)
    {
        $this->responsePropertyObjectState = $responsePropertyObjectState;
    }

    /**
     * @return mixed
     */
    public function getResponsePropertyObject()
    {
        return $this->responsePropertyObject;
    }

    /**
     * @param mixed $responsePropertyObject
     */
    public function setResponsePropertyObject($responsePropertyObject)
    {
        $this->responsePropertyObject = $responsePropertyObject;
    }


    public function __call($name, $arguments)
    {
        // Hardcode for NSI
        if ($name == 'getRequestStatusObject') {
            return $this->_getRequestStatus($arguments);
        }
        if ($name == 'getRequestStatus') {
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
        $responseObject = $this->getResponseObject();
//        $responseObject->response = 200;

        if (is_a($responseObject->order_delivery_allowance, 'OrderDeliveryAllowance')) {
            $responseObject->order_delivery_allowance->order_number = '500000222';
            $responseObject->order_delivery_allowance->status = 'OK';
        }

        $state = $this->getResponsePropertyObjectState();
        $state->state = $state::success;
//        $responseObject->setState($state);
        $responseObject->setState('success');

//        $refl = new \ReflectionClass('OrderDeliveryAllowance');
//        $reflObj = $refl->newInstanceWithoutConstructor();
//        $responseObject->setOrder_delivery_allowance()
        
//        return $responseObject;
        return ['response' => $responseObject];
//        return ['response' => [$this->getResponseObject()]];
    }

    /**
     * @return mixed
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }

    /**
     * @param mixed $responseObject
     */
    public function setResponseObject($responseObject)
    {
        $this->responseObject = $responseObject;
    }

    /**
     * @return mixed
     */
    public function getResponseObjectName()
    {
        return $this->responseObjectName;
    }

    /**
     * @param mixed $responseObjectName
     */
    public function setResponseObjectName($responseObjectName)
    {
        $this->responseObjectName = $responseObjectName;
    }

    public function __toString()
    {
        return __CLASS__;
    }
}