<?php

namespace Cielo\API30\Ecommerce;

use stdClass;

/**
 * Class Legs
 *
 * @package Cielo\API30\Ecommerce
 */
class Legs implements CieloSerializable
{
    /** @var string $destination */
    private $destination;

    /** @var string $origin */
    private $origin;

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
        $this->destination = isset($data->Destination) ? $data->Destination : null;
        $this->origin = isset($data->Origin) ? $data->Origin : null;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param $destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param $origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }
}
