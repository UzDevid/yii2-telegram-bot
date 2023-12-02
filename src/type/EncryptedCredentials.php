<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type EncryptedCredentials
 *
 * @link https://core.telegram.org/bots/api#encryptedcredentials
 *
 * Describes data required for decrypting and authenticating EncryptedPassportElement.
 * See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
class EncryptedCredentials extends Type {
    public string $data;
    public string $hash;
    public string $secret;
}