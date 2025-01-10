<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for
 * [ListRuntimeVersions][google.cloud.tpu.v2.Tpu.ListRuntimeVersions].
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.ListRuntimeVersionsResponse</code>
 */
class ListRuntimeVersionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The listed nodes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v2.RuntimeVersion runtime_versions = 1;</code>
     */
    private $runtime_versions;
    /**
     * The next page token or empty if none.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Tpu\V2\RuntimeVersion>|\Google\Protobuf\Internal\RepeatedField $runtime_versions
     *           The listed nodes.
     *     @type string $next_page_token
     *           The next page token or empty if none.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * The listed nodes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v2.RuntimeVersion runtime_versions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuntimeVersions()
    {
        return $this->runtime_versions;
    }

    /**
     * The listed nodes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v2.RuntimeVersion runtime_versions = 1;</code>
     * @param array<\Google\Cloud\Tpu\V2\RuntimeVersion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuntimeVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tpu\V2\RuntimeVersion::class);
        $this->runtime_versions = $arr;

        return $this;
    }

    /**
     * The next page token or empty if none.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The next page token or empty if none.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

