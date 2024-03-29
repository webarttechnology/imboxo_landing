=== Accept Stripe Payments Using Contact Form 7 ===

Contributors: zealopensource
Tags: Contact Form 7, form, forms, contactform7, contact form, Stripe submit, Contact Forms 7, Contact Form 7 + Stripe,Contact Forms, contacted, contacts, Additional Settings, Stripe button, integrate Stripe button, Stripe donation, online payment, integrate Stripe with contact form 7, contact form 7 Stripe
Donate link: http://www.zealousweb.net/payment/
Requires at least: 4.9
Tested up to: 6.4
Requires PHP: 5.6
License: GPLv3 or later License
CF7 requires at least: 3.0
CF7 tested up to: 5.8
Stable tag: 2.1
Version: 2.1
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Contact Form 7 - Integrate Stripe payment gateway for making your payments through Contact Form 7. 

== Description ==

ZealousWeb has come up with a Stripe payment gateway, which can be successfully integrated with Contact Form 7 for quick and secure revenue generation.

With the help of Accept Stripe Payments Using Contact Form 7, users can receive Credit Card Payments directly from Customers. The Plugin is potentially useful in receiving payments safely from any Contact Form 7 form, which is hosted on any page or post for that matter. Once the users submit the contact form, the payment checkout form is then displayed before them. The Stripe payment checkout form is used for quick and secure transactions, and it's easy-to-implement.

= Features of Accept Stripe Payments Using Contact Form 7 =

* Receive payments in 25 different currencies. 
* Create multiple payment forms using Contact Form 7.
* Permits to take values from all input fields including drop-down menu, textbox, hidden field, radio buttons, etc.
* Accepts dynamic value from front-end parameters like item description, amount, email, quantity, and customer details.
* You can enable Test API Mode to ensure the proper functioning of the payments transactions.
* In the Free version of Stripe! you can view the payment transactions of up to 10 Entries in the admin panel.
* Easy to export Contact Form 7 payment data to CSV.
* Options for filters and search facility at the Admin side.
* Admin can easily view or delete Contact Form 7 payment data.
* Provides Shortcode [stripe-details] to display the transaction ID, Amount with currency, and transaction status after the transaction is made.
* Individual emails are sent to customers and admin after stripe payment transactions.
* You can personalize the content of the email sent to the customer and admin after transactions.
* Stripe payment tag added to email content will display stripe payment response in email.
* You can set ‘Success Return URL’ and ‘Cancel Return URL’ pages to redirect after the payment transaction.

<strong>[Get more information of Pro version here](https://www.zealousweb.com/store/accept-stripe-payments-using-contact-form-7-pro)</strong>

Check out the <strong>[Pro plugin documentation link](https://www.zealousweb.com/documentation/wordpress-plugins/accept-stripe-payments-using-contact-form7/)</strong>!here.

== Plugin Requirement ==

PHP version : 5.4 and latest
WordPress   : WordPress 3.0 and latest

= Getting Help With Wordpress =

If you have any difficulties while using this Plugin, please feel free to contact us at <a href="mailto:support@zealousweb.com">support@zealousweb.com</a>

We also offer custom Wordpress extension development and Wordpress theme design services to fulfill your e-commerce objectives.

Our professional Wordpress experts provide customer-oriented development of your project within short timeframes.

Thank you for choosing a Plugin developed by <strong>[ZealousWeb](https://www.zealousweb.com)</strong>!


== Installation ==

Installing the plugin is easy. Just follow these steps:

1. From the dashboard of your site, navigate to Plugins --> Add New.
2. Select the Upload option and hit "Choose File."
3. When the popup appears, select the contact-form-7-stripe-addon.zip file from your desktop.
4. Follow the on-screen instructions and wait till the upload completes.
5. When it's finished, activate the plugin via the prompt. A message will display confirming activation was successful.

That's it! Just configure your settings as you see fit, and you're on your way to creating forms with Stripe in your style. 
Are you facing problems while installation? Need help getting things started? 

== Frequently Asked Questions ==

= How to get label and value separately in mail for dropdown field? =

For dropdown field while using value and label separately example:
[select menu-696 "t1|20" "t2|30" "t3|40" "t4|50" "t5|60"],
To get the value after pipe character, put the usual mail-tag corresponding to the form-tag ([menu-696] in the mail templates. 
To get value before pipe, you can use [_raw_{field name}] Example[_raw_menu-696].

= Can I set Test mode for Stripe for testing? =

Yes, You can set Test mode from admin for testing with Test API, and after the success, you can use your stripe payment with Live Mode.

= Can I show transaction details on another page? =

Yes, you can show transaction details on the page using shortcode -[stripe-details], but that shows one time when payment is done and redirected to Thank you Page.


== Screenshots ==

1. Stripe Demo Form
2. Stripe Settings and Configuration
3. Stripe Amount Field Configuration
4. Stripe Card Amount Field Configuration
4. Stripe Payments List Page
5. Stripe Transaction Detail Page

== Changelog ==

= 2.1 =
* The problem with the log file on the frontend has been resolved.

= 2.0 =
* Transactions failing bug fixed.

= 1.9 =
* Uploaded missing API library files(fixed fatal error on activation), Updated Payment intent script.


= 1.8 =
* Fixed fatal error of API Requestor library.

= 1.7 =
* Updated API requestor library.

= 1.6 =
* Fixed contact form 7 Form setting for saving sandbox value for stripe.

= 1.5 =
* Updated the Stripe Library : Made use of the Payment Intents API that can handle complex payment flows.

= 1.4 =
* Fix : solved issue of showing Message on Submit

= 1.3 =
* Fix : Testing with lates CF7 5.6 and WP 6.0.1 and fix issues.

= 1.2 =
* Fix minor bugs and improve functionality

= 1.1 =
* Compatibility with latest cf7 version
* Fix minor bugs and improve functionality

= 1.0 =
* Initial Release

== Upgrade Notice ==

= 1.1 =
1.0 Compatibility with latest cf7 version.

= 1.0 =
1.0 is Initial Release.
