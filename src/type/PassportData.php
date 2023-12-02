<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type PassportData
 *
 * @link https://core.telegram.org/bots/api#passportdata
 *
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData extends Type {

    public EncryptedPassportElement $data;
    public EncryptedCredentials $credentials;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'data' => [EncryptedPassportElement::class, 'data'],
            'credentials' => [EncryptedCredentials::class, 'credentials']
        ];
    }
}