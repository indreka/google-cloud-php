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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/datacatalog/lineage/v1/lineage.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\DataCatalog\Lineage\V1\Client;

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
use Google\Cloud\DataCatalog\Lineage\V1\BatchSearchLinkProcessesRequest;
use Google\Cloud\DataCatalog\Lineage\V1\CreateLineageEventRequest;
use Google\Cloud\DataCatalog\Lineage\V1\CreateProcessRequest;
use Google\Cloud\DataCatalog\Lineage\V1\CreateRunRequest;
use Google\Cloud\DataCatalog\Lineage\V1\DeleteLineageEventRequest;
use Google\Cloud\DataCatalog\Lineage\V1\DeleteProcessRequest;
use Google\Cloud\DataCatalog\Lineage\V1\DeleteRunRequest;
use Google\Cloud\DataCatalog\Lineage\V1\GetLineageEventRequest;
use Google\Cloud\DataCatalog\Lineage\V1\GetProcessRequest;
use Google\Cloud\DataCatalog\Lineage\V1\GetRunRequest;
use Google\Cloud\DataCatalog\Lineage\V1\LineageEvent;
use Google\Cloud\DataCatalog\Lineage\V1\ListLineageEventsRequest;
use Google\Cloud\DataCatalog\Lineage\V1\ListProcessesRequest;
use Google\Cloud\DataCatalog\Lineage\V1\ListRunsRequest;
use Google\Cloud\DataCatalog\Lineage\V1\Process;
use Google\Cloud\DataCatalog\Lineage\V1\ProcessOpenLineageRunEventRequest;
use Google\Cloud\DataCatalog\Lineage\V1\ProcessOpenLineageRunEventResponse;
use Google\Cloud\DataCatalog\Lineage\V1\Run;
use Google\Cloud\DataCatalog\Lineage\V1\SearchLinksRequest;
use Google\Cloud\DataCatalog\Lineage\V1\UpdateProcessRequest;
use Google\Cloud\DataCatalog\Lineage\V1\UpdateRunRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Lineage is used to track data flows between assets over time. You can
 * create [LineageEvents][google.cloud.datacatalog.lineage.v1.LineageEvent]
 * to record lineage between multiple sources and a single target, for
 * example, when table data is based on data from multiple tables.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<PagedListResponse> batchSearchLinkProcessesAsync(BatchSearchLinkProcessesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<LineageEvent> createLineageEventAsync(CreateLineageEventRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Process> createProcessAsync(CreateProcessRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Run> createRunAsync(CreateRunRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteLineageEventAsync(DeleteLineageEventRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteProcessAsync(DeleteProcessRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteRunAsync(DeleteRunRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<LineageEvent> getLineageEventAsync(GetLineageEventRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Process> getProcessAsync(GetProcessRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Run> getRunAsync(GetRunRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLineageEventsAsync(ListLineageEventsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listProcessesAsync(ListProcessesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listRunsAsync(ListRunsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ProcessOpenLineageRunEventResponse> processOpenLineageRunEventAsync(ProcessOpenLineageRunEventRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> searchLinksAsync(SearchLinksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Process> updateProcessAsync(UpdateProcessRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Run> updateRunAsync(UpdateRunRequest $request, array $optionalArgs = [])
 */
final class LineageClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.datacatalog.lineage.v1.Lineage';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'datalineage.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'datalineage.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/lineage_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/lineage_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/lineage_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/lineage_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a
     * lineage_event resource.
     *
     * @param string $project
     * @param string $location
     * @param string $process
     * @param string $run
     * @param string $lineageEvent
     *
     * @return string The formatted lineage_event resource.
     */
    public static function lineageEventName(
        string $project,
        string $location,
        string $process,
        string $run,
        string $lineageEvent
    ): string {
        return self::getPathTemplate('lineageEvent')->render([
            'project' => $project,
            'location' => $location,
            'process' => $process,
            'run' => $run,
            'lineage_event' => $lineageEvent,
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
     * Formats a string containing the fully-qualified path to represent a process
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $process
     *
     * @return string The formatted process resource.
     */
    public static function processName(string $project, string $location, string $process): string
    {
        return self::getPathTemplate('process')->render([
            'project' => $project,
            'location' => $location,
            'process' => $process,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a run
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $process
     * @param string $run
     *
     * @return string The formatted run resource.
     */
    public static function runName(string $project, string $location, string $process, string $run): string
    {
        return self::getPathTemplate('run')->render([
            'project' => $project,
            'location' => $location,
            'process' => $process,
            'run' => $run,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - lineageEvent: projects/{project}/locations/{location}/processes/{process}/runs/{run}/lineageEvents/{lineage_event}
     * - location: projects/{project}/locations/{location}
     * - process: projects/{project}/locations/{location}/processes/{process}
     * - run: projects/{project}/locations/{location}/processes/{process}/runs/{run}
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
     *           as "<uri>:<port>". Default 'datalineage.googleapis.com:443'.
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
     * Retrieve information about LineageProcesses associated with specific
     * links. LineageProcesses are transformation pipelines that result in data
     * flowing from **source** to **target** assets. Links between assets
     * represent this operation.
     *
     * If you have specific link names, you can use this method to
     * verify which LineageProcesses contribute to creating those links.
     * See the
     * [SearchLinks][google.cloud.datacatalog.lineage.v1.Lineage.SearchLinks]
     * method for more information on how to retrieve link name.
     *
     * You can retrieve the LineageProcess information in every project where you
     * have the `datalineage.events.get` permission. The project provided in the
     * URL is used for Billing and Quota.
     *
     * The async variant is {@see LineageClient::batchSearchLinkProcessesAsync()} .
     *
     * @example samples/V1/LineageClient/batch_search_link_processes.php
     *
     * @param BatchSearchLinkProcessesRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
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
    public function batchSearchLinkProcesses(
        BatchSearchLinkProcessesRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('BatchSearchLinkProcesses', $request, $callOptions);
    }

    /**
     * Creates a new lineage event.
     *
     * The async variant is {@see LineageClient::createLineageEventAsync()} .
     *
     * @example samples/V1/LineageClient/create_lineage_event.php
     *
     * @param CreateLineageEventRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return LineageEvent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createLineageEvent(CreateLineageEventRequest $request, array $callOptions = []): LineageEvent
    {
        return $this->startApiCall('CreateLineageEvent', $request, $callOptions)->wait();
    }

    /**
     * Creates a new process.
     *
     * The async variant is {@see LineageClient::createProcessAsync()} .
     *
     * @example samples/V1/LineageClient/create_process.php
     *
     * @param CreateProcessRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Process
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createProcess(CreateProcessRequest $request, array $callOptions = []): Process
    {
        return $this->startApiCall('CreateProcess', $request, $callOptions)->wait();
    }

    /**
     * Creates a new run.
     *
     * The async variant is {@see LineageClient::createRunAsync()} .
     *
     * @example samples/V1/LineageClient/create_run.php
     *
     * @param CreateRunRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Run
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createRun(CreateRunRequest $request, array $callOptions = []): Run
    {
        return $this->startApiCall('CreateRun', $request, $callOptions)->wait();
    }

    /**
     * Deletes the lineage event with the specified name.
     *
     * The async variant is {@see LineageClient::deleteLineageEventAsync()} .
     *
     * @example samples/V1/LineageClient/delete_lineage_event.php
     *
     * @param DeleteLineageEventRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteLineageEvent(DeleteLineageEventRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteLineageEvent', $request, $callOptions)->wait();
    }

    /**
     * Deletes the process with the specified name.
     *
     * The async variant is {@see LineageClient::deleteProcessAsync()} .
     *
     * @example samples/V1/LineageClient/delete_process.php
     *
     * @param DeleteProcessRequest $request     A request to house fields associated with the call.
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
    public function deleteProcess(DeleteProcessRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteProcess', $request, $callOptions)->wait();
    }

    /**
     * Deletes the run with the specified name.
     *
     * The async variant is {@see LineageClient::deleteRunAsync()} .
     *
     * @example samples/V1/LineageClient/delete_run.php
     *
     * @param DeleteRunRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
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
    public function deleteRun(DeleteRunRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteRun', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a specified lineage event.
     *
     * The async variant is {@see LineageClient::getLineageEventAsync()} .
     *
     * @example samples/V1/LineageClient/get_lineage_event.php
     *
     * @param GetLineageEventRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return LineageEvent
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLineageEvent(GetLineageEventRequest $request, array $callOptions = []): LineageEvent
    {
        return $this->startApiCall('GetLineageEvent', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of the specified process.
     *
     * The async variant is {@see LineageClient::getProcessAsync()} .
     *
     * @example samples/V1/LineageClient/get_process.php
     *
     * @param GetProcessRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Process
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getProcess(GetProcessRequest $request, array $callOptions = []): Process
    {
        return $this->startApiCall('GetProcess', $request, $callOptions)->wait();
    }

    /**
     * Gets the details of the specified run.
     *
     * The async variant is {@see LineageClient::getRunAsync()} .
     *
     * @example samples/V1/LineageClient/get_run.php
     *
     * @param GetRunRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Run
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getRun(GetRunRequest $request, array $callOptions = []): Run
    {
        return $this->startApiCall('GetRun', $request, $callOptions)->wait();
    }

    /**
     * Lists lineage events in the given project and location. The list order is
     * not defined.
     *
     * The async variant is {@see LineageClient::listLineageEventsAsync()} .
     *
     * @example samples/V1/LineageClient/list_lineage_events.php
     *
     * @param ListLineageEventsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function listLineageEvents(ListLineageEventsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLineageEvents', $request, $callOptions);
    }

    /**
     * List processes in the given project and location. List order is descending
     * by insertion time.
     *
     * The async variant is {@see LineageClient::listProcessesAsync()} .
     *
     * @example samples/V1/LineageClient/list_processes.php
     *
     * @param ListProcessesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function listProcesses(ListProcessesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListProcesses', $request, $callOptions);
    }

    /**
     * Lists runs in the given project and location. List order is descending by
     * `start_time`.
     *
     * The async variant is {@see LineageClient::listRunsAsync()} .
     *
     * @example samples/V1/LineageClient/list_runs.php
     *
     * @param ListRunsRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
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
    public function listRuns(ListRunsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListRuns', $request, $callOptions);
    }

    /**
     * Creates new lineage events together with their parents: process and run.
     * Updates the process and run if they already exist.
     * Mapped from Open Lineage specification:
     * https://github.com/OpenLineage/OpenLineage/blob/main/spec/OpenLineage.json.
     *
     * The async variant is {@see LineageClient::processOpenLineageRunEventAsync()} .
     *
     * @example samples/V1/LineageClient/process_open_lineage_run_event.php
     *
     * @param ProcessOpenLineageRunEventRequest $request     A request to house fields associated with the call.
     * @param array                             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ProcessOpenLineageRunEventResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function processOpenLineageRunEvent(
        ProcessOpenLineageRunEventRequest $request,
        array $callOptions = []
    ): ProcessOpenLineageRunEventResponse {
        return $this->startApiCall('ProcessOpenLineageRunEvent', $request, $callOptions)->wait();
    }

    /**
     * Retrieve a list of links connected to a specific asset.
     * Links represent the data flow between **source** (upstream)
     * and **target** (downstream) assets in transformation pipelines.
     * Links are stored in the same project as the Lineage Events that create
     * them.
     *
     * You can retrieve links in every project where you have the
     * `datalineage.events.get` permission. The project provided in the URL
     * is used for Billing and Quota.
     *
     * The async variant is {@see LineageClient::searchLinksAsync()} .
     *
     * @example samples/V1/LineageClient/search_links.php
     *
     * @param SearchLinksRequest $request     A request to house fields associated with the call.
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
    public function searchLinks(SearchLinksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('SearchLinks', $request, $callOptions);
    }

    /**
     * Updates a process.
     *
     * The async variant is {@see LineageClient::updateProcessAsync()} .
     *
     * @example samples/V1/LineageClient/update_process.php
     *
     * @param UpdateProcessRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Process
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateProcess(UpdateProcessRequest $request, array $callOptions = []): Process
    {
        return $this->startApiCall('UpdateProcess', $request, $callOptions)->wait();
    }

    /**
     * Updates a run.
     *
     * The async variant is {@see LineageClient::updateRunAsync()} .
     *
     * @example samples/V1/LineageClient/update_run.php
     *
     * @param UpdateRunRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Run
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateRun(UpdateRunRequest $request, array $callOptions = []): Run
    {
        return $this->startApiCall('UpdateRun', $request, $callOptions)->wait();
    }
}
