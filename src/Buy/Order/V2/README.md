# brandon14/ebay-buy-order-v2

<span class=\"tablenote\"><b>Note:</b> The Order API (v2) currently only supports the guest payment/checkout flow. If you need to support member payment/checkout flow, use the <a href=\"/api-docs/buy/order_v1/resources/methods\">v1_beta version</a> of the Order API.</span><br /><br /><span class=\"tablenote\"><b>Note:</b> This is a <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#limited\" target=\"_blank\"><img src=\"/cms/img/docs/partners-api.svg\" class=\"legend-icon partners-icon\"  alt=\"Limited Release\" title=\"Limited Release\" />(Limited Release)</a> API available only to select developers approved by business units.</span><br /><br />The Order API provides interfaces that let shoppers pay for items. It also returns payment and shipping status of the order.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/brandon14/ebay-buy-order-v2.git"
    }
  ],
  "require": {
    "brandon14/ebay-buy-order-v2": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-buy-order-v2/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Buy\Order\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Buy\Order\V2\Api\GuestCheckoutSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_session_id = 'checkout_session_id_example'; // string | The eBay-assigned session ID, for a specific eBay marketplace, that is returned by the <b> initiateGuestCheckoutSession</b> method.<br /><br /><span class=\"tablenote\"><b>Note:</b> When using this ID, the X-EBAY-C-MARKETPLACE-ID value and developer App ID must be the same as that used when this guest checkout session was created. See <a href=\"/api-docs/buy/order/overview.html#checkout-restriction\">Checkout session restrictions</a> in the Buy Integration Guide for details.</span>
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | A header that identifies the user's business context and is specified using a marketplace ID value.<br /><br /><span class=\"tablenote\"><b>Note:</b> This header does <i>not</i> indicate a language preference or consumer location.</span><br /><br />See <a href=\"/api-docs/static/rest-request-components.html#marketpl\" target=\"_blank\">Marketplace ID values</a> for a list of supported values.
$coupon_request = new \TNT\Ebay\Buy\Order\V2\Model\CouponRequest(); // \TNT\Ebay\Buy\Order\V2\Model\CouponRequest | The container for the fields used to apply a coupon to a guest checkout session.

try {
    $result = $apiInstance->applyGuestCoupon($checkout_session_id, $x_ebay_c_marketplace_id, $coupon_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestCheckoutSessionApi->applyGuestCoupon: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://apix.ebay.com/buy/order/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GuestCheckoutSessionApi* | [**applyGuestCoupon**](docs/Api/GuestCheckoutSessionApi.md#applyguestcoupon) | **POST** /guest_checkout_session/{checkoutSessionId}/apply_coupon | 
*GuestCheckoutSessionApi* | [**getGuestCheckoutSession**](docs/Api/GuestCheckoutSessionApi.md#getguestcheckoutsession) | **GET** /guest_checkout_session/{checkoutSessionId} | 
*GuestCheckoutSessionApi* | [**initiateGuestCheckoutSession**](docs/Api/GuestCheckoutSessionApi.md#initiateguestcheckoutsession) | **POST** /guest_checkout_session/initiate | 
*GuestCheckoutSessionApi* | [**removeGuestCoupon**](docs/Api/GuestCheckoutSessionApi.md#removeguestcoupon) | **POST** /guest_checkout_session/{checkoutSessionId}/remove_coupon | 
*GuestCheckoutSessionApi* | [**updateGuestQuantity**](docs/Api/GuestCheckoutSessionApi.md#updateguestquantity) | **POST** /guest_checkout_session/{checkoutSessionId}/update_quantity | 
*GuestCheckoutSessionApi* | [**updateGuestShippingAddress**](docs/Api/GuestCheckoutSessionApi.md#updateguestshippingaddress) | **POST** /guest_checkout_session/{checkoutSessionId}/update_shipping_address | 
*GuestCheckoutSessionApi* | [**updateGuestShippingOption**](docs/Api/GuestCheckoutSessionApi.md#updateguestshippingoption) | **POST** /guest_checkout_session/{checkoutSessionId}/update_shipping_option | 
*GuestPurchaseOrderApi* | [**getGuestPurchaseOrder**](docs/Api/GuestPurchaseOrderApi.md#getguestpurchaseorder) | **GET** /guest_purchase_order/{purchaseOrderId} | 

## Models

- [Adjustment](docs/Model/Adjustment.md)
- [Amount](docs/Model/Amount.md)
- [AuthenticityVerificationProgram](docs/Model/AuthenticityVerificationProgram.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponRequest](docs/Model/CouponRequest.md)
- [CreateGuestCheckoutSessionRequestV2](docs/Model/CreateGuestCheckoutSessionRequestV2.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Fee](docs/Model/Fee.md)
- [GuestCheckoutSessionResponseV2](docs/Model/GuestCheckoutSessionResponseV2.md)
- [GuestPurchaseOrderV2](docs/Model/GuestPurchaseOrderV2.md)
- [Image](docs/Model/Image.md)
- [ImportChargesV2](docs/Model/ImportChargesV2.md)
- [ImportTax](docs/Model/ImportTax.md)
- [LegacyReference](docs/Model/LegacyReference.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemInput](docs/Model/LineItemInput.md)
- [OrderLineItemV2](docs/Model/OrderLineItemV2.md)
- [PricingSummary](docs/Model/PricingSummary.md)
- [PricingSummaryV2](docs/Model/PricingSummaryV2.md)
- [Promotion](docs/Model/Promotion.md)
- [Recipient](docs/Model/Recipient.md)
- [Region](docs/Model/Region.md)
- [Seller](docs/Model/Seller.md)
- [ShippingAddress](docs/Model/ShippingAddress.md)
- [ShippingAddressImpl](docs/Model/ShippingAddressImpl.md)
- [ShippingDetail](docs/Model/ShippingDetail.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [TaxDetail](docs/Model/TaxDetail.md)
- [TaxJurisdiction](docs/Model/TaxJurisdiction.md)
- [UpdateQuantity](docs/Model/UpdateQuantity.md)
- [UpdateShippingOption](docs/Model/UpdateShippingOption.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/buy.guest.order**: Purchase eBay items off eBay

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
