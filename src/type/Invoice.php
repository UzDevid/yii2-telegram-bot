<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Invoice
 *
 * @link https://core.telegram.org/bots/api#invoice
 *
 * This object contains basic information about an invoice.
 *
 * @property string $title
 * @property string $description
 * @property string $startParameter
 * @property string $currency
 * @property int $totalAmount
 */
class Invoice extends Type { }