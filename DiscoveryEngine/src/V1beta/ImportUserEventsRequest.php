<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the ImportUserEvents request.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.ImportUserEventsRequest</code>
 */
class ImportUserEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent DataStore resource name, of the form
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The desired location of errors incurred during the Import. Cannot be set
     * for inline user event imports.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.ImportErrorConfig error_config = 5;</code>
     */
    protected $error_config = null;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\ImportUserEventsRequest\InlineSource $inline_source
     *           Required. The Inline source for the input content for UserEvents.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\GcsSource $gcs_source
     *           Required. Cloud Storage location for the input content.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\BigQuerySource $bigquery_source
     *           Required. BigQuery input source.
     *     @type string $parent
     *           Required. Parent DataStore resource name, of the form
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\ImportErrorConfig $error_config
     *           The desired location of errors incurred during the Import. Cannot be set
     *           for inline user event imports.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Inline source for the input content for UserEvents.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.ImportUserEventsRequest.InlineSource inline_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\ImportUserEventsRequest\InlineSource|null
     */
    public function getInlineSource()
    {
        return $this->readOneof(2);
    }

    public function hasInlineSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Required. The Inline source for the input content for UserEvents.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.ImportUserEventsRequest.InlineSource inline_source = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\ImportUserEventsRequest\InlineSource $var
     * @return $this
     */
    public function setInlineSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\ImportUserEventsRequest\InlineSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Required. Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.GcsSource gcs_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(3);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * Required. Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.GcsSource gcs_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\GcsSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. BigQuery input source.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.BigQuerySource bigquery_source = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\BigQuerySource|null
     */
    public function getBigquerySource()
    {
        return $this->readOneof(4);
    }

    public function hasBigquerySource()
    {
        return $this->hasOneof(4);
    }

    /**
     * Required. BigQuery input source.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.BigQuerySource bigquery_source = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\BigQuerySource $var
     * @return $this
     */
    public function setBigquerySource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\BigQuerySource::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required. Parent DataStore resource name, of the form
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent DataStore resource name, of the form
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The desired location of errors incurred during the Import. Cannot be set
     * for inline user event imports.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.ImportErrorConfig error_config = 5;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\ImportErrorConfig|null
     */
    public function getErrorConfig()
    {
        return $this->error_config;
    }

    public function hasErrorConfig()
    {
        return isset($this->error_config);
    }

    public function clearErrorConfig()
    {
        unset($this->error_config);
    }

    /**
     * The desired location of errors incurred during the Import. Cannot be set
     * for inline user event imports.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.ImportErrorConfig error_config = 5;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\ImportErrorConfig $var
     * @return $this
     */
    public function setErrorConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\ImportErrorConfig::class);
        $this->error_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}
