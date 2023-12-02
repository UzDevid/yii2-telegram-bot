<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type SuccessfulPayment
 *
 * @link https://core.telegram.org/bots/api#successfulpayment
 *
 * This object contains basic information about a successful payment.
 */
class SuccessfulPayment extends Type {

    public string $currency;
    public int $totalAmount;
    public string $invoicePayload;
    public string $shippingOptionId;
    public OrderInfo $orderInfo;
    public string $telegramPaymentChargeId;
    public string $providerPaymentChargeId;
}