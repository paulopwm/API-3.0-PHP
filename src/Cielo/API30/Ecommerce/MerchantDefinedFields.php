<?php

namespace Cielo\API30\Ecommerce;

use stdClass;

/**
 * Class MerchantDefinedFields
 *
 * @package Cielo\API30\Ecommerce
 */
class MerchantDefinedFields implements CieloSerializable
{
    /** @var string $id */
    private $id;

    /** @var string $value */
    private $value;

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
        $this->id = isset($data->Id) ? $data->Id : null;
        $this->value = isset($data->Value) ? $data->Value : null;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
