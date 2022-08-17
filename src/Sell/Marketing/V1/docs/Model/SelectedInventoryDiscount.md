# # SelectedInventoryDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discount_benefit** | [**\TNT\Ebay\Sell\Marketing\V1\Model\DiscountBenefit**](DiscountBenefit.md) |  | [optional]
**discount_id** | **string** | A unique, eBay-generated ID that you can use to identify the discount. This field is ignored in POST and PUT operations. | [optional]
**inventory_criterion** | [**\TNT\Ebay\Sell\Marketing\V1\Model\InventoryCriterion**](InventoryCriterion.md) |  | [optional]
**rule_order** | **int** | For markdown promotions, this field is reserved for future use. &lt;!--This field specifies the precedence of this set of inventory criteria, which is taken into account if an item is selected for multiple discounts by different sets of criteria. The criteria with the highest priority (lowest ruleOrder value) takes precedence over criteria with a lower precedence.--&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
