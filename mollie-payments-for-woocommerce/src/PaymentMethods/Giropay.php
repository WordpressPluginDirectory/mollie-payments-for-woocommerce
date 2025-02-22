<?php

declare (strict_types=1);
namespace Mollie\WooCommerce\PaymentMethods;

class Giropay extends \Mollie\WooCommerce\PaymentMethods\AbstractPaymentMethod implements \Mollie\WooCommerce\PaymentMethods\PaymentMethodI
{
    protected function getConfig(): array
    {
        return ['id' => 'giropay', 'defaultTitle' => 'Giropay', 'settingsDescription' => '', 'defaultDescription' => '', 'paymentFields' => \false, 'instructions' => \false, 'supports' => ['products', 'refunds'], 'filtersOnBuild' => \false, 'confirmationDelayed' => \true, 'SEPA' => \true, 'docs' => 'https://help.mollie.com/hc/en-gb/articles/19745480480786-Giropay-Depreciation-FAQ'];
    }
    // Replace translatable strings after the 'after_setup_theme' hook
    public function initializeTranslations(): void
    {
        if ($this->translationsInitialized) {
            return;
        }
        $this->config['defaultTitle'] = __('Giropay', 'mollie-payments-for-woocommerce');
        $this->translationsInitialized = \true;
    }
    public function getFormFields($generalFormFields): array
    {
        $notice = ['notice' => ['title' => sprintf(
            /* translators: Placeholder 1: paragraph opening tag Placeholder 2: link url Placeholder 3: closing tags */
            __('%1$s Paydirekt, the owner of Giropay, has decided to deprecate Giropay. On Monday, 24 June 2024, Mollie was informed that Giropay would cease onboarding new merchants and processing new payments after 30 June 2024. No action is needed from your side. Mollie will automatically remove Giropay as a payment option from your Checkout by 30 June.
Subscription renewals and refunds will continue to be processed as usual beyond June 30. More details can be found in the %2$s Giropay Deprecation FAQ. %3$s', 'mollie-payments-for-woocommerce'),
            '<p>',
            '<a href="https://help.mollie.com/hc/en-us/articles/19745480480786-Giropay-Depreciation-FAQ" target="_blank">',
            '</a></p>'
        ), 'type' => 'title', 'class' => 'notice notice-warning', 'css' => 'padding:20px;']];
        return array_merge($notice, $generalFormFields);
    }
}
