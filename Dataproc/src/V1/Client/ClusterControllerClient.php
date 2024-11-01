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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dataproc/v1/clusters.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dataproc\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dataproc\V1\Cluster;
use Google\Cloud\Dataproc\V1\ClusterOperationMetadata;
use Google\Cloud\Dataproc\V1\CreateClusterRequest;
use Google\Cloud\Dataproc\V1\DeleteClusterRequest;
use Google\Cloud\Dataproc\V1\DiagnoseClusterRequest;
use Google\Cloud\Dataproc\V1\DiagnoseClusterResults;
use Google\Cloud\Dataproc\V1\GetClusterRequest;
use Google\Cloud\Dataproc\V1\ListClustersRequest;
use Google\Cloud\Dataproc\V1\StartClusterRequest;
use Google\Cloud\Dataproc\V1\StopClusterRequest;
use Google\Cloud\Dataproc\V1\UpdateClusterRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The ClusterControllerService provides methods to manage clusters
 * of Compute Engine instances.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> createClusterAsync(CreateClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteClusterAsync(DeleteClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> diagnoseClusterAsync(DiagnoseClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Cluster> getClusterAsync(GetClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listClustersAsync(ListClustersRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> startClusterAsync(StartClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> stopClusterAsync(StopClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateClusterAsync(UpdateClusterRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class ClusterControllerClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dataproc.v1.ClusterController';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'dataproc.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dataproc.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cluster_controller_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cluster_controller_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cluster_controller_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cluster_controller_rest_client_config.php',
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
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a cluster
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $cluster
     *
     * @return string The formatted cluster resource.
     */
    public static function clusterName(string $project, string $location, string $cluster): string
    {
        return self::getPathTemplate('cluster')->render([
            'project' => $project,
            'location' => $location,
            'cluster' => $cluster,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * cluster_region resource.
     *
     * @param string $project
     * @param string $region
     * @param string $cluster
     *
     * @return string The formatted cluster_region resource.
     */
    public static function clusterRegionName(string $project, string $region, string $cluster): string
    {
        return self::getPathTemplate('clusterRegion')->render([
            'project' => $project,
            'region' => $region,
            'cluster' => $cluster,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a crypto_key
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $keyRing
     * @param string $cryptoKey
     *
     * @return string The formatted crypto_key resource.
     */
    public static function cryptoKeyName(string $project, string $location, string $keyRing, string $cryptoKey): string
    {
        return self::getPathTemplate('cryptoKey')->render([
            'project' => $project,
            'location' => $location,
            'key_ring' => $keyRing,
            'crypto_key' => $cryptoKey,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a node_group
     * resource.
     *
     * @param string $project
     * @param string $region
     * @param string $cluster
     * @param string $nodeGroup
     *
     * @return string The formatted node_group resource.
     */
    public static function nodeGroupName(string $project, string $region, string $cluster, string $nodeGroup): string
    {
        return self::getPathTemplate('nodeGroup')->render([
            'project' => $project,
            'region' => $region,
            'cluster' => $cluster,
            'node_group' => $nodeGroup,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a service
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $service
     *
     * @return string The formatted service resource.
     */
    public static function serviceName(string $project, string $location, string $service): string
    {
        return self::getPathTemplate('service')->render([
            'project' => $project,
            'location' => $location,
            'service' => $service,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - cluster: projects/{project}/locations/{location}/clusters/{cluster}
     * - clusterRegion: projects/{project}/regions/{region}/clusters/{cluster}
     * - cryptoKey: projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}
     * - nodeGroup: projects/{project}/regions/{region}/clusters/{cluster}/nodeGroups/{node_group}
     * - service: projects/{project}/locations/{location}/services/{service}
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
     *           as "<uri>:<port>". Default 'dataproc.googleapis.com:443'.
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
     * Creates a cluster in a project. The returned
     * [Operation.metadata][google.longrunning.Operation.metadata] will be
     * [ClusterOperationMetadata](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#clusteroperationmetadata).
     *
     * The async variant is {@see ClusterControllerClient::createClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/create_cluster.php
     *
     * @param CreateClusterRequest $request     A request to house fields associated with the call.
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
    public function createCluster(CreateClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateCluster', $request, $callOptions)->wait();
    }

    /**
     * Deletes a cluster in a project. The returned
     * [Operation.metadata][google.longrunning.Operation.metadata] will be
     * [ClusterOperationMetadata](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#clusteroperationmetadata).
     *
     * The async variant is {@see ClusterControllerClient::deleteClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/delete_cluster.php
     *
     * @param DeleteClusterRequest $request     A request to house fields associated with the call.
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
    public function deleteCluster(DeleteClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteCluster', $request, $callOptions)->wait();
    }

    /**
     * Gets cluster diagnostic information. The returned
     * [Operation.metadata][google.longrunning.Operation.metadata] will be
     * [ClusterOperationMetadata](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#clusteroperationmetadata).
     * After the operation completes,
     * [Operation.response][google.longrunning.Operation.response]
     * contains
     * [DiagnoseClusterResults](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#diagnoseclusterresults).
     *
     * The async variant is {@see ClusterControllerClient::diagnoseClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/diagnose_cluster.php
     *
     * @param DiagnoseClusterRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function diagnoseCluster(DiagnoseClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DiagnoseCluster', $request, $callOptions)->wait();
    }

    /**
     * Gets the resource representation for a cluster in a project.
     *
     * The async variant is {@see ClusterControllerClient::getClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/get_cluster.php
     *
     * @param GetClusterRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Cluster
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getCluster(GetClusterRequest $request, array $callOptions = []): Cluster
    {
        return $this->startApiCall('GetCluster', $request, $callOptions)->wait();
    }

    /**
     * Lists all regions/{region}/clusters in a project alphabetically.
     *
     * The async variant is {@see ClusterControllerClient::listClustersAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/list_clusters.php
     *
     * @param ListClustersRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function listClusters(ListClustersRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListClusters', $request, $callOptions);
    }

    /**
     * Starts a cluster in a project.
     *
     * The async variant is {@see ClusterControllerClient::startClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/start_cluster.php
     *
     * @param StartClusterRequest $request     A request to house fields associated with the call.
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
    public function startCluster(StartClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('StartCluster', $request, $callOptions)->wait();
    }

    /**
     * Stops a cluster in a project.
     *
     * The async variant is {@see ClusterControllerClient::stopClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/stop_cluster.php
     *
     * @param StopClusterRequest $request     A request to house fields associated with the call.
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
    public function stopCluster(StopClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('StopCluster', $request, $callOptions)->wait();
    }

    /**
     * Updates a cluster in a project. The returned
     * [Operation.metadata][google.longrunning.Operation.metadata] will be
     * [ClusterOperationMetadata](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#clusteroperationmetadata).
     * The cluster must be in a
     * [`RUNNING`][google.cloud.dataproc.v1.ClusterStatus.State] state or an error
     * is returned.
     *
     * The async variant is {@see ClusterControllerClient::updateClusterAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/update_cluster.php
     *
     * @param UpdateClusterRequest $request     A request to house fields associated with the call.
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
    public function updateCluster(UpdateClusterRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateCluster', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see ClusterControllerClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see ClusterControllerClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see ClusterControllerClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/ClusterControllerClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
