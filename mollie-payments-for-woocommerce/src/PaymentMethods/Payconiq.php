<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Payconiq extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'payconiq', 'defaultTitle' => __('payconiq', 'mollie-payments-for-woocommerce'), 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \false, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \false, 'SEPA' => \false, 'docs' => ''];
    }
    public function getFormFields($generalFormFields): array
    {
        return $generalFormFields;
    }
}
