=== Mollie Payments for WooCommerce ===
Contributors: daanvm, danielhuesken, davdebcom, dinamiko, syde, l.vangunst, ndijkstra, wido, carmen222
Tags: mollie, woocommerce, payments, ecommerce, credit card
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 8.0.4
Requires PHP: 7.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Accept all major payment methods in WooCommerce today. Credit cards, iDEAL and more! Fast, safe and intuitive.

== Description ==

https://www.youtube.com/watch?v=33sQNKelKW4

Quickly integrate all major payment methods in WooCommerce, wherever you need them. Mollie Payments for WooCommerce adds the critical success factor: an easy-to-install, easy-to-use, customizable payments gateway that is as flexible as WooCommerce itself.

> **Effortless payments for your customers, designed for growth**

No need to spend weeks on paperwork or security compliance procedures. Enjoy enhanced conversions as we support shopper's favorite payment methods and ensure their utmost safety. We made payments intuitive and safe for merchants and their customers.

= Payment methods =

Credit & Debit Cards:

* VISA (International)
* MasterCard (International)
* American Express (International)
* Cartes Bancaires (France)
* CartaSi (Italy)
* V Pay (International)
* Maestro (International)

European and local payment methods:

* Bancomat Pay (Italy)
* Bancontact (Belgium)
* Belfius (Belgium)
* Blik (Poland)
* EPS (Austria)
* Gift cards (Netherlands)
* iDEAL (Netherlands)
* KBC/CBC payment button (Belgium)
* Klarna
* MB Way (Portugal)
* Multibanco (Portugal)
* PaybyBank
* Payconiq (Belgium, Luxembourg)
* Przelewy24 (Poland)
* Satispay (EU)
* SEPA – Direct Debit (EU)
* Swish (Sweden)
* TWINT (Switzerland)
* Vouchers (Netherlands, Belgium)

International payment methods:

* Apple Pay (International)
* PayPal (International)
* Paysafecard (International)

Pay after delivery payment methods:

* Alma (France, Belgium)
* Billie – Pay by Invoice for Businesses
* iDEAL in3 – Pay in 3 installments, 0% interest
* Riverty (Netherlands, Belgium, Germany, Austria)

= Get started with Mollie =

