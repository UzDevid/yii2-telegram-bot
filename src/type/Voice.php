<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Voice
 *
 * @link https://core.telegram.org/bots/api#voice
 *
 * This object represents a voice note.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $duration
 * @property string $mimeType
 * @property int $fileSize
 */
class Voice extends Type { }