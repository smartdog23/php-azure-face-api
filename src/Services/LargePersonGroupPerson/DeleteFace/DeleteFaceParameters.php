<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class DeleteFaceParameters extends AzureFaceApiParameters
{
    protected $_largePersonGroupId;
    protected $_personId;
    protected $_persistedFaceId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->castArray = ['largePersonGroupId', 'personId', 'persistedFaceId'];
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function setPersonId($value)
    {
        $this->_personId = $value;
    }

    public function getPersonId()
    {
        return $this->_personId;
    }

    public function setPersistedFaceId($value)
    {
        $this->_persistedFaceId = $value;
    }

    public function getPersistedFaceId()
    {
        return $this->_persistedFaceId;
    }
}
