# # ShippingAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | The first line of the street address where the item is being shipped.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;40 characters for AU, CA, and US marketplaces&lt;/li&gt;&lt;li&gt;35 characters for DE and GB marketplaces&lt;/li&gt;&lt;li&gt;50 characters for all other marketplaces&lt;/li&gt;&lt;/ul&gt; | [optional]
**address_line2** | **string** | The second line of the street address where the item is being shipped. This optional field can be used for information such as &#39;Suite Number&#39; or &#39;Apt Number&#39;.&lt;br /&gt;&lt;br /&gt;&lt;b&gt;Maximum:&lt;/b&gt;&lt;ul&gt;&lt;li&gt;40 characters for AU, CA, and US marketplaces&lt;/li&gt;&lt;li&gt;35 characters for DE and GB marketplaces&lt;/li&gt;&lt;li&gt;50 characters for all other marketplaces&lt;/li&gt;&lt;/ul&gt; | [optional]
**city** | **string** | The city of the address where the item is being shipped. | [optional]
**country** | **string** | The two letter code representing the country of the address. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/buy/order/types/bas:CountryCodeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**county** | **string** | The county of the address where the item is being shipped. | [optional]
**phone_number** | **string** | The phone number of the person receiving the package.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; It is highly recommended that when entering the phone number you include the country code.&lt;br /&gt;&lt;br /&gt;For example, if a US phone number is &lt;code&gt;4********4&lt;/code&gt;, you would enter &lt;code&gt;+14********4&lt;/code&gt;. If you do not include this code, the service will use the country specified in the &lt;b&gt;country&lt;/b&gt; field.&lt;br /&gt;&lt;br /&gt;You can find the country code at &lt;a href&#x3D;\&quot;https://countrycode.org/\&quot;&gt;https://countrycode.org&lt;/a&gt;.&lt;/span&gt; | [optional]
**postal_code** | **string** | The postal code of the address where the item is being shipped.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This is optional when shipping to EBAY_HK (Hong Kong).&lt;/span&gt; | [optional]
**recipient** | [**\TNT\Ebay\Buy\Order\V2\Model\Recipient**](Recipient.md) |  | [optional]
**state_or_province** | **string** | The state or province of the address.&lt;br /&gt;&lt;br /&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; For the US marketplace, this is a two-character value. For a list of valid values, see &lt;a href&#x3D;\&quot;https://www.ups.com/worldshiphelp/WS15/ENU/AppHelp/Codes/State_Province_Codes.htm\&quot;&gt;US State and Canada Province Codes&lt;/a&gt;. &lt;/span&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
