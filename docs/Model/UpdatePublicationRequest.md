# # UpdatePublicationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_at** | **\DateTime** | The scheduled or actual date and time when the post is (or was) published |
**delete_at** | **\DateTime** | The scheduled date and time for automatic deletion of the pos | [optional]
**rubric_id** | **int** | Rubric ID | [optional]
**account_ids** | **int[]** | List of account IDs where the publication will be posted |
**publication_status** | [**\Postmypost\RestSdk\Model\PublicationStatusEnumEdit**](PublicationStatusEnumEdit.md) |  |
**details** | [**\Postmypost\RestSdk\Model\PublicationDetailEditRequest[]**](PublicationDetailEditRequest.md) | Publication details for each account or group of accounts |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
