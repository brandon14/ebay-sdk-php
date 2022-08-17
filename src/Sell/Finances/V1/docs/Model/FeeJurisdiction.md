# # FeeJurisdiction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**region_name** | **string** | String value that indicates the name of the region to which a region-specific fee applies.&lt;br/&gt;&lt;br/&gt;The set of valid &lt;b&gt;regionName&lt;/b&gt; values that may be returned is determined by the &lt;b&gt;regionType&lt;/b&gt; value.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Currently, supported &lt;b&gt;regionName&lt;/b&gt; values that may be returned are standard two-character country codes.&lt;br/&gt;&lt;br/&gt;Typical examples include:&lt;ul&gt;&lt;li&gt;&lt;b&gt;MX&lt;/b&gt; [Mexico]&lt;/li&gt;&lt;li&gt;&lt;b&gt;IN&lt;/b&gt; [India]&lt;/li&gt;&lt;li&gt;&lt;b&gt;US&lt;/b&gt; [United States]&lt;/li&gt;&lt;/ul&gt;&lt;/span&gt; | [optional]
**region_type** | **string** | The enumeration value returned here indicates the type of region that is collecting the corresponding fee.&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Currently, the only supported &lt;b&gt;regionType&lt;/b&gt; is &lt;code&gt;COUNTRY&lt;/code&gt;.&lt;/span&gt; For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:RegionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
