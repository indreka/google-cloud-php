<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ApiHubResource is one of the resources such as Api, Operation, Deployment,
 * Definition, Spec and Version resources stored in API-Hub.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.ApiHubResource</code>
 */
class ApiHubResource extends \Google\Protobuf\Internal\Message
{
    protected $resource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiHub\V1\Api $api
     *           This represents Api resource in search results. Only name, display_name,
     *           description and owner fields are populated in search results.
     *     @type \Google\Cloud\ApiHub\V1\ApiOperation $operation
     *           This represents ApiOperation resource in search results. Only name,
     *           and description fields are populated in search results.
     *     @type \Google\Cloud\ApiHub\V1\Deployment $deployment
     *           This represents Deployment resource in search results. Only name,
     *           display_name and description fields are populated in search results.
     *     @type \Google\Cloud\ApiHub\V1\Spec $spec
     *           This represents Spec resource in search results. Only name,
     *           display_name and description fields are populated in search results.
     *     @type \Google\Cloud\ApiHub\V1\Definition $definition
     *           This represents Definition resource in search results.
     *           Only name field is populated in search results.
     *     @type \Google\Cloud\ApiHub\V1\Version $version
     *           This represents Version resource in search results. Only name,
     *           display_name and description fields are populated in search results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * This represents Api resource in search results. Only name, display_name,
     * description and owner fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Api api = 1;</code>
     * @return \Google\Cloud\ApiHub\V1\Api|null
     */
    public function getApi()
    {
        return $this->readOneof(1);
    }

    public function hasApi()
    {
        return $this->hasOneof(1);
    }

    /**
     * This represents Api resource in search results. Only name, display_name,
     * description and owner fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Api api = 1;</code>
     * @param \Google\Cloud\ApiHub\V1\Api $var
     * @return $this
     */
    public function setApi($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Api::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * This represents ApiOperation resource in search results. Only name,
     * and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.ApiOperation operation = 2;</code>
     * @return \Google\Cloud\ApiHub\V1\ApiOperation|null
     */
    public function getOperation()
    {
        return $this->readOneof(2);
    }

    public function hasOperation()
    {
        return $this->hasOneof(2);
    }

    /**
     * This represents ApiOperation resource in search results. Only name,
     * and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.ApiOperation operation = 2;</code>
     * @param \Google\Cloud\ApiHub\V1\ApiOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\ApiOperation::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * This represents Deployment resource in search results. Only name,
     * display_name and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 3;</code>
     * @return \Google\Cloud\ApiHub\V1\Deployment|null
     */
    public function getDeployment()
    {
        return $this->readOneof(3);
    }

    public function hasDeployment()
    {
        return $this->hasOneof(3);
    }

    /**
     * This represents Deployment resource in search results. Only name,
     * display_name and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 3;</code>
     * @param \Google\Cloud\ApiHub\V1\Deployment $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Deployment::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * This represents Spec resource in search results. Only name,
     * display_name and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Spec spec = 4;</code>
     * @return \Google\Cloud\ApiHub\V1\Spec|null
     */
    public function getSpec()
    {
        return $this->readOneof(4);
    }

    public function hasSpec()
    {
        return $this->hasOneof(4);
    }

    /**
     * This represents Spec resource in search results. Only name,
     * display_name and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Spec spec = 4;</code>
     * @param \Google\Cloud\ApiHub\V1\Spec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Spec::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * This represents Definition resource in search results.
     * Only name field is populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Definition definition = 5;</code>
     * @return \Google\Cloud\ApiHub\V1\Definition|null
     */
    public function getDefinition()
    {
        return $this->readOneof(5);
    }

    public function hasDefinition()
    {
        return $this->hasOneof(5);
    }

    /**
     * This represents Definition resource in search results.
     * Only name field is populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Definition definition = 5;</code>
     * @param \Google\Cloud\ApiHub\V1\Definition $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Definition::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * This represents Version resource in search results. Only name,
     * display_name and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Version version = 6;</code>
     * @return \Google\Cloud\ApiHub\V1\Version|null
     */
    public function getVersion()
    {
        return $this->readOneof(6);
    }

    public function hasVersion()
    {
        return $this->hasOneof(6);
    }

    /**
     * This represents Version resource in search results. Only name,
     * display_name and description fields are populated in search results.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Version version = 6;</code>
     * @param \Google\Cloud\ApiHub\V1\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Version::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->whichOneof("resource");
    }

}

