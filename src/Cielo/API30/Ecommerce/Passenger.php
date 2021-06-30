<?php

namespace Cielo\API30\Ecommerce;

use stdClass;

/**
 * Class Passenger
 *
 * @package Cielo\API30\Ecommerce
 */
class Passenger implements CieloSerializable
{
    /** @var string $email */
    private $email;

    /** @var string $identity */
    private $identity;

    /** @var string $name */
    private $name;

    /** @var string $rating */
    private $rating;

    /** @var string $phone */
    private $phone;

    /** @var string $status */
    private $status;

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
        $this->email = isset($data->Email) ? $data->Email : null;
        $this->identity = isset($data->Identity) ? $data->Identity : null;
        $this->name = isset($data->Name) ? $data->Name : null;
        $this->rating = isset($data->Rating) ? $data->Rating : null;
        $this->phone = isset($data->Phone) ? $data->Phone : null;
        $this->status = isset($data->Status) ? $data->Status : null;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param $identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param $rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
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
}