1. [Create a Mollie account](https://my.mollie.com/dashboard/signup?utm_campaign=GLO_AO_Woo-Channels-Signup&utm_medium=marketplacelisting&utm_source=partner&utm_content=Wordpress&sf_campaign_id=701QD00000a4oHjYAI&campaign_name=GLO_AO_Woo-Channels-Signup)
2. Install **Mollie Payments for WooCommerce** on your WordPress website
3. Activate Mollie in your WooCommerce webshop and enter your Mollie API key
4. In your Mollie Dashboard, go to Settings > Website profiles and select the payment methods you want to offer
5. Go to your WordPress Admin Panel. Open WooCommerce > Settings > Payments to check if your preferred methods are enabled

Once your Mollie account has been approved, you can start accepting payments. 

> **Our pricing is always per transaction. No startup fees, no monthly fees, and no gateway fees. No hidden fees, period.**

= Features =

* Support for all available Mollie payment methods
* Compatible with WooCommerce Subscriptions for recurring payments (Apple Pay, credit card, iDEAL, and more via SEPA Direct Debit)
* Transparent pricing. No startup fees, no monthly fees, and no gateway fees. No hidden fees, period.
* Edit the order, title and description of every payment method in WooCommerce checkout
* Support for full and partial payment refunds
* Configurable pay outs: daily, weekly, monthly - whatever you prefer
* [Powerful dashboard](https://www.mollie.com/en/features/dashboard) on mollie.com to easily keep track of your payments
* Fast in-house support. You will always be helped by someone who knows our products intimately
* Multiple translations: English, Dutch, German, French, Italian, Spanish
* Event log for debugging purposes
* WordPress Multisite support
* Works well with multilingual plugins like WPML/Polylang

= Join the Mollie Community =

Become part of Mollie's growing community and gain access to our comprehensive support network, including a [Discord Developer Community](https://discord.gg/y2rbjqszbs) to stay connected and informed.

> **Your success is our mission. With Mollie, simplify your payments and focus on growing your business.**

[Sign up today](https://my.mollie.com/dashboard/signup?utm_campaign=GLO_AO_Woo-Channels-Signup&utm_medium=marketplacelisting&utm_source=partner&utm_content=Wordpress&sf_campaign_id=701QD00000a4oHjYAI&campaign_name=GLO_AO_Woo-Channels-Signup) and start enhancing your WooCommerce store with Mollie's advanced payment solutions.

Feel free to contact info@mollie.com if you have any questions or comments about this plugin.

= More about Mollie =

Mollie offers a single platform for businesses to get paid and manage their money. One that makes payments, reconciliation, reporting, fraud prevention, and financing simple for all – from startups to enterprises.

Founded in 2004, Mollie’s mission is to make payments and money management effortless for every business in the UK and Europe. Their 800-strong team works from offices across the continent, including Amsterdam, Ghent, Lisbon, London, Maastricht, Milan, Munich, and Paris. 

Today, more than 250,000 businesses use Mollie to drive revenue, reduce costs, and manage funds.

== Frequently Asked Questions ==

= I can't install the plugin, the plugin is displayed incorrectly =

Please temporarily enable the [WordPress Debug Mode](https://codex.wordpress.org/Debugging_in_WordPress). Edit your `wp-config.php` and set the constants `WP_DEBUG` and `WP_DEBUG_LOG` to `true` and try
it again. When the plugin triggers an error, WordPress will log the error to the log file `/wp-content/debug.log`. Please check this file for errors. When done, don't forget to turn off
the WordPress debug mode by setting the two constants `WP_DEBUG` and `WP_DEBUG_LOG` back to `false`.

= I get a white screen when opening ... =

Most of the time a white screen means a PHP error. Because PHP won't show error messages on default for security reasons, the page is white. Please turn on the WordPress Debug Mode to turn on PHP error messages (see previous answer).

= The Mollie payment gateways aren't displayed in my checkout =

* Please go to WooCommerce -> Settings -> Payments in your WordPress admin and scroll down to the Mollie settings section.
* Check which payment gateways are disabled.
* Go to the specific payment gateway settings page to find out why the payment gateway is disabled.

= The order status is not getting updated after successfully completing the payment =

* Please check the Mollie log file located in `/wp-content/uploads/wc-logs/` or `/wp-content/plugin/woocommerce/logs` for debug info. Please search for the correct order number and check if Mollie has called the shop Webhook to report the payment status.
* Do you have maintenance mode enabled? Please make sure to whitelist the 'wc-api' endpoint otherwise Mollie can't report the payment status to your website.
* Please check your Mollie dashboard to check if there are failed webhook reports. Mollie tried to report the payment status to your website but something went wrong.
* Contact info@mollie.com with your Mollie partner ID and the order number. We can investigate the specific payment and check whether Mollie successfully reported the payment state to your webshop.

= Payment gateways and mails aren't always translated =

This plugin uses [translate.wordpress.org](https://translate.wordpress.org/projects/wp-plugins/mollie-payments-for-woocommerce) for translations. WordPress will automatically add those translations to your website if they hit 100% completion at least once. If you are not seeing the Mollie plugin as translated on your website, the plugin is probably not translated (completely) into your language (you can view the status on the above URL).

You can either download and use the incomplete translations or help us get the translation to 100% by translating it.

To download translations manually:
1. Go to [translate.wordpress.org](https://translate.wordpress.org/projects/wp-plugins/mollie-payments-for-woocommerce/)
2. Click on the percentage in the "Stable" column for your language.
3. Scroll down to "Export".
4. Choose "All current" and "MO - Machine Object"
5. Upload this file to plugins/languages/mollie-payments-for-woocommerce/.
6. Repeat this for all your translations.

If you want to help translate the plugin, read the instructions in the [Translate strings instructions](https://make.wordpress.org/polyglots/handbook/tools/glotpress-translate-wordpress-org/#translating-strings).

= Can I add payment fees to payment methods? =

Yes, you can with a separate plugin. At the moment we have tested and can recommend [Payment Gateway Based Fees and Discounts for WooCommerce](https://wordpress.org/plugins/checkout-fees-for-woocommerce/). Other plugins might also work. For more specific information, also see [helpful snippets](https://github.com/mollie/WooCommerce/wiki/Helpful-snippets#add-payment-fee-to-payment-methods).

= Can I set up payment methods to show based on customers country? =

Yes, you can with a separate plugin. At the moment we have tested and can recommend [WooCommerce - Country Based Payments](https://wordpress.org/plugins/woocommerce-country-based-payments/). Other plugins might also work.

= Why do orders with payment method BankTransfer and Direct Debit get the status 'on-hold'? =

These payment methods take longer than a few hours to complete. The order status is set to 'on-hold' to prevent the WooCommerce setting 'Hold stock (minutes)' (https://docs.woothemes.com/document/configuring-woocommerce-settings/#inventory-options) will
cancel the order. The order stock is also reduced to reserve stock for these orders. The stock is restored if the payment fails or is cancelled. You can change the initial order status for these payment methods on their setting page.

= I have a different question about this plugin =

Please contact info@mollie.com with your Mollie partner ID, please describe your problem as detailed as possible. Include screenshots where appropriate.
Where possible, also include the Mollie log file. You can find the Mollie log files in `/wp-content/uploads/wc-logs/` or `/wp-content/plugin/woocommerce/logs`.

== Screenshots ==

1. The global Mollie settings are used by all the payment gateways. Please insert your Mollie API key to start.
2. Change the title and description for every payment gateway. Some gateways have special options.
3. The available payment gateways in the checkout.
4. The order received page will display the payment status and customer details if available.
5. The order received page for the gateway bank transfer will display payment instructions.
6. Some payment methods support refunds. The 'Refund' button will be available when the payment method supports refunds.
7. Within Mollie Dashboard, intuitive design meets clever engineering, allowing you to get more work done, in less time.
8. Also in Mollie Dashboard, get your administration done quick. You’ll have a detailed overview of your current balance.
9. Statistics with a double graph gives gives you extensive insights and data on how your business is performing.
10. Mollie Checkout turns a standard payment form into a professional experience that drives conversions.

== Installation ==

= Minimum Requirements =

* PHP version 7.4 or greater
* PHP extensions enabled: cURL, JSON
* WordPress 5.0 or greater
* WooCommerce 3.9 or greater
* Mollie account

= Automatic installation =

1. Install the plugin via Plugins -> New plugin. Search for 'Mollie Payments for WooCommerce'.
2. Activate the 'Mollie Payments for WooCommerce' plugin through the 'Plugins' menu in WordPress
3. Set your Mollie API key at WooCommerce -> Settings -> Mollie Settings (or use the *Mollie Settings* link in the Plugins overview)
4. You're done, the active payment methods should be visible in the checkout of your webshop.

= Manual installation =

1. Unpack the download package
2. Upload the directory 'mollie-payments-for-woocommerce' to the `/wp-content/plugins/` directory
3. Activate the 'Mollie Payments for WooCommerce' plugin through the 'Plugins' menu in WordPress
4. Set your Mollie API key at WooCommerce -> Settings -> Mollie Settings (or use the *Mollie Settings* link in the Plugins overview)
5. You're done, the active payment methods should be visible in the checkout of your webshop.

Please contact info@mollie.com if you need help installing the Mollie WooCommerce plugin. Please provide your Mollie partner ID and website URL.

= Updating =

Automatic updates should work like a charm; as always though, ensure you backup your site just in case.


== Changelog ==

= 8.0.4 - 09-07-2025 =
* Fixed - Incorrect shipping name field on Orders API

= 8.0.3 - 07-07-2025 =
* Fixed - Direct Bank Transfer (BACS) payment methods was hidden in some instances
* Fixed - Incorrect Order Status Update After Chargeback Due to Conflicting Webhooks
* Fixed - Mollie Payments Failing Due to Negative ´unitPrice´ from WooCommerce Line Item Rounding
* Fixed - Missing surcharge verification on Pay for Order page

= 8.0.2 - 02-06-2025 =
* Added - Voucher payment method for Payments API
* Added - In3 payment method for Payments API
* Added - Voucher category Sports & Culture
* Fixed - Undefined property method_title
* Fixed - Surcharge with percentage without max limit configured not working
* Fixed - Potential fatal error with getCurrencyFromOrder
* Fixed - Compatibility with FunnelKit Upsells
* Fixed - Deprectaion message on plugin uninstall
* Removed - unnecessary block checkout surcharge calculation
* Removed - Obsolete code that checked if a payment method was exclusive to the Orders API

= 8.0.1 - 07-05-2025 =
* Fixed - check that Klarna webhooks will not be received for transactions if orders API is active
* Fixed - most problems with gateway surcharges and 3rd party fees
* Fixed - problems with Paments API when checkout address fields are removed
* Fixed - some PHP Errors
* Fixed - negative fees not working with payments API
* Fixed - imageUrl will be validated before adding it
* Fixed - refreshing gateway list in the Mollie settings
* Fixed - on block checkout an empty Gateway description was displayed
* Fixed - ransactions on block checkout don’t work for Riverty
* Fixed - Phone Number Validation uses now billing/shipping country when no phone country prefix 
* Fixed - More information on inactive payment methods will not open in the new tab @masteradhoc
* Removed - deprecated SOFORT and Giropay payment methods

= 8.0.0 - 27-03-2025 =

* Feature Flag - Klarna, Riverty and Billie can be used with Payments API
* Feature - Added support for Mollie's new Payments API features
* Fixed - Notice for missing value of cardToken
* Fixed - ltrim error on Apple Pay notice with php 8.2 (author @kylwes)
* Fixed - Logged URL should be same as used in future logic (author @tombroucke)

= 7.10.0 - 18-02-2025 =

* Added - PaybyBank payment method
* Added - MB Way payment method
* Added - Multibanco payment method
* Added - Swish payment method
* Feature - Load block Checkout payment methods despite no active country selection
* Deprecated - Do not show deprecated Klarna methods if disabled in Mollie profile
* Fixed - Currency Symbol Positioning in bock checkout
* Fixed - Wrong order status in some cases
* Fixed - Fatal error on Refunds in some situations (author @Fidelity88)

= 7.9.1 - 22-01-2025 =

* Feature - Style Apple Pay express button via Checkout block
* Fixed - Notice `_load_textdomain_just_in_time` due to early translation loading
* Fixed - Company Name input field not saved in Order when Billie was enabled
* Fixed - Mollie Payment methods may not load on Checkout block
* Fixed - Mollie Payment methods may disappear from Checkout block when changing billing country
* Fixed - Mollie Components are not enabled by default on new installations

= 7.9.0 - 18-11-2024 =

* Feature - Revamp Mollie settings dashboard
* Feature - Implement dedicated Block Express Cart/Checkout location for Apple Pay button
* Feature - Trustly for first Payments
* Fixed - Display notice in iDEAL settings about iDEAL 2.0 and removal of bank issuer dropdown
* Fixed - Translation Update Loop in Mollie Payments for WooCommerce
* Fixed - Bank Transfer payment details displayed in one line on order-received page

= 7.8.2 - 08-09-2024 =

* Fixed - Subscription renewal status on-hold instead of active

= 7.8.1 - 07-09-2024 =

* Feature Flag - Initiative - Swish payment method.
* Fixed - Unable to make PayPal payments when surcharge is enabled on product and cart pages.
* Fixed - Cancel order on expiry date should no longer trigger on WP init.
* Fixed - Display of Payment Status column in orders overview when capturing payments immediately.
* Fixed - Incorrect data type handling in MaybeDisableGateway.php.
* Fixed - Prevented dependency conflicts, such as for psr/log.
* Fixed - Italian translation for integration microcopy.
* Fixed - Improved accessibility of gateway icons (a11y improvement).
* Fixed - Undefined property warning in Apple Pay payments related to stdClass::$cardHolder. (author @mklepaczewski )
* Fixed - German translation issue in order confirmation email.
* Fixed - Populate birthdate on pay page for in3 and Riverty.
* Fixed - Missing translation update for surcharge string.

= 7.8.0 - 27-08-2024 =

* Added - Satispay payment method 
* Security - Remove Mollie SDK examples folder and some CS fixes

= 7.7.0 - 12-08-2024 =

* Added - Payconiq payment method 
* Added - Riverty payment method 
* Fix - Declaring compatibility in WP Editor 
* Security - Enhanced object reference security

= 7.6.0 - 10-07-2024 =

* Added - Trustly payment method
* Deprecated - Giropay payment method ([Giropay Depreciation FAQ](https://help.mollie.com/hc/en-gb/articles/19745480480786-Giropay-Depreciation-FAQ))
* Fixed - Mollie hooks into unrelated orders
* Fixed - Notices and type errors after 7.5.5 update
* Fixed - Rounding issues with products including tax

= 7.5.5 - 18-06-2024 =

* Feature Flag - Enable Bancomat Pay & Alma feature flag by default (official launch 2024-07-01)
* Task - update wordpress.org plugin page
* Fix - Change from iDeal 1.0 to iDeal 2.0
* Fix - update apple-developer-merchantid-domain-association certificate 
* Fix - Description not shown on block checkout
* Fix - All Gift Card issuers displayed despite only some being active
* Fix - Several Undefined array key warnings malform JSON requests on Block Checkout
* Fix - Surcharge string to ‘excl. VAT’

= 7.5.4 - 03-06-2024 =

* Feature Flag - Initiative - Alma for WooCommerce Integration - under flag add_filter('inpsyde.feature-flags.mollie-woocommerce.alma_enabled', false);
* Feature - Add WooCommerce as required plugin in header
* Fix - Display error for Apple Pay Validation Error in Woocommerce
* Fix - TypeError when WooCommerce Analytics is disabled
* Fix - In3 - payment successful with date in the future
* Fix - Ensure Smooth Order Processing Despite Rounding Differences
* FIx - Rebrand from Inpsyde to Syde

= 7.5.3 - 22-05-2024 =

* Fix - Updated in3 checkout process: Phone and birthdate are now optional, but if provided, validated values will be sent to expedite checkout.

= 7.5.2 - 22-04-2024 =

* Feature - Support for new payment method Bancomat Pay (beta)
* Tweak - Reorder gateway settings
* Fix - Gift Card issuer dropdown replaced by icon HTML when only one giftcard enabled
* Fix - TypeError merchant capture feature
* Fix - Type error on Pay for Order page when in3 is active on PHP 8+
* Fix - Typo in variable/method names
* Fix - Refresh methods not enabling methods enabled in Mollie
* Fix - Variable names in strings deprecated in PHP 8.2 (author @vHeemstra)
* Fix - WC 7.4.1 appends billingEmail to Orders API call due to mismatched filter in Banktransfer.php
* Fix - Apple Pay button payment is not possible as a guest user when debugging is active

= 7.5.1 - 12-02-2024 =

* Fix - Merchant capture error. Feature flag disabled by default

= 7.5.0 - 05-02-2024 =

* Feature - Add TWINT payment method
* Feature - Add BLIK payment method
* Feature - Enable merchant capture feature flag by default
* Feature - Enable Klarna one feature flag by default
* Fix - Birth date not showing for in3 on pay for order page
* Fix - Subscription signup payment not possible when using authorizations 
* Fix - Transaction ID field not filled for authorized/captured WooCommerce orders
* Fix - PHP Fatal error: Undefined method isCompleted
* Fix - Align merchant capture wording with Mollie

= 7.4.1 - 06-11-2023 =

* Fix - Send the bank transfer information in the order confirmation email
* Fix - Plugin keeps retrying fraudulent orders
* Fix - Order is not canceled after exact expiry date set in gateway settings
* Fix - No error messages displayed on pay for order page
* Fix - Improve “Initial payment status”  setting description for expired orders
* Fix - Update GitHub wiki after Mollie docs release
* Fix - Update plugin strings regarding documentation and support links
* Fix - Save & display bank transfer payment details in WooCommerce order
* Fix - Complete WooCommerce order when order is shipped at Mollie
* Fix - Check for WC\_Subscriptions class instead of plugin file

= 7.4.0 - 20-09-2023 =

* Feature - Pass Paypal "Additional" address information as Address_2
* Feature - The payment method API image will now display when the "Use API dynamic title and gateway logo" option is enabled.
* Feature - Introduced a new filter to programmatically control the visibility of the API title for each payment method: apply_filters('mollie_wc_gateway_use_api_title', $value, $paymentMethodId)
* Feature - Added a filter to programmatically control the visibility of the API icon for every payment method: apply_filters('mollie_wc_gateway_use_api_icon', $value, $paymentMethodId)
* Fix - Mollie is showing for WooCommerce version under 3.9.0
* Fix - Compatibility with latest WC Blocks \(>9.3.0\) to detect "incompatible gateways"
* Fix - Apple Pay button payments remain in open status at Mollie
* Fix - New block theme 22 and 23 have issues with the look and feel on Mollie components
* Fix - Site is broken on bulk edit when Mollie is activated
* Fix - Fatal error after on 7.3.8 and 7.3.9 with roots/sage
* Fix - WooCommerce - Bank Transfer -  Expiration time feature bug
* Fix - Apple Pay gateway not displayed on order pay page

= 7.3.12 - 21-08-2023 =

* Fix - Security fix

= 7.3.11 - 10-08-2023 =

* Feature flag - adding support to new upcoming payment method
* Fix -  script loading when disabled in Mollie dashboard

= 7.3.10 - 24-07-2023 =

* Fix - Updating payment method after fail in a subscription will not update the mandate
* Fix - Surcharge fee not updating on pay for order page and block checkout
* Fix - Use gateway title from API when the one saved is the previous version default one
* Fix - Missing information for In3 and Billie transactions in blocks and classic checkout
* Fix - Mollie components not initialising on block checkout after changing payment method
* Fix - Paysafecard not shown in block checkout
* Fix - Transaction with components leading to insert card details again
* Fix - Billie gateway hidden when third-party plugins are active
* Fix - Surcharge fee taxes not updated in tax total
* Fix - Biling/shipping country not included in orders from block checkout

= 7.3.9 - 31-05-2023 =

* Fix - Psr/container compatibility issue

= 7.3.8 - 31-05-2023 =

* Fix - Inform customer and merchant about Mollie outage
* Fix - Bank Transfer gateway hidden when "Activate expiry time setting" is enabled
* Fix - Surcharge description string not updated when the language changes after saving
* Fix - Show more information on recurring failed payments
* Fix - Send birthdate and phone number with In3 payments shortcode checkout
* Fix - Update credit card title. Allow users to take title from API

= 7.3.7 - 12-04-2023 =

* HotFix - Warning after update 7.3.6 instanceof PaymentMethodI failed

= 7.3.6 - 12-04-2023 =

* Feature - Implemented new payment method
* Feature - Render hook filter for Apple Pay and PayPal buttons
* Fix - PayPal payment overwrites billing information with PayPal account details
* Fix - Error when creating product category
* Fix - Some type check errors
* Fix - WC 7.2.2 update causes Fatal error: Cannot redeclare as_unschedule_action()
* Fix - Gift card warning when on Checkout page
* Fix - Block scripts loaded on any page when block features are enabled
* Fix - ApplePay Button validation issues
* Fix - PayPal button showing on out of stock product

= 7.3.5 - 24-01-2023 =

* Fix - PayPal payment overwrites billing information with PayPal account details
* Fix - Compatibility with WordPress 6.1.0
* Fix - Compatibility with WC High-Performance Order Storage
* Fix - Compatibility issues with PHP 8.1 deprecated FILTER_SANITIZE_STRING
* Fix - Issue when WooCommerce Blocks plugin was not present to load Block features
* Fix - Surcharge description in new paragraph
* Fix - Custom order meta data filter not working as expected
* Fix - Custom fields in payment translations
* Fix - Voucher showing on order-pay page when no category is set up
* Fix - Product stock restored twice on cancelled orders when Germanized plugin is active
* Fix - Surcharge settings in SEPA should not appear
* Fix - Call to undefined method WC_Gateway_Paypal::handlePaidOrderWebhook()
* Fix - Message "Test mode is active" is showing when test mode is disabled before refreshing the page
* Fix - PayPal button displayed on cart page when product amount is lower then the minimum amount required to display the button
* Fix - Crash when new method Billie is enabled at Mollie

= 7.3.4 - 09-11-2022 =

* Fix - Site crash with WooCommerce 3.0 active
* Fix - Fatal error when payment surcharge limit exceeded
* Fix - Critical error when API connection not available
* Fix - Redundant log entry
* Fix - Conflict with "Extra Checkout Options" plugin
* Fix - PHP Warning for undefined array key
* Fix - Consider order status before setting it to "Canceled" status upon Mollie expiry webhook
* Fix - Broken translation strings
* Fix - Undefined index in voucher category
* Fix - Description printed in wrong field in settings

= 7.3.3 - 21-09-2022 =

* Fix - Subscription renewal charged twice
* Fix - Credit card components not loading on update

= 7.3.2 - 14-09-2022 =

* Fix - Warning stops transaction when debugging on production

= 7.3.1 - 13-09-2022 =

* Fix - When refunding from Mollie profile order notes and status not updated
* Fix - Error on checkout block, surcharge added for all payment methods
* Fix - PayPal button display issues
* Fix - Logs created when logging is disabled
* Fix - Bank Transfer disappears on order pay page
* Fix - Surcharge value not including VAT
* Fix - UTM parameters missing in mollie.com links
* Fix - Voucher category does not reflect on variations
* Fix - Issuers dropdown not loading
* Fix - Querying gateway settings on every page load
* Fix - Inconsistency in expiry date terms
* Fix - Filter should allow SDD enabled without WooCommerce Subscriptions active
* Fix - Change link to API key profile in mollie.com
* Fix - Translations errors
* Fix - Conflict with SSH SFTP Updater Support
* Fix - Error when customer attempts payment with non-Mollie method after expiration

= 7.3.0 - 02-08-2022 =

* Feature - Activate Mollie Components by default for new installations
* Fix - Order note not translated
* Fix - Gateway surcharge not applying tax
* Fix - pending SEPA subscription renewal orders remain in "Pending payment" instead of being set to "On-Hold"
* Fix - PHP warnings when using not Mollie gateway
* Fix - Order API not processing transactions due to taxes mismatch
* Fix - Inconsistent order numbers sometimes printing  "Bestelling {bestelnummer}"
* Fix - Link to new my.mollie.com url
* Fix - Update In3 description

= 7.2.0 - 21-06-2022 =

* Feature - New payment method: In3
* Feature - Add order line information to debug logs
* Feature - Valuta symbol before amount
* Feature - Add new translations
* Fix - Check Payment API setting before showing Voucher, Klarna, In3 (Order API mandatory)
* Fix - Remove title if empty setting on block checkout
* Fix - Typo in Mollie settings
* Fix - SEPA notice shows incorrectly when no settings saved
* Fix - Order API not selected when no settings saved

= 7.1.0 - 26-04-2022 =

* Feature - Implement uninstall method
* Feature - Add setting to remove Mollie's options and scheduled actions from db
* Feature - Improve Payment API description (@vHeemstra)
* Feature - Improve API request
* Feature - Add gateway title for en_GB translation
* Fix - Showing gateway default description when empty description was saved in settings
* Fix - Surcharge added over limit wrongly when WooCommerce Blocks are active
* Fix - Fatal error when visiting invalid return URL
* Fix - Error on refunding subscriptions created with Payments API
* Fix - Fallback to shop country when customer country is not known
* Fix - Invalid argument supplied to foreach error
* Fix - Display SEPA bank transfer details in merchant email notifications
* Fix - Error on update page with translations
* Fix - Empty space under credit card in checkout when components are not enabled
* Fix - Error on notes and logs with canceled, expired and failed orders
* Fix - Incorrect surcharge fee applied when WooCommerce blocks are active
* Fix - Fatal error when saving empty surcharge fields

= 7.0.4 - 23-03-2022 =

* Fix - Conflict with Paytium plugin
* Fix - Fallback from orders API to payments API not working
* Fix - Container access for third-party developers

= 7.0.3 - 15-03-2022 =

* Fix - Update Mollie SDK and add http client
* Fix - Loop API calls causing overload
* Fix - API key error during status change
* Fix - Transaction failing due to tax line mismatch
* Fix - Conflict with invoices plugin
* Fix - List in settings the gateways enabled at Mollie's profile
* Fix - Voucher loads incorrectly on blocks when updating country
* Fix - Update iDeal logo
* Fix - Missing ISK currency with 0 decimal places

= 7.0.2 - 15-02-2022 =

* Fix - Rollback code to version 6.7.0

= 7.0.1 - 14-02-2022 =

* Fix - Fatal error when WC Blocks and third-party payment gateway active after 7.0.0 update
* Fix - Error undefined property actionscheduler_actions
* Fix - Missing payment method title when paying via checkout block
* Fix - Refund functionality missing in v.7.0.0

= 7.0.0 - 09-02-2022 =

* Feature - WooCommerce Blocks integration
* Feature - Merchant change subscription payment method
* Feature - Recharge Subscriptions integration
* Feature - Improve handling components errors
* Fix - Add missing translations
* Fix - Fallback to shop country when billing country is empty
* Fix - Surcharge fatal error when settings not yet saved
* Fix - Correct notice when not capturing due is a payment
* Fix - Punycode only on domain url
* Fix - Update Apple Pay certificate key
