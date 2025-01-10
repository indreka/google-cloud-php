<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between a GA4 Property and BigQuery project.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BigQueryLink</code>
 */
class BigQueryLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this BigQuery link.
     * Format: 'properties/{property_id}/bigQueryLinks/{bigquery_link_id}'
     * Format: 'properties/1234/bigQueryLinks/abc567'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. The linked Google Cloud project. When creating a BigQueryLink,
     * you may provide this resource name using either a project number or project
     * ID. Once this resource has been created, the returned project will always
     * have a project that contains a project number.
     * Format: 'projects/{project number}'
     * Example: 'projects/1234'
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $project = '';
    /**
     * Output only. Time when the link was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * If set true, enables daily data export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool daily_export_enabled = 4;</code>
     */
    protected $daily_export_enabled = false;
    /**
     * If set true, enables streaming export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool streaming_export_enabled = 5;</code>
     */
    protected $streaming_export_enabled = false;
    /**
     * If set true, enables fresh daily export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool fresh_daily_export_enabled = 9;</code>
     */
    protected $fresh_daily_export_enabled = false;
    /**
     * If set true, exported data will include advertising identifiers for mobile
     * app streams.
     *
     * Generated from protobuf field <code>bool include_advertising_id = 6;</code>
     */
    protected $include_advertising_id = false;
    /**
     * The list of streams under the parent property for which data will be
     * exported.
     * Format: properties/{property_id}/dataStreams/{stream_id}
     * Example: ['properties/1000/dataStreams/2000']
     *
     * Generated from protobuf field <code>repeated string export_streams = 7;</code>
     */
    private $export_streams;
    /**
     * The list of event names that will be excluded from exports.
     *
     * Generated from protobuf field <code>repeated string excluded_events = 8;</code>
     */
    private $excluded_events;
    /**
     * Required. Immutable. The geographic location where the created BigQuery
     * dataset should reside. See https://cloud.google.com/bigquery/docs/locations
     * for supported locations.
     *
     * Generated from protobuf field <code>string dataset_location = 10 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset_location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this BigQuery link.
     *           Format: 'properties/{property_id}/bigQueryLinks/{bigquery_link_id}'
     *           Format: 'properties/1234/bigQueryLinks/abc567'
     *     @type string $project
     *           Immutable. The linked Google Cloud project. When creating a BigQueryLink,
     *           you may provide this resource name using either a project number or project
     *           ID. Once this resource has been created, the returned project will always
     *           have a project that contains a project number.
     *           Format: 'projects/{project number}'
     *           Example: 'projects/1234'
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the link was created.
     *     @type bool $daily_export_enabled
     *           If set true, enables daily data export to the linked Google Cloud project.
     *     @type bool $streaming_export_enabled
     *           If set true, enables streaming export to the linked Google Cloud project.
     *     @type bool $fresh_daily_export_enabled
     *           If set true, enables fresh daily export to the linked Google Cloud project.
     *     @type bool $include_advertising_id
     *           If set true, exported data will include advertising identifiers for mobile
     *           app streams.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $export_streams
     *           The list of streams under the parent property for which data will be
     *           exported.
     *           Format: properties/{property_id}/dataStreams/{stream_id}
     *           Example: ['properties/1000/dataStreams/2000']
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $excluded_events
     *           The list of event names that will be excluded from exports.
     *     @type string $dataset_location
     *           Required. Immutable. The geographic location where the created BigQuery
     *           dataset should reside. See https://cloud.google.com/bigquery/docs/locations
     *           for supported locations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this BigQuery link.
     * Format: 'properties/{property_id}/bigQueryLinks/{bigquery_link_id}'
     * Format: 'properties/1234/bigQueryLinks/abc567'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this BigQuery link.
     * Format: 'properties/{property_id}/bigQueryLinks/{bigquery_link_id}'
     * Format: 'properties/1234/bigQueryLinks/abc567'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. The linked Google Cloud project. When creating a BigQueryLink,
     * you may provide this resource name using either a project number or project
     * ID. Once this resource has been created, the returned project will always
     * have a project that contains a project number.
     * Format: 'projects/{project number}'
     * Example: 'projects/1234'
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Immutable. The linked Google Cloud project. When creating a BigQueryLink,
     * you may provide this resource name using either a project number or project
     * ID. Once this resource has been created, the returned project will always
     * have a project that contains a project number.
     * Format: 'projects/{project number}'
     * Example: 'projects/1234'
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Output only. Time when the link was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the link was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * If set true, enables daily data export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool daily_export_enabled = 4;</code>
     * @return bool
     */
    public function getDailyExportEnabled()
    {
        return $this->daily_export_enabled;
    }

    /**
     * If set true, enables daily data export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool daily_export_enabled = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDailyExportEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->daily_export_enabled = $var;

        return $this;
    }

    /**
     * If set true, enables streaming export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool streaming_export_enabled = 5;</code>
     * @return bool
     */
    public function getStreamingExportEnabled()
    {
        return $this->streaming_export_enabled;
    }

    /**
     * If set true, enables streaming export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool streaming_export_enabled = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setStreamingExportEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->streaming_export_enabled = $var;

        return $this;
    }

    /**
     * If set true, enables fresh daily export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool fresh_daily_export_enabled = 9;</code>
     * @return bool
     */
    public function getFreshDailyExportEnabled()
    {
        return $this->fresh_daily_export_enabled;
    }

    /**
     * If set true, enables fresh daily export to the linked Google Cloud project.
     *
     * Generated from protobuf field <code>bool fresh_daily_export_enabled = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setFreshDailyExportEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->fresh_daily_export_enabled = $var;

        return $this;
    }

    /**
     * If set true, exported data will include advertising identifiers for mobile
     * app streams.
     *
     * Generated from protobuf field <code>bool include_advertising_id = 6;</code>
     * @return bool
     */
    public function getIncludeAdvertisingId()
    {
        return $this->include_advertising_id;
    }

    /**
     * If set true, exported data will include advertising identifiers for mobile
     * app streams.
     *
     * Generated from protobuf field <code>bool include_advertising_id = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAdvertisingId($var)
    {
        GPBUtil::checkBool($var);
        $this->include_advertising_id = $var;

        return $this;
    }

    /**
     * The list of streams under the parent property for which data will be
     * exported.
     * Format: properties/{property_id}/dataStreams/{stream_id}
     * Example: ['properties/1000/dataStreams/2000']
     *
     * Generated from protobuf field <code>repeated string export_streams = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExportStreams()
    {
        return $this->export_streams;
    }

    /**
     * The list of streams under the parent property for which data will be
     * exported.
     * Format: properties/{property_id}/dataStreams/{stream_id}
     * Example: ['properties/1000/dataStreams/2000']
     *
     * Generated from protobuf field <code>repeated string export_streams = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExportStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->export_streams = $arr;

        return $this;
    }

    /**
     * The list of event names that will be excluded from exports.
     *
     * Generated from protobuf field <code>repeated string excluded_events = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludedEvents()
    {
        return $this->excluded_events;
    }

    /**
     * The list of event names that will be excluded from exports.
     *
     * Generated from protobuf field <code>repeated string excluded_events = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludedEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excluded_events = $arr;

        return $this;
    }

    /**
     * Required. Immutable. The geographic location where the created BigQuery
     * dataset should reside. See https://cloud.google.com/bigquery/docs/locations
     * for supported locations.
     *
     * Generated from protobuf field <code>string dataset_location = 10 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatasetLocation()
    {
        return $this->dataset_location;
    }

    /**
     * Required. Immutable. The geographic location where the created BigQuery
     * dataset should reside. See https://cloud.google.com/bigquery/docs/locations
     * for supported locations.
     *
     * Generated from protobuf field <code>string dataset_location = 10 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_location = $var;

        return $this;
    }

}

