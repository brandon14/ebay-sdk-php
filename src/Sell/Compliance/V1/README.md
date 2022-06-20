# trollandtoad/ebay-sell-compliance-v1

Service for providing information to sellers about their listings being non-compliant, or at risk for becoming non-compliant, against eBay listing policies.


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
      "url": "https://github.com/trollandtoad/ebay-sell-compliance-v1.git"
    }
  ],
  "require": {
    "trollandtoad/ebay-sell-compliance-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/trollandtoad/ebay-sell-compliance-v1/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = TNT\Ebay\Sell\Compliance\V1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new TNT\Ebay\Sell\Compliance\V1\Api\ListingViolationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = 'x_ebay_c_marketplace_id_example'; // string | This header is required and is used to specify the eBay marketplace identifier. Supported values for this header can be found in the MarketplaceIdEnum type definition. Note that Version 1.4.0 of the Compliance API is only supported on the US, UK, Australia, Canada {English), and Germany sites.
$compliance_type = 'compliance_type_example'; // string | A seller uses this query parameter to retrieve listing violations of a specific compliance type. Only one compliance type value should be passed in here. See ComplianceTypeEnum for more information on the compliance types that can be passed in here. If the listing_id query parameter is used, the compliance_type query parameter {if passed in) will be ignored. This is because all of a listing's policy violations {each compliance type) will be returned if a listing_id is provided. Either the listing_id or a compliance_type query parameter must be used, and if the seller only wants to view listing violations of a specific compliance type, both of these parameters can be used. Note: The listing_id query parameter is not yet available for use, so the seller does not have the ability to retrieve listing violations for one or more specific listings. Until the listing_id query parameter becomes available, the compliance_type query parameter is required with each getListingViolations call.
$offset = 'offset_example'; // string | The integer value input into this field controls the first listing violation in the result set that will be displayed at the top of the response. The offset and limit query parameters are used to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves listing violations 11 thru 20 from the resulting set of violations. Note: This feature employs a zero-based index, where the first item in the list has an offset of 0. If the listing_id parameter is included in the request, this parameter will be ignored. Default: 0 {zero)
$listing_id = 'listing_id_example'; // string | Note: This query parameter is not yet supported for the Compliance API. Please note that until this query parameter becomes available, the compliance_type query parameter is required with each getListingViolations call. This query parameter is used if the user wants to view all listing violations for one or more eBay listings. The string value passed into this field is the unique identifier of the listing, sometimes referred to as the Item ID. Either the listing_id or a compliance_type query parameter must be used, and if the seller only wants to view listing violations of a specific compliance type, both of these parameters can be used. Up to 50 listing IDs can be specified with this query parameter, and each unique listing ID is separated with a comma.
$limit = 'limit_example'; // string | This query parameter is used if the user wants to set a limit on the number of listing violations that are returned on one page of the result set. This parameter is used in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the call retrieves listing violations 11 thru 20 from the collection of listing violations that match the value set in the compliance_type parameter. Note: This feature employs a zero-based index, where the first item in the list has an offset of 0. If the listing_id parameter is included in the request, this parameter will be ignored. Default: 100 Maximum: 200
$filter = 'filter_example'; // string | This filter allows a user to retrieve only listings that are currently out of compliance, or only listings that are at risk of becoming out of compliance. Although other filters may be added in the future, complianceState is the only supported filter type at this time. The two compliance 'states' are OUT_OF_COMPLIANCE and AT_RISK. Below is an example of how to set up this compliance state filter. Notice that the filter type and filter value are separated with a colon (:) character, and the filter value is wrapped with curly brackets. filter=complianceState:{OUT_OF_COMPLIANCE}

try {
    $result = $apiInstance->getListingViolations($x_ebay_c_marketplace_id, $compliance_type, $offset, $listing_id, $limit, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingViolationApi->getListingViolations: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/compliance/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ListingViolationApi* | [**getListingViolations**](docs/Api/ListingViolationApi.md#getlistingviolations) | **GET** /listing_violation | 
*ListingViolationApi* | [**suppressViolation**](docs/Api/ListingViolationApi.md#suppressviolation) | **POST** /suppress_listing_violation | 
*ListingViolationSummaryApi* | [**getListingViolationsSummary**](docs/Api/ListingViolationSummaryApi.md#getlistingviolationssummary) | **GET** /listing_violation_summary | 

## Models

- [AspectRecommendations](docs/Model/AspectRecommendations.md)
- [ComplianceDetail](docs/Model/ComplianceDetail.md)
- [ComplianceSummary](docs/Model/ComplianceSummary.md)
- [ComplianceSummaryInfo](docs/Model/ComplianceSummaryInfo.md)
- [ComplianceViolation](docs/Model/ComplianceViolation.md)
- [CorrectiveRecommendations](docs/Model/CorrectiveRecommendations.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [NameValueList](docs/Model/NameValueList.md)
- [PagedComplianceViolationCollection](docs/Model/PagedComplianceViolationCollection.md)
- [ProductRecommendation](docs/Model/ProductRecommendation.md)
- [SuppressViolationRequest](docs/Model/SuppressViolationRequest.md)
- [VariationDetails](docs/Model/VariationDetails.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.4.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
