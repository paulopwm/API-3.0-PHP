<?php

namespace Cielo\API30\Ecommerce;

use Cielo\API30\Ecommerce\Browser;
use Cielo\API30\Ecommerce\Shipping;
use Cielo\API30\Ecommerce\Travel;
use Cielo\API30\Ecommerce\Cart;
use Cielo\API30\Ecommerce\MerchantDefinedFields;
use Cielo\API30\Ecommerce\CieloSerializable;


/**
 * Class FraudAnalysis
 *
 * @package Cielo\API30\Ecommerce
 */
class FraudAnalysis implements \JsonSerializable, CieloSerializable
{
    /** @var string $provider */
    private $provider;

    /** @var string $sequence */
    private $sequence;

    /** @var int $status */
    private $status;

    /** @var string $sequenceCriteria */
    private $sequenceCriteria;

    /** @var string $captureOnLowRisk */
    private $captureOnLowRisk;

    /** @var string $voidOnHighRisk */
    private $voidOnHighRisk;

    /** @var string $totalOrderAmount */
    private $totalOrderAmount;

    /** @var string $fingerPrintId */
    private $fingerPrintId;

    /** @var string $browser */
    private $browser;

    /** @var string $cart */
    private $cart;

    /** @var string $merchantDefinedFields */
    private $merchantDefinedFields;

    /** @var string $shipping */
    private $shipping;

    /** @var string $travel */
    private $travel;

    /** @var string $replyData */
    private $replyData;

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

    /** @var string $id */
    private $id;

    /** @var int $fraudAnalysisReasonCode */
    private $fraudAnalysisReasonCode;

    /**
     * Fraud Analysis constructor.
     *
     * @param null
    */
    public function __construct()
    {
    }

    /**
     * @return array
    */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @param \stdClass $data
    */
    public function populate(\stdClass $data)
    {

        $this->provider                 = isset($data->Provider) ? $data->Provider : null;
        $this->id                       = isset($data->Id) ? $data->Id : null;
        $this->status                   = isset($data->Status) ? $data->Status : null;
        $this->fraudAnalysisReasonCode  = isset($data->FraudAnalysisReasonCode) ? $data->FraudAnalysisReasonCode : null;
        $this->sequence                 = isset($data->Sequence) ? $data->Sequence : null;
        $this->sequenceCriteria         = isset($data->SequenceCriteria) ? $data->SequenceCriteria : null;
        $this->captureOnLowRisk         = isset($data->CaptureOnLowRisk) ? $data->CaptureOnLowRisk : null;
        $this->voidOnHighRisk           = isset($data->VoidOnHighRisk) ? $data->VoidOnHighRisk : null;
        $this->totalOrderAmount         = isset($data->TotalOrderAmount) ? $data->TotalOrderAmount : null;
        $this->fingerPrintId            = isset($data->FingerPrintId) ? $data->FingerPrintId : null;

        if (isset($data->Browser)) {
            $this->browser = new Browser();
            $this->browser->populate($data->Browser);
        }

        if (isset($data->Cart)) {
            $this->cart = new Cart();
            $this->cart->populate($data->Cart);
        }

        if (isset($data->MerchantDefinedFields)) {
            foreach($data->MerchantDefinedFields as $merchantDefinedField){
                $merchantDefinedFieldsInstance = new MerchantDefinedFields();
                $merchantDefinedFieldsInstance->populate($merchantDefinedField);
                $this->merchantDefinedFields[] = $merchantDefinedFieldsInstance;
            }
        }

        if (isset($data->Shipping)) {
            $this->shipping = new Shipping();
            $this->shipping->populate($data->Shipping);
        }

        if (isset($data->Travel)) {
            $this->travel = new Travel();
            $this->travel->populate($data->Travel);
        }

        if (isset($data->ReplyData)) {
            $this->replyData = new ReplyData();
            $this->replyData->populate($data->ReplyData);
        }
    }

    /**
     * @return mixed
    */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param $provider
     *
     * @return $this
    */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param $sequence
     *
     * @return $this
    */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     *
     * @return $this
    */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getSequenceCriteria()
    {
        return $this->sequenceCriteria;
    }

    /**
     * @param $sequenceCriteria
     *
     * @return $this
    */
    public function setSequenceCriteria($sequenceCriteria)
    {
        $this->sequenceCriteria = $sequenceCriteria;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getCaptureOnLowRisk()
    {
        return $this->captureOnLowRisk;
    }

    /**
     * @param $captureOnLowRisk
     *
     * @return $this
    */
    public function setCaptureOnLowRisk($captureOnLowRisk)
    {
        $this->captureOnLowRisk = $captureOnLowRisk;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getVoidOnHighRisk()
    {
        return $this->voidOnHighRisk;
    }

    /**
     * @param $voidOnHighRisk
     *
     * @return $this
    */
    public function setVoidOnHighRisk($voidOnHighRisk)
    {
        $this->voidOnHighRisk = $voidOnHighRisk;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getTotalOrderAmount()
    {
        return $this->totalOrderAmount;
    }

    /**
     * @param $totalOrderAmount
     *
     * @return $this
    */
    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getFingerPrintId()
    {
        return $this->fingerPrintId;
    }

    /**
     * @param $fingerPrintId
     *
     * @return $this
    */
    public function setFingerPrintId($fingerPrintId)
    {
        $this->fingerPrintId = $fingerPrintId;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @param $browser
     *
     * @return $this
    */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param $cart
     *
     * @return $this
    */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     *  @param MerchantDefinedFields
     *  @return $this
     */
    public function addMerchnatDefinedFields(MerchantDefinedFields $merchantDefinedField)
    {
        $this->merchantDefinedFields[] = $merchantDefinedField;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getMerchantDefinedFields()
    {
        return $this->merchantDefinedFields;
    }

    /**
     * @param $merchantDefinedFields
     *
     * @return $this
    */
    public function setMerchantDefinedFields($merchantDefinedFields)
    {
        $this->merchantDefinedFields = $merchantDefinedFields;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param $shipping
     *
     * @return $this
    */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * @param $travel
     *
     * @return $this
    */
    public function setTravel($travel)
    {
        $this->travel = $travel;

        return $this;
    }

    /**
     * @return mixed
    */
    public function getReplyData()
    {
        return $this->replyData;
    }

    /**
     * @param $replyData
     *
     * @return $this
    */
    public function setReplyData($replyData)
    {
        $this->replyData = $replyData;

        return $this;
    }
}
