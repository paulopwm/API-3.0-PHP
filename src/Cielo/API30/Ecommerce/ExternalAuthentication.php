<?php

namespace Cielo\API30\Ecommerce;

use stdClass;

/**
 * Class CreditCard
 *
 * @package Cielo\API30\Ecommerce
 */
class ExternalAuthentication implements CieloSerializable
{
    /** @var string $cavv */
    private $cavv;

    /** @var string $xid */
    private $xid;

    /** @var string $eci */
    private $eci;

    /** @var string $version */
    private $version;

    /** @var string $referenceId */
    private $referenceId;

    /**
     * @param string $json
     *
     * @return ExternalAuthentication
     */
    public static function fromJson($json)
    {
        $object = json_decode($json, false);
        $externalAuthentication = new self();
        $externalAuthentication->populate($object);

        return $externalAuthentication;
    }

    /**
     * @inheritdoc
     */
    public function populate(stdClass $data)
    {
        $this->cavv = isset($data->Cavv) ? $data->Cavv : null;
        $this->xid = isset($data->Xid) ? $data->Xid : null;
        $this->eci = isset($data->Eci) ? $data->Eci : null;
        $this->version = isset($data->Version) ? $data->Version : null;
        $this->referenceId = isset($data->ReferenceId) ? $data->ReferenceId : null;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @param string $cavv
     */
    public function setCavv($cavv)
    {
        $this->cavv = $cavv;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string $xid
     */
    public function setXid($xid)
    {
        $this->xid = $xid;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string $eci
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }
}
