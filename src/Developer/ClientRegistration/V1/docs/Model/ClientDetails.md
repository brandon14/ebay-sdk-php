# # ClientDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | A unique, eBay-generated id assigned to the third party application at the time it was registered. | [optional]
**client_id_issued_at** | **int** | The UNIX timestamp when the &lt;code&gt;client_id&lt;/code&gt; was issued. This time is represented as the number of seconds from \&quot;1970-01-01T00:00:00Z\&quot;, as measured in UTC, until the date/time of issuance. Refer to &lt;a href&#x3D;\&quot;https://datatracker.ietf.org/doc/html/rfc7591#section-2.3 \&quot; target&#x3D; \&quot;_blank \&quot;&gt;RFC 7591 - OAuth 2.0 Dynamic Client Registration Protocol&lt;/a&gt; for complete information. | [optional]
**client_name** | **string** | User-friendly name for the third party financial application.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Language tags are not supported. Therefore, &lt;code&gt;client_name&lt;/code&gt; will be specified in English.&lt;/span&gt; | [optional]
**client_secret** | **string** | A unique OAuth 2.0 secret string assigned by eBay to the third party application at the time it is registered. This value should be unique for multiple instances of a client using the same &lt;code&gt;client_id&lt;/code&gt;. This value is used by confidential clients to authenticate to the token endpoint, as described in OAuth 2.0 [RFC6749], Section 2.3.1.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;client_secret&lt;/code&gt; is unique to the organization identifier of subject name which contains jurisdiction, NCA Id, and Authorization Number.&lt;/span&gt; | [optional]
**client_secret_expires_at** | **int** | The UNIX timestamp when the &lt;code&gt;client_secret&lt;/code&gt; expires.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; When a &lt;code&gt;client_secret&lt;/code&gt; has been provided, this field is &lt;b&gt;REQUIRED&lt;/b&gt;.&lt;/span&gt;&lt;br/&gt;A returned value of &lt;b&gt;0&lt;/b&gt; indicates that the &lt;code&gt;client_secret&lt;/code&gt; never expires.&lt;br/&gt;&lt;br/&gt;This time is represented as the number of seconds from \&quot;1970-01-01T00:00:00Z\&quot;, as measured in UTC, until the expiration date and time. Refer to &lt;a href&#x3D;\&quot;https://datatracker.ietf.org/doc/html/rfc7591#section-3.2.1 \&quot; target&#x3D; \&quot;_blank \&quot;&gt;RFC 7591 - OAuth 2.0 Dynamic Client Registration Protocol section 3.2.1&lt;/a&gt; for complete information. | [optional]
**contacts** | **string[]** | This container stores an array of email addresses for representatives at the third party provider responsible for the application being registered. | [optional]
**grant_types** | **string[]** | An array of OAuth 2.0 grant type strings that the client software can use at the token endpoint. Supported grant type values are:&lt;br/&gt;&lt;ul&gt;&lt;li&gt;&lt;code&gt;authorization_code&lt;/code&gt;: The authorization code grant type defined in OAuth 2.0, Section 4.1.&lt;/li&gt;&lt;li&gt;&lt;code&gt;client_credentials&lt;/code&gt;: The client credentials grant type defined in OAuth 2.0, Section 4.4.&lt;/li&gt;&lt;/ul&gt;If the token endpoint is used in the grant type, the value of this parameter &lt;b&gt;MUST&lt;/b&gt; be the same as the value of the &lt;code&gt;grant_type&lt;/code&gt; parameter passed to the token endpoint defined in the grant type definition. Authorization servers &lt;b&gt;may&lt;/b&gt; allow for other values as defined in the grant type extension process described in OAuth 2.0, Section 4.5. If omitted, the default behavior is that the client will use only the &lt;code&gt;authorization_code&lt;/code&gt; Grant Type. | [optional]
**policy_uri** | **string** | The URL string pointing to a human-readable privacy policy document that describes how the third party provider collects, uses, retains, and discloses personal data.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Only HTTPS URLs are supported for &lt;code&gt;policy_uri&lt;/code&gt; strings.&lt;/span&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; This URL &lt;b&gt;must not&lt;/b&gt; point to the eBay Privacy Policy.&lt;/span&gt;&lt;br/&gt;The authorization server should display this secure URL to the end-user if it is provided. The value of this field &lt;b&gt;must&lt;/b&gt; point to a valid and secure web page.&lt;br/&gt;&lt;br/&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Language tags are not supported. Therefore, &lt;code&gt;policy_uri&lt;/code&gt; will be displayed in English.&lt;/span&gt; | [optional]
**redirect_uris** | **string[]** | An eBay system-generated value assigned to the application. This value represents the redirect uri(s) submitted by the user either in the request payload (i.e., the &lt;code&gt;redirect_uris&lt;/code&gt; field,) or the &lt;code&gt;software_statement&lt;/code&gt;. | [optional]
**scope** | **string** | String containing a space-separated list of scope values (as described in Section 3.3 of OAuth 2.0 [RFC6749]) that the client can use when requesting access tokens. The semantics of values in this list are service specific. | [optional]
**software_id** | **string** | A unique identifier string provided by the client developer or software publisher at the time of registration that identifies the client software being registered.&lt;br/&gt;&lt;br/&gt;Unlike &lt;code&gt;client_id&lt;/code&gt; which should change between instances, the &lt;CODE&gt;software_id&lt;/code&gt; should be the same value for all instances of the client software. That is, the &lt;code&gt;software_id&lt;/code&gt; should remain unchanged across multiple updates or versions of the same piece of software. | [optional]
**software_statement** | **string** | The Software Statement Assertion (SSA), a JSON Web Token (JWT), that has been issued by the OpenBanking identifier. Refer to &lt;a href&#x3D;\&quot;https://datatracker.ietf.org/doc/html/rfc7591#section-2.3 \&quot; target&#x3D; \&quot;_blank \&quot;&gt;RFC 7591 - OAuth 2.0 Dynamic Client Registration Protocol&lt;/a&gt; for complete information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)