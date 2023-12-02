<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type PassportFile
 *
 * @link https://core.telegram.org/bots/api#passportfile
 *
 * This object represents a file uploaded to Telegram Passport. Currently, all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $fileSize
 * @property int $fileDate
 */
class PassportFile extends Type { }