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

// [START datacatalog_v1_generated_DataCatalog_CreateTagTemplate_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DataCatalog\V1\Client\DataCatalogClient;
use Google\Cloud\DataCatalog\V1\CreateTagTemplateRequest;
use Google\Cloud\DataCatalog\V1\TagTemplate;

/**
 * Creates a tag template.
 *
 * You must enable the Data Catalog API in the project identified by the
 * `parent` parameter.
 * For more information, see [Data Catalog resource project]
 * (https://cloud.google.com/data-catalog/docs/concepts/resource-project).
 *
 * @param string $formattedParent The name of the project and the template location
 *                                [region](https://cloud.google.com/data-catalog/docs/concepts/regions). Please see
 *                                {@see DataCatalogClient::locationName()} for help formatting this field.
 * @param string $tagTemplateId   The ID of the tag template to create.
 *
 *                                The ID must contain only lowercase letters (a-z), numbers (0-9),
 *                                or underscores (_), and must start with a letter or underscore.
 *                                The maximum size is 64 bytes when encoded in UTF-8.
 */
function create_tag_template_sample(string $formattedParent, string $tagTemplateId): void
{
    // Create a client.
    $dataCatalogClient = new DataCatalogClient();

    // Prepare the request message.
    $tagTemplateFields = [];
    $tagTemplate = (new TagTemplate())
        ->setFields($tagTemplateFields);
    $request = (new CreateTagTemplateRequest())
        ->setParent($formattedParent)
        ->setTagTemplateId($tagTemplateId)
        ->setTagTemplate($tagTemplate);

    // Call the API and handle any network failures.
    try {
        /** @var TagTemplate $response */
        $response = $dataCatalogClient->createTagTemplate($request);
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
    $formattedParent = DataCatalogClient::locationName('[PROJECT]', '[LOCATION]');
    $tagTemplateId = '[TAG_TEMPLATE_ID]';

    create_tag_template_sample($formattedParent, $tagTemplateId);
}
// [END datacatalog_v1_generated_DataCatalog_CreateTagTemplate_sync]
