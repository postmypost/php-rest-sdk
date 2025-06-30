# # Publication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Publication ID |
**post_at** | **\DateTime** | The scheduled or actual date and time when the post is (or was) published |
**delete_at** | **\DateTime** | The scheduled date and time for automatic deletion of the pos | [optional]
**rubric_id** | **int** | Rubric ID | [optional]
**account_ids** | **int[]** | List of account IDs where the post will be published |
**details** | [**\Postmypost\RestSdk\Model\PublicationDetail[]**](PublicationDetail.md) | Publication details for each account or account group |
**publication_status** | [**\Postmypost\RestSdk\Model\PublicationStatusEnum**](PublicationStatusEnum.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
