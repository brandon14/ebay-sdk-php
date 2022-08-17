# # ExtendedContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_name** | **string** | The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner. | [optional]
**contact_address** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Address**](Address.md) |  | [optional]
**email** | **string** | This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned. &lt;br /&gt;&lt;br /&gt; &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; If returned, this field contains the email address of the buyer, even for Global Shipping Program shipments.&lt;/span&gt; | [optional]
**full_name** | **string** | The full name of the buyer or eBay shipping partner. | [optional]
**primary_phone** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\PhoneNumber**](PhoneNumber.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
