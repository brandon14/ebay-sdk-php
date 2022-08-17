# brandon14/ebay-commerce-notification-v1

The eBay Notification API enables management of the entire end-to-end eBay notification experience by allowing users to:<ul><li>Browse for supported notification topics and retrieve topic details</li><li>Create, configure, and manage notification destination endpionts</li><li>Configure, manage, and test notification subscriptions</li><li>Process eBay notifications and verify the integrity of the message payload</li></ul>


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
      "url": "https://github.com/brandon14/ebay-commerce-notification-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-commerce-notification-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-commerce-notification-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Commerce\Notification\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Commerce\Notification\V1\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getConfig: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/commerce/notification/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConfigApi* | [**getConfig**](docs/Api/ConfigApi.md#getconfig) | **GET** /config | 
*ConfigApi* | [**updateConfig**](docs/Api/ConfigApi.md#updateconfig) | **PUT** /config | 
*DestinationApi* | [**createDestination**](docs/Api/DestinationApi.md#createdestination) | **POST** /destination | 
*DestinationApi* | [**deleteDestination**](docs/Api/DestinationApi.md#deletedestination) | **DELETE** /destination/{destination_id} | 
*DestinationApi* | [**getDestination**](docs/Api/DestinationApi.md#getdestination) | **GET** /destination/{destination_id} | 
*DestinationApi* | [**getDestinations**](docs/Api/DestinationApi.md#getdestinations) | **GET** /destination | 
*DestinationApi* | [**updateDestination**](docs/Api/DestinationApi.md#updatedestination) | **PUT** /destination/{destination_id} | 
*PublicKeyApi* | [**getPublicKey**](docs/Api/PublicKeyApi.md#getpublickey) | **GET** /public_key/{public_key_id} | 
*SubscriptionApi* | [**createSubscription**](docs/Api/SubscriptionApi.md#createsubscription) | **POST** /subscription | 
*SubscriptionApi* | [**deleteSubscription**](docs/Api/SubscriptionApi.md#deletesubscription) | **DELETE** /subscription/{subscription_id} | 
*SubscriptionApi* | [**disableSubscription**](docs/Api/SubscriptionApi.md#disablesubscription) | **POST** /subscription/{subscription_id}/disable | 
*SubscriptionApi* | [**enableSubscription**](docs/Api/SubscriptionApi.md#enablesubscription) | **POST** /subscription/{subscription_id}/enable | 
*SubscriptionApi* | [**getSubscription**](docs/Api/SubscriptionApi.md#getsubscription) | **GET** /subscription/{subscription_id} | 
*SubscriptionApi* | [**getSubscriptions**](docs/Api/SubscriptionApi.md#getsubscriptions) | **GET** /subscription | 
*SubscriptionApi* | [**test**](docs/Api/SubscriptionApi.md#test) | **POST** /subscription/{subscription_id}/test | 
*SubscriptionApi* | [**updateSubscription**](docs/Api/SubscriptionApi.md#updatesubscription) | **PUT** /subscription/{subscription_id} | 
*TopicApi* | [**getTopic**](docs/Api/TopicApi.md#gettopic) | **GET** /topic/{topic_id} | 
*TopicApi* | [**getTopics**](docs/Api/TopicApi.md#gettopics) | **GET** /topic | 

## Models

- [Config](docs/Model/Config.md)
- [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
- [DeliveryConfig](docs/Model/DeliveryConfig.md)
- [Destination](docs/Model/Destination.md)
- [DestinationRequest](docs/Model/DestinationRequest.md)
- [DestinationSearchResponse](docs/Model/DestinationSearchResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [PayloadDetail](docs/Model/PayloadDetail.md)
- [PublicKey](docs/Model/PublicKey.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionPayloadDetail](docs/Model/SubscriptionPayloadDetail.md)
- [SubscriptionSearchResponse](docs/Model/SubscriptionSearchResponse.md)
- [Topic](docs/Model/Topic.md)
- [TopicSearchResponse](docs/Model/TopicSearchResponse.md)
- [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope**: View public data from eBay


### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/commerce.notification.subscription.readonly**: View your event notification subscriptions
    - **https://api.ebay.com/oauth/api_scope/commerce.notification.subscription**: View and manage your event notification subscriptions

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
