<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Contact
 *
 * @link https://core.telegram.org/bots/api#contact
 *
 * This object represents a phone contact.
 *
 * @property string $phoneNumber
 * @property string $firstName
 * @property string $lastName
 * @property int $userId
 * @property string $vcard
 */
class Contact extends Type { }