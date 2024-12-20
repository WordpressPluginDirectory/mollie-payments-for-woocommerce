<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Klarna extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'klarna', 'defaultTitle' => __('Pay with Klarna', 'mollie-payments-for-woocommerce'), 'settingsDescription' => __('To accept payments via Klarna, all default WooCommerce checkout fields should be enabled and required.', 'mollie-payments-for-woocommerce'), 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \false, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \false, 'SEPA' => \false, 'orderMandatory' => \true, 'docs' => 'https://www.mollie.com/gb/payments/klarna'];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}
