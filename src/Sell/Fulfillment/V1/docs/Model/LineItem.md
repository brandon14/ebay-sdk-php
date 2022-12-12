# # LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applied_promotions** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\AppliedPromotion[]**](AppliedPromotion.md) | This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item. | [optional]
**delivery_cost** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\DeliveryCost**](DeliveryCost.md) |  | [optional]
**discounted_line_item_cost** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount**](Amount.md) |  | [optional]
**ebay_collect_and_remit_taxes** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectAndRemitTax[]**](EbayCollectAndRemitTax.md) | This container will be returned if the order line item is subject to a &#39;Collect and Remit&#39; tax that eBay will collect and remit to the proper taxing authority on the buyer&#39;s behalf.&lt;br/&gt;&lt;br/&gt;&#39;Collect and Remit&#39; tax includes:&lt;ul&gt;&lt;li&gt;US state-mandated sales tax&lt;/li&gt;&lt;li&gt;Federal and Provincial Sales Tax in Canada&lt;/li&gt;&lt;li&gt;&#39;Goods and Services&#39; tax in Canada, Australia, and New Zealand&lt;/li&gt;&lt;li&gt;VAT collected for the UK and EU countries&lt;/li&gt;&lt;/ul&gt;The amount of this tax is shown in the &lt;strong&gt;amount&lt;/strong&gt; field, and the type of tax is shown in the &lt;strong&gt;taxType&lt;/strong&gt; field.&lt;br/&gt;&lt;br/&gt;eBay will display the tax type and amount during checkout in accordance with the buyer&#39;s address, and handle collection and remittance of the tax without requiring the seller to take any action. | [optional]
**ebay_collected_charges** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\EbayCollectedCharges**](EbayCollectedCharges.md) |  | [optional]
**gift_details** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\GiftDetails**](GiftDetails.md) |  | [optional]
**item_location** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\ItemLocation**](ItemLocation.md) |  | [optional]
**legacy_item_id** | **string** | The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the &lt;strong&gt;listingId&lt;/strong&gt; instead. | [optional]
**legacy_variation_id** | **string** | The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing. | [optional]
**line_item_cost** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount**](Amount.md) |  | [optional]
**line_item_fulfillment_instructions** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemFulfillmentInstructions**](LineItemFulfillmentInstructions.md) |  | [optional]
**line_item_fulfillment_status** | **string** | This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:LineItemFulfillmentStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**line_item_id** | **string** | This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller. | [optional]
**listing_marketplace_id** | **string** | The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**properties** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemProperties**](LineItemProperties.md) |  | [optional]
**purchase_marketplace_id** | **string** | The unique identifier of the eBay marketplace where the line item was listed. Often, the &lt;strong&gt;listingMarketplaceId&lt;/strong&gt; and the &lt;strong&gt;purchaseMarketplaceId&lt;/strong&gt; identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**quantity** | **int** | The number of units of the line item in the order. These are represented as a group by a single &lt;b&gt;lineItemId&lt;/b&gt;. | [optional]
**refunds** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\LineItemRefund[]**](LineItemRefund.md) | This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund. | [optional]
**sku** | **string** | Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller&#39;s eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model. | [optional]
**sold_format** | **string** | The eBay listing type of the line item. The most common listing types are &lt;code&gt;AUCTION&lt;/code&gt; and &lt;code&gt;FIXED_PRICE&lt;/code&gt;. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:SoldFormatEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**taxes** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Tax[]**](Tax.md) | Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item. | [optional]
**title** | **string** | The title of the listing. | [optional]
**total** | [**\TNT\Ebay\Sell\Fulfillment\V1\Model\Amount**](Amount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
