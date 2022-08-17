# # Bidding

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auction_end_date** | **string** | The date the auction will end. | [optional]
**auction_status** | **string** | An enumeration value that represents the current state of the auction, such as ACTIVE or ENDED. If this value is ENDED and the value of highBidder is true, this indicates the buyer has won the auction. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/offer/types/api:AuctionStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**bid_count** | **int** | The number of proxy bids that have been placed for the auction. | [optional]
**current_price** | [**\TNT\Ebay\Buy\OfferBeta\V1\Model\Amount**](Amount.md) |  | [optional]
**current_proxy_bid** | [**\TNT\Ebay\Buy\OfferBeta\V1\Model\ProxyBid**](ProxyBid.md) |  | [optional]
**high_bidder** | **bool** | Indicates if the buyer is the highest bidder. If the value is false, this indicates that either the buyer has not bid on this item or has been out-bid. If this value is true, this indicates the buyer is winning the auction and if the value of auctionStatus is ENDED, this indicates the buyer has won the auction. | [optional]
**item_id** | **string** | The eBay RESTful identifier of an item being bid on, which was submitted in the request. | [optional]
**reserve_price_met** | **bool** | This indicates if the reserve price of the item has been met. A reserve price is set by the seller and is the minimum amount the seller is willing to sell the item for. If the highest bid is not equal to or higher than the reserve price when the auction ends, the listing ends and the item is not sold. Note: This is returned only for auctions that have a reserve price. | [optional]
**suggested_bid_amounts** | [**\TNT\Ebay\Buy\OfferBeta\V1\Model\Amount[]**](Amount.md) | The suggested bid amount for the next bid. Note: These are generated suggestions and do not guarantee the buyer will win the bid. This means these suggestions do not take into account the max bid amount of other bidders. The buyer can be outbid even if they submit the highest suggested bid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
