# # CampaignCriterion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_select_future_inventory** | **bool** | A field used to indicate whether listings shall be automatically added to, or removed from, a Promoted Listings campaign based on the rules that have been configured for the campaign.&lt;br /&gt;&lt;br /&gt;If set to &lt;code&gt;true&lt;/code&gt;, eBay adds all listings matching the campaign criterion to the campaign, including any new listings created from the items in a seller&#39;s inventory.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Default:&lt;/b&gt; &lt;code&gt;false&lt;/code&gt; | [optional]
**criterion_type** | **string** | This enum defines the criterion (selection rule) types. Currently, the only criterion type supported is &lt;code&gt;INVENTORY_PARTITION&lt;/code&gt;, and you must specify this value if you manage your items with the Inventory API and you want to include items based on their inventory reference IDs.  &lt;br&gt;&lt;br&gt;Do not include this field if you manage your listings with Trading API/legacy model. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/marketing/types/pls:CriterionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**selection_rules** | [**\TNT\Ebay\Sell\Marketing\V1\Model\SelectionRule[]**](SelectionRule.md) | This container shows all of the rules/inclusion filters used to add listings to the campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
