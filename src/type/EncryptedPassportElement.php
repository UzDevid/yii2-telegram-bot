<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type EncryptedPassportElement
 *
 * @link https://core.telegram.org/bots/api#encryptedpassportelement
 *
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement extends Type {
    public string $type;
    public string $data;
    public string $phoneNumber;
    public string $email;
    public array $files;
    public PassportFile $frontSide;
    public PassportFile $reverseSide;
    public PassportFile $selfie;
    public array $translation;
    public string $hash;
    
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'frontSide' => [PassportFile::class, 'frontSide'],
            'reverseSide' => [PassportFile::class, 'reverseSide'],
            'selfie' => [PassportFile::class, 'selfie']
        ];
    }
}