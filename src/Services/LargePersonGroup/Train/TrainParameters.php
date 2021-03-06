<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train;

class TrainParameters
{
    private $_largePersonGroupId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function toArray()
    {
        $return = [];
        $return['largePersonGroupId'] = $this->_largePersonGroupId;
        return $return;
    }
}
