<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START datacatalog_v1_generated_DataCatalog_DeleteEntryGroup_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DataCatalog\V1\DataCatalogClient;

/**
 * Deletes an entry group.
 *
 * You must enable the Data Catalog API in the project
 * identified by the `name` parameter. For more information, see [Data Catalog
 * resource
 * project](https://cloud.google.com/data-catalog/docs/concepts/resource-project).
 *
 * @param string $formattedName The name of the entry group to delete. Please see
 *                              {@see DataCatalogClient::entryGroupName()} for help formatting this field.
 */
function delete_entry_group_sample(string $formattedName): void
{
    // Create a client.
    $dataCatalogClient = new DataCatalogClient();

    // Call the API and handle any network failures.
    try {
        $dataCatalogClient->deleteEntryGroup($formattedName);
        printf('Call completed successfully.' . PHP_EOL);
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = DataCatalogClient::entryGroupName('[PROJECT]', '[LOCATION]', '[ENTRY_GROUP]');

    delete_entry_group_sample($formattedName);
}
// [END datacatalog_v1_generated_DataCatalog_DeleteEntryGroup_sync]