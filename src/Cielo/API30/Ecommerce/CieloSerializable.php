<?php

namespace Cielo\API30\Ecommerce;

use JsonSerializable;
use stdClass;

/**
 * Interface CieloSerializable
 *
 * @package Cielo\API30\Ecommerce
 */
interface CieloSerializable extends JsonSerializable
{
    /**
     * @param stdClass $data
     *
     * @return mixed
     */
    public function populate(stdClass $data);
}
