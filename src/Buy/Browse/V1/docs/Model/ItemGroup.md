# # ItemGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**common_descriptions** | [**\TNT\Ebay\Buy\Browse\V1\Model\CommonDescriptions[]**](CommonDescriptions.md) | An array of containers for a description and the item IDs of all the items that have this exact description. Often the item variations within an item group all have the same description. Instead of repeating this description in the item details of each item, a description that is shared by at least one other item is returned in this container. If the description is unique, it is returned in the &lt;b&gt; items.description&lt;/b&gt; field. | [optional]
**items** | [**\TNT\Ebay\Buy\Browse\V1\Model\Item[]**](Item.md) | An array of containers for all the item variation details, excluding the description. | [optional]
**warnings** | [**\TNT\Ebay\Buy\Browse\V1\Model\Error[]**](Error.md) | An array of warning messages. These types of errors do not prevent the method from executing but should be checked. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
