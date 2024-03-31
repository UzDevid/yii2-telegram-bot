<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Contact
 *
 * @link https://core.telegram.org/bots/api#contact
 *
 * This object represents a phone contact.
 */
class Contact extends Type {
    public string $phoneNumber;
    public string $firstName;
    public string $lastName;
    public int $userId;
    public string $vcard;
}