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

// [START vmwareengine_v1_generated_VmwareEngine_UpdatePrivateCloud_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\VmwareEngine\V1\NetworkConfig;
use Google\Cloud\VmwareEngine\V1\PrivateCloud;
use Google\Cloud\VmwareEngine\V1\VmwareEngineClient;
use Google\Protobuf\FieldMask;
use Google\Rpc\Status;

/**
 * Modifies a `PrivateCloud` resource. Only the following fields can be
 * updated: `description`.
 * Only fields specified in `updateMask` are applied.
 *
 * During operation processing, the resource is temporarily in the `ACTIVE`
 * state before the operation fully completes. For that period of time, you
 * can't update the resource. Use the operation status to determine when the
 * processing fully completes.
 *
 * @param string $privateCloudNetworkConfigManagementCidr Management CIDR used by VMware management appliances.
 */
function update_private_cloud_sample(string $privateCloudNetworkConfigManagementCidr): void
{
    // Create a client.
    $vmwareEngineClient = new VmwareEngineClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $privateCloudNetworkConfig = (new NetworkConfig())
        ->setManagementCidr($privateCloudNetworkConfigManagementCidr);
    $privateCloud = (new PrivateCloud())
        ->setNetworkConfig($privateCloudNetworkConfig);
    $updateMask = new FieldMask();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $vmwareEngineClient->updatePrivateCloud($privateCloud, $updateMask);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var PrivateCloud $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
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
    $privateCloudNetworkConfigManagementCidr = '[MANAGEMENT_CIDR]';

    update_private_cloud_sample($privateCloudNetworkConfigManagementCidr);
}
// [END vmwareengine_v1_generated_VmwareEngine_UpdatePrivateCloud_sync]