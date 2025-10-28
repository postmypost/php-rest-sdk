# # PublicationAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Publication ID |
**external_id** | **string** | Chanel publication ID | [optional]
**external_url** | **string** | Chanel publication URL |
**created_at** | **\DateTime** | Post creation date and time |
**content** | **string** | Post text | [optional]
**analytics** | **array<string,float>** | Metrics for the post (e.g. views, likes, comments, etc.) |
**attaches** | [**\Postmypost\RestSdk\Model\Attachment[]**](Attachment.md) | Array of attachments |
**type** | [**\Postmypost\RestSdk\Model\PublicationAnalyticsTypeEnum**](PublicationAnalyticsTypeEnum.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
