<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type PassportFile
 *
 * @link https://core.telegram.org/bots/api#passportfile
 *
 * This object represents a file uploaded to Telegram Passport. Currently, all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile extends Type {


    public string $fileId;
    public string $fileUniqueId;
    public int $fileSize;
    public int $fileDate;
}