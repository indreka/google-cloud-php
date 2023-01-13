<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/snooze_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The message definition for listing `Snooze`s associated with the given
 * `parent`, satisfying the optional `filter`.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListSnoozesRequest</code>
 */
class ListSnoozesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     * `Snooze`s should be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Optional filter to restrict results to the given criteria. The
     * following fields are supported.
     *   * `interval.start_time`
     *   * `interval.end_time`
     * For example:
     *     ```
     *     interval.start_time > "2022-03-11T00:00:00-08:00" AND
     *         interval.end_time < "2022-03-12T00:00:00-08:00"
     *     ```
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. The maximum number of results to return for a single query. The
     * server may further constrain the maximum number of results returned in a
     * single page. The value should be in the range [1, 1000]. If the value given
     * is outside this range, the server will decide the number of results to be
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The `next_page_token` from a previous call to
     * `ListSnoozesRequest` to get the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The
     *           [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     *           `Snooze`s should be listed. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *     @type string $filter
     *           Optional. Optional filter to restrict results to the given criteria. The
     *           following fields are supported.
     *             * `interval.start_time`
     *             * `interval.end_time`
     *           For example:
     *               ```
     *               interval.start_time > "2022-03-11T00:00:00-08:00" AND
     *                   interval.end_time < "2022-03-12T00:00:00-08:00"
     *               ```
     *     @type int $page_size
     *           Optional. The maximum number of results to return for a single query. The
     *           server may further constrain the maximum number of results returned in a
     *           single page. The value should be in the range [1, 1000]. If the value given
     *           is outside this range, the server will decide the number of results to be
     *           returned.
     *     @type string $page_token
     *           Optional. The `next_page_token` from a previous call to
     *           `ListSnoozesRequest` to get the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\SnoozeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     * `Snooze`s should be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The
     * [project](https://cloud.google.com/monitoring/api/v3#project_name) whose
     * `Snooze`s should be listed. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
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
     * Optional. Optional filter to restrict results to the given criteria. The
     * following fields are supported.
     *   * `interval.start_time`
     *   * `interval.end_time`
     * For example:
     *     ```
     *     interval.start_time > "2022-03-11T00:00:00-08:00" AND
     *         interval.end_time < "2022-03-12T00:00:00-08:00"
     *     ```
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Optional filter to restrict results to the given criteria. The
     * following fields are supported.
     *   * `interval.start_time`
     *   * `interval.end_time`
     * For example:
     *     ```
     *     interval.start_time > "2022-03-11T00:00:00-08:00" AND
     *         interval.end_time < "2022-03-12T00:00:00-08:00"
     *     ```
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return for a single query. The
     * server may further constrain the maximum number of results returned in a
     * single page. The value should be in the range [1, 1000]. If the value given
     * is outside this range, the server will decide the number of results to be
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return for a single query. The
     * server may further constrain the maximum number of results returned in a
     * single page. The value should be in the range [1, 1000]. If the value given
     * is outside this range, the server will decide the number of results to be
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The `next_page_token` from a previous call to
     * `ListSnoozesRequest` to get the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The `next_page_token` from a previous call to
     * `ListSnoozesRequest` to get the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

