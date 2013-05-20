<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CompanyRegisteredDetail extends \Entities\CompanyRegisteredDetail implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setCompanyNumber($companyNumber)
    {
        $this->__load();
        return parent::setCompanyNumber($companyNumber);
    }

    public function getCompanyNumber()
    {
        $this->__load();
        return parent::getCompanyNumber();
    }

    public function setJurisidiction($jurisidiction)
    {
        $this->__load();
        return parent::setJurisidiction($jurisidiction);
    }

    public function getJurisidiction()
    {
        $this->__load();
        return parent::getJurisidiction();
    }

    public function setAddress1($address1)
    {
        $this->__load();
        return parent::setAddress1($address1);
    }

    public function getAddress1()
    {
        $this->__load();
        return parent::getAddress1();
    }

    public function setAddress2($address2)
    {
        $this->__load();
        return parent::setAddress2($address2);
    }

    public function getAddress2()
    {
        $this->__load();
        return parent::getAddress2();
    }

    public function setAddress3($address3)
    {
        $this->__load();
        return parent::setAddress3($address3);
    }

    public function getAddress3()
    {
        $this->__load();
        return parent::getAddress3();
    }

    public function setTowncity($towncity)
    {
        $this->__load();
        return parent::setTowncity($towncity);
    }

    public function getTowncity()
    {
        $this->__load();
        return parent::getTowncity();
    }

    public function setPostcode($postcode)
    {
        $this->__load();
        return parent::setPostcode($postcode);
    }

    public function getPostcode()
    {
        $this->__load();
        return parent::getPostcode();
    }

    public function setCountry($country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCompany(\Entities\Customer $company = NULL)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'companyNumber', 'jurisidiction', 'address1', 'address2', 'address3', 'towncity', 'postcode', 'country', 'id', 'Company');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}