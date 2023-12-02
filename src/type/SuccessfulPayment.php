<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type SuccessfulPayment
 *
 * @link https://core.telegram.org/bots/api#successfulpayment
 *
 * This object contains basic information about a successful payment.
 *
 * @property string $currency
 * @property int $totalAmount
 * @property string $invoicePayload
 * @property string $shippingOptionId
 * @property OrderInfo $orderInfo
 * @property string $telegramPaymentChargeId
 * @property string $providerPaymentChargeId
 */
class SuccessfulPayment extends Type { }