# trollandtoad/ebay-sell-analytics-v1

The <i>Analytics API</i> provides data and information about a seller and their eBay business.  <br><br>The resources and methods in this API let sellers review information on their listing performance, metrics on their customer service performance, and details on their eBay seller performance rating.  <br><br>The three resources in the Analytics API provide the following data and information: <ul><li><b>Customer Service Metric</b> &ndash; Returns benchmark data and a metric rating pertaining to a seller's customer service performance as compared to other seller's in the same peer group.</li> <li><b>Traffic Report</b> &ndash; Returns data and information that shows how buyers are engaging with a seller's listings.</li> <li><b>Seller Standards Profile</b> &ndash; Returns information pertaining to a seller's profile rating.</li></ul> Sellers can use the data and information returned by the various Analytics API methods to determine where they can make improvements to increase sales and how they might improve their seller status as viewed by eBay buyers.  <br><br>For details on using this API, see <a href=\"/api-docs/sell/static/performance/analyzing-performance.html\" title=\"Selling Integration Guide\">Analyzing seller performance</a>.


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
      "url": "https://github.com/trollandtoad/ebay-sell-analytics-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-sell-analytics-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-sell-analytics-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Analytics\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Analytics\V1\Api\CustomerServiceMetricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_service_metric_type = 'customer_service_metric_type_example'; // string | Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: <ul><li><code>ITEM_NOT_AS_DESCRIBED</code></li><li><code>ITEM_NOT_RECEIVED</code></li></ul>
$evaluation_marketplace_id = 'evaluation_marketplace_id_example'; // string | Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>For the list of supported marketplaces, see <a href=\"/api-docs/sell/analytics/static/overview.html#requirements\" title=\"Analytics API Overview\" target=\"_blank\">Analytics API requirements and restrictions</a>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum
$evaluation_type = 'evaluation_type_example'; // string | Use this path parameter to specify the type of the seller evaluation you want returned, either: <ul><li><code>CURRENT</code> &ndash; A monthly evaluation that occurs on the 20th of every month.</li> <li><code>PROJECTED</code> &ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period.</li></ul>

try {
    $result = $apiInstance->getCustomerServiceMetric($customer_service_metric_type, $evaluation_marketplace_id, $evaluation_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricApi->getCustomerServiceMetric: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/analytics/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomerServiceMetricApi* | [**getCustomerServiceMetric**](docs/Api/CustomerServiceMetricApi.md#getcustomerservicemetric) | **GET** /customer_service_metric/{customer_service_metric_type}/{evaluation_type} | 
*SellerStandardsProfileApi* | [**findSellerStandardsProfiles**](docs/Api/SellerStandardsProfileApi.md#findsellerstandardsprofiles) | **GET** /seller_standards_profile | 
*SellerStandardsProfileApi* | [**getSellerStandardsProfile**](docs/Api/SellerStandardsProfileApi.md#getsellerstandardsprofile) | **GET** /seller_standards_profile/{program}/{cycle} | 
*TrafficReportApi* | [**getTrafficReport**](docs/Api/TrafficReportApi.md#gettrafficreport) | **GET** /traffic_report | 

## Models

- [BenchmarkMetadata](docs/Model/BenchmarkMetadata.md)
- [Cycle](docs/Model/Cycle.md)
- [Definition](docs/Model/Definition.md)
- [Dimension](docs/Model/Dimension.md)
- [DimensionMetric](docs/Model/DimensionMetric.md)
- [Distribution](docs/Model/Distribution.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [EvaluationCycle](docs/Model/EvaluationCycle.md)
- [FindSellerStandardsProfilesResponse](docs/Model/FindSellerStandardsProfilesResponse.md)
- [GetCustomerServiceMetricResponse](docs/Model/GetCustomerServiceMetricResponse.md)
- [Header](docs/Model/Header.md)
- [Metadata](docs/Model/Metadata.md)
- [MetadataHeader](docs/Model/MetadataHeader.md)
- [MetadataRecord](docs/Model/MetadataRecord.md)
- [Metric](docs/Model/Metric.md)
- [MetricBenchmark](docs/Model/MetricBenchmark.md)
- [MetricDistribution](docs/Model/MetricDistribution.md)
- [Record](docs/Model/Record.md)
- [Report](docs/Model/Report.md)
- [StandardsProfile](docs/Model/StandardsProfile.md)
- [Value](docs/Model/Value.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.analytics.readonly**: View your selling analytics data, such as performance reports

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
