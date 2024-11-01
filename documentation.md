# Workadu invoicing

## Installation Guide

### Step 1: Download and Activate

1. Navigate to the WordPress dashboard.
2. Click on "Plugins" in the left-hand menu.
3. Click the "Add New" button.
4. In the search field, type "Workadu invoicing" and press Enter.
5. Find the "Workadu invoicing" plugin in the search results.
6. Click "Install Now" under the Workadu invoicing.
7. After installation, click "Activate."

### Step 2: API Key Setup

1. Visit [www.app.workadu.com](https://www.app.workadu.com) and create an account if you haven't already.
2. Log in to your Workadu account or create a new one.
3. In the Workadu dashboard, go to the bubble down left of your screen -> "Settings" -> "Users & API Keys" -> "Api user"
4. Copy the API key.
5. In the WordPress dashboard, navigate to "WooCommerce" -> "settings" -> "Workadu".
6. Paste the API key into the "API Key" field and save the settings.

## Configuration Guide

### General Settings

- **Api Key**: Paste the API key you obtained from your Workadu account.
- **Preferred Receipt Series**: Choose the default series for receipt creation.
- **Preferred Invoice Series**: Choose the default series for invoice creation.

### Email Settings

- **Send to Mail**: Enable to send invoices to customer emails.
- **Send to myData**: Enable to send invoices to myData (AADE).

### Payment Type Settings

- **Cash Payment Type**: Select the default payment type for cash transactions.
- **Credit Card Payment Type**: Select the default payment type for credit card transactions.
- **Bank Transfer Payment Type**: Select the default payment type for bank transfers.

> Note: These options will be maped from your wooCommerce payment types.

### Field Mapping Settings

- **VAT Number Field**: Map to the field that stores VAT numbers in WooCommerce orders.
- **Billing Address Field**: Map to the field that stores billing addresses in WooCommerce orders.
- **Billing Country Field**: Map to the field that stores billing countries in WooCommerce orders.

> Note: These options allow you to map fields used for VAT numbers, billing addresses, and billing countries in WooCommerce orders. New options will appear as you create orders with these fields.

## Usage Examples

### Example 1: Creating an Invoice

1. Go to WooCommerce > Orders.
2. Click "Add New."
3. Fill in the required fields, (including VAT number, billing address, and billing country in the case of myData Aade integration).
4. Select your preferred series for the invoice.
5. Click "Save Draft" or "Place Order."
6. The invoice will be automatically generated.

### Example 2: Sending to myData (AADE)

1. Ensure that your workadu account has an integration with MyData Aade books and you have added your vat_number to your company's info (in your workadu account)
1. Ensure that the order has a valid VAT number, billing address, and billing country.
2. Enable the "Send to myData" option in settings.
3. After creating an invoice, it will be sent and validated by myData.

## Troubleshooting

**Issue**: I can't find the API Key.

**Solution**: Log in to your Workadu account->settings and check the "Users & API Keys" section, your api key should be in the api user.

**Issue**: I can't create a new invoice.

**Solution**: Log in to your Workadu account and check if you have exceeded your plan's invoice limit or your free trial might have ended.

**Issue**: I can't send the new invoice to myData (Aade).

**Solution**: For an invoice to be valid for myData (Aade) these three things must apply:
1. You must have an active integration with myData (Aade) (in your Workadu account),
2. You must have added your vat number in your account settings (in your Workadu account),
3. The order must has a valid vat number, abilling address and a billing country (Wordpress).


## Frequently Asked Questions (FAQ)

**Q**: Can I customize the payment types?

**A**: Payment types are fetched from WooCommerce settings. You can update them there.

**Q**: I have a vat_number field but it doesn't show up in the vat_number options?

**A**: The payment options include all the fields all of your orders have, so if you just created this field, for it to show up in the options, you first need to make an order using that field.

**Q**: How do I add the vat_number field through Workadu invoicing plugin?

**A**: Unfortunately Workadu invoicing plugin doesn't have that functionality yet. To send invoices to myData (Aade) you need to have created the field by other means (many free plugins available for example) and then map the field in the wooCommerce workadu settings.

**Q**: Where can I find the invoices I created?

**A**: All the invoices that you have created, along with many more features, are in your business account in www.app.workadu.com.

## Changelog

**Version 1.0.5*

- Initial release.

## Support Information

For support and questions, please visit our support forum.
