<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CompanyBillingDetails extends \Entities\CompanyBillingDetails implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setBillingContactName($billingContactName)
    {
        $this->__load();
        return parent::setBillingContactName($billingContactName);
    }

    public function getBillingContactName()
    {
        $this->__load();
        return parent::getBillingContactName();
    }

    public function setBillingAddress1($billingAddress1)
    {
        $this->__load();
        return parent::setBillingAddress1($billingAddress1);
    }

    public function getBillingAddress1()
    {
        $this->__load();
        return parent::getBillingAddress1();
    }

    public function setBillingAddress2($billingAddress2)
    {
        $this->__load();
        return parent::setBillingAddress2($billingAddress2);
    }

    public function getBillingAddress2()
    {
        $this->__load();
        return parent::getBillingAddress2();
    }

    public function setBillingTownCity($billingTownCity)
    {
        $this->__load();
        return parent::setBillingTownCity($billingTownCity);
    }

    public function getBillingTownCity()
    {
        $this->__load();
        return parent::getBillingTownCity();
    }

    public function setBillingPostcode($billingPostcode)
    {
        $this->__load();
        return parent::setBillingPostcode($billingPostcode);
    }

    public function getBillingPostcode()
    {
        $this->__load();
        return parent::getBillingPostcode();
    }

    public function setBillingCountry($billingCountry)
    {
        $this->__load();
        return parent::setBillingCountry($billingCountry);
    }

    public function getBillingCountry()
    {
        $this->__load();
        return parent::getBillingCountry();
    }

    public function setBillingEmail($billingEmail)
    {
        $this->__load();
        return parent::setBillingEmail($billingEmail);
    }

    public function getBillingEmail()
    {
        $this->__load();
        return parent::getBillingEmail();
    }

    public function setBillingTelephone($billingTelephone)
    {
        $this->__load();
        return parent::setBillingTelephone($billingTelephone);
    }

    public function getBillingTelephone()
    {
        $this->__load();
        return parent::getBillingTelephone();
    }

    public function setVatNumber($vatNumber)
    {
        $this->__load();
        return parent::setVatNumber($vatNumber);
    }

    public function getVatNumber()
    {
        $this->__load();
        return parent::getVatNumber();
    }

    public function setVatRate($vatRate)
    {
        $this->__load();
        return parent::setVatRate($vatRate);
    }

    public function getVatRate()
    {
        $this->__load();
        return parent::getVatRate();
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
        return array('__isInitialized__', 'billingContactName', 'billingAddress1', 'billingAddress2', 'billingTownCity', 'billingPostcode', 'billingCountry', 'billingEmail', 'billingTelephone', 'vatNumber', 'vatRate', 'id', 'Company');
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