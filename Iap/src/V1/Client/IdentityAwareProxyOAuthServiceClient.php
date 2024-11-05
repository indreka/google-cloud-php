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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/iap/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Iap\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iap\V1\Brand;
use Google\Cloud\Iap\V1\CreateBrandRequest;
use Google\Cloud\Iap\V1\CreateIdentityAwareProxyClientRequest;
use Google\Cloud\Iap\V1\DeleteIdentityAwareProxyClientRequest;
use Google\Cloud\Iap\V1\GetBrandRequest;
use Google\Cloud\Iap\V1\GetIdentityAwareProxyClientRequest;
use Google\Cloud\Iap\V1\IdentityAwareProxyClient;
use Google\Cloud\Iap\V1\ListBrandsRequest;
use Google\Cloud\Iap\V1\ListBrandsResponse;
use Google\Cloud\Iap\V1\ListIdentityAwareProxyClientsRequest;
use Google\Cloud\Iap\V1\ResetIdentityAwareProxyClientSecretRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: API to programmatically create, list and retrieve Identity Aware Proxy (IAP)
 * OAuth brands; and create, retrieve, delete and reset-secret of IAP OAuth
 * clients.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface<Brand> createBrandAsync(CreateBrandRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<IdentityAwareProxyClient> createIdentityAwareProxyClientAsync(CreateIdentityAwareProxyClientRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteIdentityAwareProxyClientAsync(DeleteIdentityAwareProxyClientRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Brand> getBrandAsync(GetBrandRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<IdentityAwareProxyClient> getIdentityAwareProxyClientAsync(GetIdentityAwareProxyClientRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ListBrandsResponse> listBrandsAsync(ListBrandsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listIdentityAwareProxyClientsAsync(ListIdentityAwareProxyClientsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<IdentityAwareProxyClient> resetIdentityAwareProxyClientSecretAsync(ResetIdentityAwareProxyClientSecretRequest $request, array $optionalArgs = [])
 */
final class IdentityAwareProxyOAuthServiceClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.iap.v1.IdentityAwareProxyOAuthService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'iap.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'iap.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/identity_aware_proxy_o_auth_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ . '/../resources/identity_aware_proxy_o_auth_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/identity_aware_proxy_o_auth_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/identity_aware_proxy_o_auth_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'iap.googleapis.com:443'.
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
     * Constructs a new OAuth brand for the project if one does not exist.
     * The created brand is "internal only", meaning that OAuth clients created
     * under it only accept requests from users who belong to the same Google
     * Workspace organization as the project. The brand is created in an
     * un-reviewed status. NOTE: The "internal only" status can be manually
     * changed in the Google Cloud Console. Requires that a brand does not already
     * exist for the project, and that the specified support email is owned by the
     * caller.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::createBrandAsync()} .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/create_brand.php
     *
     * @param CreateBrandRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Brand
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createBrand(CreateBrandRequest $request, array $callOptions = []): Brand
    {
        return $this->startApiCall('CreateBrand', $request, $callOptions)->wait();
    }

    /**
     * Creates an Identity Aware Proxy (IAP) OAuth client. The client is owned
     * by IAP. Requires that the brand for the project exists and that it is
     * set for internal-only use.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::createIdentityAwareProxyClientAsync()}
     * .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/create_identity_aware_proxy_client.php
     *
     * @param CreateIdentityAwareProxyClientRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return IdentityAwareProxyClient
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createIdentityAwareProxyClient(
        CreateIdentityAwareProxyClientRequest $request,
        array $callOptions = []
    ): IdentityAwareProxyClient {
        return $this->startApiCall('CreateIdentityAwareProxyClient', $request, $callOptions)->wait();
    }

    /**
     * Deletes an Identity Aware Proxy (IAP) OAuth client. Useful for removing
     * obsolete clients, managing the number of clients in a given project, and
     * cleaning up after tests. Requires that the client is owned by IAP.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::deleteIdentityAwareProxyClientAsync()}
     * .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/delete_identity_aware_proxy_client.php
     *
     * @param DeleteIdentityAwareProxyClientRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
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
    public function deleteIdentityAwareProxyClient(
        DeleteIdentityAwareProxyClientRequest $request,
        array $callOptions = []
    ): void {
        $this->startApiCall('DeleteIdentityAwareProxyClient', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the OAuth brand of the project.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::getBrandAsync()} .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/get_brand.php
     *
     * @param GetBrandRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Brand
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getBrand(GetBrandRequest $request, array $callOptions = []): Brand
    {
        return $this->startApiCall('GetBrand', $request, $callOptions)->wait();
    }

    /**
     * Retrieves an Identity Aware Proxy (IAP) OAuth client.
     * Requires that the client is owned by IAP.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::getIdentityAwareProxyClientAsync()}
     * .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/get_identity_aware_proxy_client.php
     *
     * @param GetIdentityAwareProxyClientRequest $request     A request to house fields associated with the call.
     * @param array                              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return IdentityAwareProxyClient
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIdentityAwareProxyClient(
        GetIdentityAwareProxyClientRequest $request,
        array $callOptions = []
    ): IdentityAwareProxyClient {
        return $this->startApiCall('GetIdentityAwareProxyClient', $request, $callOptions)->wait();
    }

    /**
     * Lists the existing brands for the project.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::listBrandsAsync()} .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/list_brands.php
     *
     * @param ListBrandsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListBrandsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listBrands(ListBrandsRequest $request, array $callOptions = []): ListBrandsResponse
    {
        return $this->startApiCall('ListBrands', $request, $callOptions)->wait();
    }

    /**
     * Lists the existing clients for the brand.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::listIdentityAwareProxyClientsAsync()}
     * .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/list_identity_aware_proxy_clients.php
     *
     * @param ListIdentityAwareProxyClientsRequest $request     A request to house fields associated with the call.
     * @param array                                $callOptions {
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
    public function listIdentityAwareProxyClients(
        ListIdentityAwareProxyClientsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListIdentityAwareProxyClients', $request, $callOptions);
    }

    /**
     * Resets an Identity Aware Proxy (IAP) OAuth client secret. Useful if the
     * secret was compromised. Requires that the client is owned by IAP.
     *
     * The async variant is
     * {@see IdentityAwareProxyOAuthServiceClient::resetIdentityAwareProxyClientSecretAsync()}
     * .
     *
     * @example samples/V1/IdentityAwareProxyOAuthServiceClient/reset_identity_aware_proxy_client_secret.php
     *
     * @param ResetIdentityAwareProxyClientSecretRequest $request     A request to house fields associated with the call.
     * @param array                                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return IdentityAwareProxyClient
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function resetIdentityAwareProxyClientSecret(
        ResetIdentityAwareProxyClientSecretRequest $request,
        array $callOptions = []
    ): IdentityAwareProxyClient {
        return $this->startApiCall('ResetIdentityAwareProxyClientSecret', $request, $callOptions)->wait();
    }
}
