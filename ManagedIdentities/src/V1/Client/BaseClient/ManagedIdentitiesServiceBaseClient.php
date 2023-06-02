<?php
/*
 * Copyright 2023 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/managedidentities/v1/managed_identities_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ManagedIdentities\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ManagedIdentities\V1\AttachTrustRequest;
use Google\Cloud\ManagedIdentities\V1\CreateMicrosoftAdDomainRequest;
use Google\Cloud\ManagedIdentities\V1\DeleteDomainRequest;
use Google\Cloud\ManagedIdentities\V1\DetachTrustRequest;
use Google\Cloud\ManagedIdentities\V1\Domain;
use Google\Cloud\ManagedIdentities\V1\GetDomainRequest;
use Google\Cloud\ManagedIdentities\V1\ListDomainsRequest;
use Google\Cloud\ManagedIdentities\V1\ReconfigureTrustRequest;
use Google\Cloud\ManagedIdentities\V1\ResetAdminPasswordRequest;
use Google\Cloud\ManagedIdentities\V1\ResetAdminPasswordResponse;
use Google\Cloud\ManagedIdentities\V1\UpdateDomainRequest;
use Google\Cloud\ManagedIdentities\V1\ValidateTrustRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: API Overview
 *
 * The `managedidentites.googleapis.com` service implements the Google Cloud
 * Managed Identites API for identity services
 * (e.g. Microsoft Active Directory).
 *
 * The Managed Identities service provides methods to manage
 * (create/read/update/delete) domains, reset managed identities admin password,
 * add/remove domain controllers in GCP regions and add/remove VPC peering.
 *
 * Data Model
 *
 * The Managed Identities service exposes the following resources:
 *
 * * Locations as global, named as follows:
 * `projects/{project_id}/locations/global`.
 *
 * * Domains, named as follows:
 * `/projects/{project_id}/locations/global/domain/{domain_name}`.
 *
 * The `{domain_name}` refers to fully qualified domain name in the customer
 * project e.g. mydomain.myorganization.com, with the following restrictions:
 *
 * * Must contain only lowercase letters, numbers, periods and hyphens.
 * * Must start with a letter.
 * * Must contain between 2-64 characters.
 * * Must end with a number or a letter.
 * * Must not start with period.
 * * First segement length (mydomain form example above) shouldn't exceed
 * 15 chars.
 * * The last segment cannot be fully numeric.
 * * Must be unique within the customer project.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface attachTrustAsync(AttachTrustRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createMicrosoftAdDomainAsync(CreateMicrosoftAdDomainRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDomainAsync(DeleteDomainRequest $request, array $optionalArgs = [])
 * @method PromiseInterface detachTrustAsync(DetachTrustRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDomainAsync(GetDomainRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDomainsAsync(ListDomainsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface reconfigureTrustAsync(ReconfigureTrustRequest $request, array $optionalArgs = [])
 * @method PromiseInterface resetAdminPasswordAsync(ResetAdminPasswordRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDomainAsync(UpdateDomainRequest $request, array $optionalArgs = [])
 * @method PromiseInterface validateTrustAsync(ValidateTrustRequest $request, array $optionalArgs = [])
 */
abstract class ManagedIdentitiesServiceBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.managedidentities.v1.ManagedIdentitiesService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'managedidentities.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/managed_identities_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/managed_identities_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/managed_identities_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/managed_identities_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a domain
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $domain
     *
     * @return string The formatted domain resource.
     */
    public static function domainName(string $project, string $location, string $domain): string
    {
        return self::getPathTemplate('domain')->render([
            'project' => $project,
            'location' => $location,
            'domain' => $domain,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - domain: projects/{project}/locations/{location}/domains/{domain}
     * - location: projects/{project}/locations/{location}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'managedidentities.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Adds an AD trust to a domain.
     *
     * The async variant is {@see self::attachTrustAsync()} .
     *
     * @param AttachTrustRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function attachTrust(AttachTrustRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AttachTrust', $request, $callOptions)->wait();
    }

    /**
     * Creates a Microsoft AD domain.
     *
     * The async variant is {@see self::createMicrosoftAdDomainAsync()} .
     *
     * @param CreateMicrosoftAdDomainRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createMicrosoftAdDomain(CreateMicrosoftAdDomainRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateMicrosoftAdDomain', $request, $callOptions)->wait();
    }

    /**
     * Deletes a domain.
     *
     * The async variant is {@see self::deleteDomainAsync()} .
     *
     * @param DeleteDomainRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteDomain(DeleteDomainRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteDomain', $request, $callOptions)->wait();
    }

    /**
     * Removes an AD trust.
     *
     * The async variant is {@see self::detachTrustAsync()} .
     *
     * @param DetachTrustRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function detachTrust(DetachTrustRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DetachTrust', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a domain.
     *
     * The async variant is {@see self::getDomainAsync()} .
     *
     * @param GetDomainRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Domain
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDomain(GetDomainRequest $request, array $callOptions = []): Domain
    {
        return $this->startApiCall('GetDomain', $request, $callOptions)->wait();
    }

    /**
     * Lists domains in a project.
     *
     * The async variant is {@see self::listDomainsAsync()} .
     *
     * @param ListDomainsRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listDomains(ListDomainsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDomains', $request, $callOptions);
    }

    /**
     * Updates the DNS conditional forwarder.
     *
     * The async variant is {@see self::reconfigureTrustAsync()} .
     *
     * @param ReconfigureTrustRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function reconfigureTrust(ReconfigureTrustRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ReconfigureTrust', $request, $callOptions)->wait();
    }

    /**
     * Resets a domain's administrator password.
     *
     * The async variant is {@see self::resetAdminPasswordAsync()} .
     *
     * @param ResetAdminPasswordRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ResetAdminPasswordResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function resetAdminPassword(ResetAdminPasswordRequest $request, array $callOptions = []): ResetAdminPasswordResponse
    {
        return $this->startApiCall('ResetAdminPassword', $request, $callOptions)->wait();
    }

    /**
     * Updates the metadata and configuration of a domain.
     *
     * The async variant is {@see self::updateDomainAsync()} .
     *
     * @param UpdateDomainRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDomain(UpdateDomainRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateDomain', $request, $callOptions)->wait();
    }

    /**
     * Validates a trust state, that the target domain is reachable, and that the
     * target domain is able to accept incoming trust requests.
     *
     * The async variant is {@see self::validateTrustAsync()} .
     *
     * @param ValidateTrustRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function validateTrust(ValidateTrustRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ValidateTrust', $request, $callOptions)->wait();
    }
}