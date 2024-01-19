<?php
/*
 * Copyright 2024 Google LLC
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

// [START vmwareengine_v1_generated_VmwareEngine_CreateExternalAddress_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\VmwareEngine\V1\Client\VmwareEngineClient;
use Google\Cloud\VmwareEngine\V1\CreateExternalAddressRequest;
use Google\Cloud\VmwareEngine\V1\ExternalAddress;
use Google\Rpc\Status;

/**
 * Creates a new `ExternalAddress` resource in a given private cloud. The
 * network policy that corresponds to the private cloud must have the external
 * IP address network service enabled (`NetworkPolicy.external_ip`).
 *
 * @param string $formattedParent   The resource name of the private cloud
 *                                  to create a new external IP address in.
 *                                  Resource names are schemeless URIs that follow the conventions in
 *                                  https://cloud.google.com/apis/design/resource_names.
 *                                  For example:
 *                                  `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
 *                                  Please see {@see VmwareEngineClient::privateCloudName()} for help formatting this field.
 * @param string $externalAddressId The user-provided identifier of the `ExternalAddress` to be
 *                                  created. This identifier must be unique among `ExternalAddress` resources
 *                                  within the parent and becomes the final token in the name URI. The
 *                                  identifier must meet the following requirements:
 *
 *                                  * Only contains 1-63 alphanumeric characters and hyphens
 *                                  * Begins with an alphabetical character
 *                                  * Ends with a non-hyphen character
 *                                  * Not formatted as a UUID
 *                                  * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
 *                                  (section 3.5)
 */
function create_external_address_sample(string $formattedParent, string $externalAddressId): void
{
    // Create a client.
    $vmwareEngineClient = new VmwareEngineClient();

    // Prepare the request message.
    $externalAddress = new ExternalAddress();
    $request = (new CreateExternalAddressRequest())
        ->setParent($formattedParent)
        ->setExternalAddress($externalAddress)
        ->setExternalAddressId($externalAddressId);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $vmwareEngineClient->createExternalAddress($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ExternalAddress $result */
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
    $formattedParent = VmwareEngineClient::privateCloudName(
        '[PROJECT]',
        '[LOCATION]',
        '[PRIVATE_CLOUD]'
    );
    $externalAddressId = '[EXTERNAL_ADDRESS_ID]';

    create_external_address_sample($formattedParent, $externalAddressId);
}
// [END vmwareengine_v1_generated_VmwareEngine_CreateExternalAddress_sync]
