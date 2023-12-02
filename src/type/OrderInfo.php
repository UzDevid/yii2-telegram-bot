<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type OrderInfo
 *
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 * This object represents information about an order.
 *
 * @property string $name
 * @property string $phoneNumber
 * @property string $email
 * @property ShippingAddress $shippingAddress
 */
class OrderInfo extends Type { }