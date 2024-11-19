<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Alma extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'alma', 'defaultTitle' => __('Alma', 'mollie-payments-for-woocommerce'), 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \false, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \false, 'SEPA' => \false, 'paymentAPIfields' => ['billingAddress', 'shippingAddress'], 'docs' => 'https://www.mollie.com/gb/payments/alma'];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}
