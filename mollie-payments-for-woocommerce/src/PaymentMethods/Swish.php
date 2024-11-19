<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Swish extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    public function getConfig(): array
    {
        return ['id' => 'swish', 'defaultTitle' => __('Swish', 'mollie-payments-for-woocommerce'), 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \false, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \false, 'SEPA' => \false];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}
