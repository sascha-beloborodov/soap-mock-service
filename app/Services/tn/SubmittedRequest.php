<?php

namespace App\Services\tn;

class SubmittedRequest {
    
    private $request_code;

    /**
     * SubmittedRequest constructor.
     * @param $request_code
     */
    public function __construct($request_code)
    {
        $this->request_code = $request_code;
    }

}