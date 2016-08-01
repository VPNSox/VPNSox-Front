<?php

define('GIMME_PROXY_ASSOC_ARRAY', 'assoc');
define('GIMME_PROXY_OBJECT', 'object');
define('GIMME_PROXY_RAW_STRING', 'string');

class GimmeProxy {
    
    protected $userId = null;
    protected $defaultTimeout = null;
    protected $returnType = GIMME_PROXY_ASSOC_ARRAY;
    protected $lastResponse;
    
    public function __construct($userId = null, $defaultTimeout = null, $returnType = null) {
        
        if ($userId !== null) {
            $this->userId = $userId;
        }
        if ($defaultTimeout !== null) {
            $this->defaultTimeout = $defaultTimeout;
        }
        if ($returnType !== null) {
            $this->returnType = $returnType;
        }
        
    } // __construct
    
    public function createUserId($prefix = null) {
        $this->userId = uniqid($prefix);
        return $this->userId;
    }
    
    /**
     * getters
     *
     **/
    public function getUserId() {
        return $this->userId;
    }
    public function getReturnType() {
        return $this->returnType;
    }
    public function getTimeout() {
        return $this->defaultTimeout;
    }
    public function getDefaultTimeout() {
        return $this->getTimeout();
    }
    public function getLastResponse($returnType = null) {
        if ($returnType !== null) {
            $returnType = $this->checkReturnType($returnType);
        }
        if ($returnType === null) {
            $returnType = $this->returnType;
        }
        return $this->convertLastResponse($returnType);
    }
    
    /**
     * setters
     *
     **/
    public function setUserId($userId) {
        $this->userId = $userId;
    }
    
    public function setTimeout($timeout) {
        $this->defaultTimeout = $timeout;
    }
    
    public function setDefaultTimeout($timeout) {
        $this->setTimeout($timeout);
    }
    
    public function setReturnType($returnType) {
        $returnType = $this->checkReturnType($returnType);
        if ($returnType === null) {
            return;
        }
        $this->returnType = $returnType;
    }
    
    private function checkReturnType($returnType) {
        $acceptableValues = array(GIMME_PROXY_ASSOC_ARRAY, GIMME_PROXY_OBJECT, GIMME_PROXY_RAW_STRING);
        if (!in_array($returnType, $acceptableValues)) {
            trigger_error("Return Type must be one of GIMME_PROXY_ASSOC_ARRAY, GIMME_PROXY_OBJECT, GIMME_PROXY_RAW_STRING!\nNew value will not be set", E_USER_WARNING);
            return null;
        }
        return $returnType;
    }
    
    public function gimmeProxy($returnType = null, $timeout = null, $userId = null) {
        
        $timeoutToUse = $userIdToUse = $returnTypeToUse = $toReturn = null;
        
        if ($returnType !== null) {
            $returnType = $this->checkReturnType($returnType);
            if ($returnType !== null) {
                $returnTypeToUse = $returnType;
            }
        }
        // possible that the returnType passed in failed, hence why this is an 'if' and not 'elseif'
        if (($returnType === null) AND ($this->returnType !== null)) {
            // don't need to check since this should already be set
            $returnTypeToUse = $this->returnType;
        }
        
        if ($timeout !== null) {
            $timeoutToUse = $timeout;
        }
        elseif ($this->defaultTimeout !== null) {
            $timeoutToUse = $this->defaultTimeout;
        }
        
        if ($userId !== null) {
            $userIdToUse = $userId;
        }
        elseif ($this->userId !== null) {
            $userIdToUse = $this->userId;
        }
        
        // http://gimmeproxy.com/api/get/8bb99df808d75d71ee1bdd9e5da5672a/?timeout=0
        if ($userIdToUse === null) {
            $userIdToUse = $this->createUserId();
        }
        if ($timeoutToUse === null) {
            // TODO set a default timeout
        }
        $url = 'http://gimmeproxy.com/api/get/' . $userIdToUse . '/?timeout=' . $timeoutToUse;
        $responseJson = $this->makeRequest($url);
        $this->lastResponse = $responseJson;
        return $this->convertLastResponse($returnTypeToUse);
        
    } // gimmeProxy()
    
    protected function convertLastResponse($returnTypeToUse) {
        // note: expect return type to use to be validated before calling this function
        $toReturn = null;
        switch ($returnTypeToUse) {    
            case GIMME_PROXY_ASSOC_ARRAY:
                $toReturn = json_decode($this->lastResponse, true);
                break;
            case GIMME_PROXY_OBJECT:
                $toReturn = json_decode($this->lastResponse);
                break;
            default:    // case GIMME_PROXY_RAW_STRING
                $toReturn = $this->lastResponse;
                break;
        }
        return $toReturn;
    } // convertLastResponse()
    
    protected function makeRequest($url) {
        return file_get_contents($url);
    }
    
} // GimmeProxy