<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Invoice
 *
 * @link https://core.telegram.org/bots/api#invoice
 *
 * This object contains basic information about an invoice.
 */
class Invoice extends Type {

    public string $title;
    public string $description;
    public string $startParameter;
    public string $currency;
    public int $totalAmount;
}