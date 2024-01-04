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

// [START bigtable_v2_generated_Bigtable_CheckAndMutateRow_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Bigtable\V2\CheckAndMutateRowRequest;
use Google\Cloud\Bigtable\V2\CheckAndMutateRowResponse;
use Google\Cloud\Bigtable\V2\Client\BigtableClient;

/**
 * Mutates a row atomically based on the output of a predicate Reader filter.
 *
 * @param string $formattedTableName The unique name of the table to which the conditional mutation
 *                                   should be applied. Values are of the form
 *                                   `projects/<project>/instances/<instance>/tables/<table>`. Please see
 *                                   {@see BigtableClient::tableName()} for help formatting this field.
 * @param string $rowKey             The key of the row to which the conditional mutation should be
 *                                   applied.
 */
function check_and_mutate_row_sample(string $formattedTableName, string $rowKey): void
{
    // Create a client.
    $bigtableClient = new BigtableClient();

    // Prepare the request message.
    $request = (new CheckAndMutateRowRequest())
        ->setTableName($formattedTableName)
        ->setRowKey($rowKey);

    // Call the API and handle any network failures.
    try {
        /** @var CheckAndMutateRowResponse $response */
        $response = $bigtableClient->checkAndMutateRow($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedTableName = BigtableClient::tableName('[PROJECT]', '[INSTANCE]', '[TABLE]');
    $rowKey = '...';

    check_and_mutate_row_sample($formattedTableName, $rowKey);
}
// [END bigtable_v2_generated_Bigtable_CheckAndMutateRow_sync]
