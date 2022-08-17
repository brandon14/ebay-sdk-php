# brandon14/ebay-sell-feed-v1

<p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>


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
      "url": "https://github.com/brandon14/ebay-sell-feed-v1.git"
    }
  ],
  "require": {
    "brandon14/ebay-sell-feed-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/brandon14/ebay-sell-feed-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Feed\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Feed\V1\Api\CustomerServiceMetricTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = 'accept_language_example'; // string | Use this header to specify the natural language in which the authenticated user desires the response.
$create_service_metrics_task_request = new \TNT\Ebay\Sell\Feed\V1\Model\CreateServiceMetricsTaskRequest(); // \TNT\Ebay\Sell\Feed\V1\Model\CreateServiceMetricsTaskRequest | Request payload containing version, feedType, and optional filterCriteria.

try {
    $apiInstance->createCustomerServiceMetricTask($accept_language, $create_service_metrics_task_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceMetricTaskApi->createCustomerServiceMetricTask: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/feed/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomerServiceMetricTaskApi* | [**createCustomerServiceMetricTask**](docs/Api/CustomerServiceMetricTaskApi.md#createcustomerservicemetrictask) | **POST** /customer_service_metric_task | 
*CustomerServiceMetricTaskApi* | [**getCustomerServiceMetricTask**](docs/Api/CustomerServiceMetricTaskApi.md#getcustomerservicemetrictask) | **GET** /customer_service_metric_task/{task_id} | 
*CustomerServiceMetricTaskApi* | [**getCustomerServiceMetricTasks**](docs/Api/CustomerServiceMetricTaskApi.md#getcustomerservicemetrictasks) | **GET** /customer_service_metric_task | 
*InventoryTaskApi* | [**createInventoryTask**](docs/Api/InventoryTaskApi.md#createinventorytask) | **POST** /inventory_task | 
*InventoryTaskApi* | [**getInventoryTask**](docs/Api/InventoryTaskApi.md#getinventorytask) | **GET** /inventory_task/{task_id} | 
*InventoryTaskApi* | [**getInventoryTasks**](docs/Api/InventoryTaskApi.md#getinventorytasks) | **GET** /inventory_task | 
*OrderTaskApi* | [**createOrderTask**](docs/Api/OrderTaskApi.md#createordertask) | **POST** /order_task | 
*OrderTaskApi* | [**getOrderTask**](docs/Api/OrderTaskApi.md#getordertask) | **GET** /order_task/{task_id} | 
*OrderTaskApi* | [**getOrderTasks**](docs/Api/OrderTaskApi.md#getordertasks) | **GET** /order_task | 
*ScheduleApi* | [**createSchedule**](docs/Api/ScheduleApi.md#createschedule) | **POST** /schedule | 
*ScheduleApi* | [**deleteSchedule**](docs/Api/ScheduleApi.md#deleteschedule) | **DELETE** /schedule/{schedule_id} | 
*ScheduleApi* | [**getLatestResultFile**](docs/Api/ScheduleApi.md#getlatestresultfile) | **GET** /schedule/{schedule_id}/download_result_file | 
*ScheduleApi* | [**getSchedule**](docs/Api/ScheduleApi.md#getschedule) | **GET** /schedule/{schedule_id} | 
*ScheduleApi* | [**getScheduleTemplate**](docs/Api/ScheduleApi.md#getscheduletemplate) | **GET** /schedule_template/{schedule_template_id} | 
*ScheduleApi* | [**getScheduleTemplates**](docs/Api/ScheduleApi.md#getscheduletemplates) | **GET** /schedule_template | 
*ScheduleApi* | [**getSchedules**](docs/Api/ScheduleApi.md#getschedules) | **GET** /schedule | 
*ScheduleApi* | [**updateSchedule**](docs/Api/ScheduleApi.md#updateschedule) | **PUT** /schedule/{schedule_id} | 
*TaskApi* | [**createTask**](docs/Api/TaskApi.md#createtask) | **POST** /task | 
*TaskApi* | [**getInputFile**](docs/Api/TaskApi.md#getinputfile) | **GET** /task/{task_id}/download_input_file | 
*TaskApi* | [**getResultFile**](docs/Api/TaskApi.md#getresultfile) | **GET** /task/{task_id}/download_result_file | 
*TaskApi* | [**getTask**](docs/Api/TaskApi.md#gettask) | **GET** /task/{task_id} | 
*TaskApi* | [**getTasks**](docs/Api/TaskApi.md#gettasks) | **GET** /task | 
*TaskApi* | [**uploadFile**](docs/Api/TaskApi.md#uploadfile) | **POST** /task/{task_id}/upload_file | 

## Models

- [CreateInventoryTaskRequest](docs/Model/CreateInventoryTaskRequest.md)
- [CreateOrderTaskRequest](docs/Model/CreateOrderTaskRequest.md)
- [CreateServiceMetricsTaskRequest](docs/Model/CreateServiceMetricsTaskRequest.md)
- [CreateTaskRequest](docs/Model/CreateTaskRequest.md)
- [CreateUserScheduleRequest](docs/Model/CreateUserScheduleRequest.md)
- [CustomerServiceMetricTaskCollection](docs/Model/CustomerServiceMetricTaskCollection.md)
- [CustomerServiceMetricsFilterCriteria](docs/Model/CustomerServiceMetricsFilterCriteria.md)
- [DateRange](docs/Model/DateRange.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [InventoryFilterCriteria](docs/Model/InventoryFilterCriteria.md)
- [InventoryTask](docs/Model/InventoryTask.md)
- [InventoryTaskCollection](docs/Model/InventoryTaskCollection.md)
- [OrderFilterCriteria](docs/Model/OrderFilterCriteria.md)
- [OrderTask](docs/Model/OrderTask.md)
- [OrderTaskCollection](docs/Model/OrderTaskCollection.md)
- [ScheduleTemplateCollection](docs/Model/ScheduleTemplateCollection.md)
- [ScheduleTemplateResponse](docs/Model/ScheduleTemplateResponse.md)
- [ServiceMetricsTask](docs/Model/ServiceMetricsTask.md)
- [SupportedConfiguration](docs/Model/SupportedConfiguration.md)
- [Task](docs/Model/Task.md)
- [TaskCollection](docs/Model/TaskCollection.md)
- [UpdateUserScheduleRequest](docs/Model/UpdateUserScheduleRequest.md)
- [UploadSummary](docs/Model/UploadSummary.md)
- [UserScheduleCollection](docs/Model/UserScheduleCollection.md)
- [UserScheduleResponse](docs/Model/UserScheduleResponse.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.fulfillment**: View and manage your order fulfillments
    - **https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly**: This scope would allow signed in user to read catalog data.
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers
    - **https://api.ebay.com/oauth/api_scope/sell.marketing**: View and manage your eBay marketing activities, such as ad campaigns and listing promotions
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

- API version: `v1.3.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
