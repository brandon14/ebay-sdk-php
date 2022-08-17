# # AspectValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**localized_value** | **string** | The localized value of this aspect.&lt;br /&gt;&lt;br /&gt;          &lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; This value is always localized for the specified marketplace. &lt;/span&gt; | [optional]
**value_constraints** | [**\TNT\Ebay\Commerce\Taxonomy\V1\Model\ValueConstraint[]**](ValueConstraint.md) | &lt;i&gt;Not returned if&lt;/i&gt; the value of the &lt;b&gt;localizedValue&lt;/b&gt; field can always be selected for this aspect of the specified category.&lt;br /&gt;&lt;br /&gt;Contains a list of the dependencies that identify when the value of the &lt;b&gt;localizedValue&lt;/b&gt; field is available for the current aspect. Each dependency specifies the values of another aspect of the same category (a &lt;i&gt;control&lt;/i&gt; aspect), for which the current value of the current aspect can also be selected by the seller. &lt;br /&gt;&lt;br /&gt;          &lt;b&gt;Example:&lt;/b&gt; A shirt is available in three sizes and three colors, but only the Small and Medium sizes come in Green. Thus for the Color aspect, the value Green is constrained by its dependency on Size (the control aspect). Only when the Size aspect value is Small or Medium, can the Color aspect value of Green be selected by the seller. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
