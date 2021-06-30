<?php

namespace Cielo\API30\Ecommerce;

use stdClass;

/**
 * Class ReplyData
 *
 * @package Cielo\API30\Ecommerce
 */
class ReplyData implements CieloSerializable
{
    /** @var string $addressInfoCode */
    private $addressInfoCode;

    /** @var string $factorCode */
    private $factorCode;

    /** @var string $score */
    private $score;

    /** @var string $binCountry */
    private $binCountry;

    /** @var string $cardIssuer */
    private $cardIssuer;

    /** @var string $cardScheme */
    private $cardScheme;

    /** @var string $hostSeverity */
    private $hostSeverity;

    /** @var string $internetInfoCode */
    private $internetInfoCode;

    /** @var string $ipRoutingMethod */
    private $ipRoutingMethod;

    /** @var string $scoreModelUsed */
    private $scoreModelUsed;

    /** @var string $casePriority */
    private $casePriority;

    /** @var string $casePriority */
    private $providerTransactionId;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @param stdClass $data
     */
    public function populate(stdClass $data)
    {
        $this->addressInfoCode = isset($data->AddressInfoCode) ? $data->AddressInfoCode : null;
        $this->factorCode = isset($data->FactorCode) ? $data->FactorCode : null;
        $this->score = isset($data->Score) ? $data->Score : null;
        $this->binCountry = isset($data->BinCountry) ? $data->BinCountry : null;
        $this->cardIssuer = isset($data->CardIssuer) ? $data->CardIssuer : null;
        $this->cardScheme = isset($data->CardScheme) ? $data->CardScheme : null;
        $this->hostSeverity = isset($data->HostSeverity) ? $data->HostSeverity : null;
        $this->internetInfoCode = isset($data->InternetInfoCode) ? $data->InternetInfoCode : null;
        $this->ipRoutingMethod = isset($data->IpRoutingMethod) ? $data->IpRoutingMethod : null;
        $this->scoreModelUsed = isset($data->ScoreModelUsed) ? $data->ScoreModelUsed : null;
        $this->casePriority = isset($data->CasePriority) ? $data->CasePriority : null;
        $this->providerTransactionId = isset($data->ProviderTransactionId) ? $data->ProviderTransactionId : null;
    }

    /**
     * @return string
     */
    public function getAddressInfoCode()
    {
        return $this->addressInfoCode;
    }

    /**
     * @param $addressInfoCode
     *
     * @return $this
     */
    public function setAddressInfoCode($addressInfoCode)
    {
        $this->addressInfoCode = $addressInfoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFactorCode()
    {
        return $this->factorCode;
    }

    /**
     * @param $factorCode
     *
     * @return $this
     */
    public function setFactorCode($factorCode)
    {
        $this->factorCode = $factorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param $score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return string
     */
    public function getBinCountry()
    {
        return $this->binCountry;
    }

    /**
     * @param $binCountry
     *
     * @return $this
     */
    public function setBinCountry($binCountry)
    {
        $this->binCountry = $binCountry;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardIssuer()
    {
        return $this->cardIssuer;
    }

    /**
     * @param $cardIssuer
     *
     * @return $this
     */
    public function setCardIssuer($cardIssuer)
    {
        $this->cardIssuer = $cardIssuer;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardScheme()
    {
        return $this->cardScheme;
    }

    /**
     * @param $cardScheme
     *
     * @return $this
     */
    public function setCardScheme($cardScheme)
    {
        $this->cardScheme = $cardScheme;

        return $this;
    }

    /**
     * @return string
     */
    public function getHostSeverity()
    {
        return $this->hostSeverity;
    }

    /**
     * @param $hostSeverity
     *
     * @return $this
     */
    public function setHostSeverity($hostSeverity)
    {
        $this->hostSeverity = $hostSeverity;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternetInfoCode()
    {
        return $this->internetInfoCode;
    }

    /**
     * @param $internetInfoCode
     *
     * @return $this
     */
    public function setInternetInfoCode($internetInfoCode)
    {
        $this->internetInfoCode = $internetInfoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getIpRoutingMethod()
    {
        return $this->ipRoutingMethod;
    }

    /**
     * @param $ipRoutingMethod
     *
     * @return $this
     */
    public function setIpRoutingMethod($ipRoutingMethod)
    {
        $this->ipRoutingMethod = $ipRoutingMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getScoreModelUsed()
    {
        return $this->scoreModelUsed;
    }

    /**
     * @param $scoreModelUsed
     *
     * @return $this
     */
    public function setScoreModelUsed($scoreModelUsed)
    {
        $this->scoreModelUsed = $scoreModelUsed;

        return $this;
    }

    /**
     * @return string
     */
    public function getCasePriority()
    {
        return $this->casePriority;
    }

    /**
     * @param $casePriority
     *
     * @return $this
     */
    public function setCasePriority($casePriority)
    {
        $this->casePriority = $casePriority;

        return $this;
    }

    /**
     * @return string
     */
    public function getProviderTransactionId()
    {
        return $this->providerTransactionId;
    }

    /**
     * @param string $providerTransactionId
     * @return ReplyData
     */
    public function setProviderTransactionId($providerTransactionId)
    {
        $this->providerTransactionId = $providerTransactionId;
        return $this;
    }
}
