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

// [START compute_v1_generated_InstanceGroupManagers_SetTargetPools_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Compute\V1\Client\InstanceGroupManagersClient;
use Google\Cloud\Compute\V1\InstanceGroupManagersSetTargetPoolsRequest;
use Google\Cloud\Compute\V1\SetTargetPoolsInstanceGroupManagerRequest;
use Google\Rpc\Status;

/**
 * Modifies the target pools to which all instances in this managed instance group are assigned. The target pools automatically apply to all of the instances in the managed instance group. This operation is marked DONE when you make the request even if the instances have not yet been added to their target pools. The change might take some time to apply to all of the instances in the group depending on the size of the group.
 *
 * @param string $instanceGroupManager The name of the managed instance group.
 * @param string $project              Project ID for this request.
 * @param string $zone                 The name of the zone where the managed instance group is located.
 */
function set_target_pools_sample(
    string $instanceGroupManager,
    string $project,
    string $zone
): void {
    // Create a client.
    $instanceGroupManagersClient = new InstanceGroupManagersClient();

    // Prepare the request message.
    $instanceGroupManagersSetTargetPoolsRequestResource = new InstanceGroupManagersSetTargetPoolsRequest();
    $request = (new SetTargetPoolsInstanceGroupManagerRequest())
        ->setInstanceGroupManager($instanceGroupManager)
        ->setInstanceGroupManagersSetTargetPoolsRequestResource(
            $instanceGroupManagersSetTargetPoolsRequestResource
        )
        ->setProject($project)
        ->setZone($zone);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $instanceGroupManagersClient->setTargetPools($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
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
    $instanceGroupManager = '[INSTANCE_GROUP_MANAGER]';
    $project = '[PROJECT]';
    $zone = '[ZONE]';

    set_target_pools_sample($instanceGroupManager, $project, $zone);
}
// [END compute_v1_generated_InstanceGroupManagers_SetTargetPools_sync]
