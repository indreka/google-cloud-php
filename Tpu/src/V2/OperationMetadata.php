<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata describing an [Operation][google.longrunning.Operation]
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    protected $create_time = null;
    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * Target of the operation - for example
     * projects/project-1/connectivityTests/test-1
     *
     * Generated from protobuf field <code>string target = 3;</code>
     */
    protected $target = '';
    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     */
    protected $verb = '';
    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     */
    protected $status_detail = '';
    /**
     * Specifies if cancellation was requested for the operation.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     */
    protected $cancel_requested = false;
    /**
     * API version.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     */
    protected $api_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the operation finished running.
     *     @type string $target
     *           Target of the operation - for example
     *           projects/project-1/connectivityTests/test-1
     *     @type string $verb
     *           Name of the verb executed by the operation.
     *     @type string $status_detail
     *           Human-readable status of the operation, if any.
     *     @type bool $cancel_requested
     *           Specifies if cancellation was requested for the operation.
     *     @type string $api_version
     *           API version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Target of the operation - for example
     * projects/project-1/connectivityTests/test-1
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Target of the operation - for example
     * projects/project-1/connectivityTests/test-1
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkString($var, True);
        $this->verb = $var;

        return $this;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_detail = $var;

        return $this;
    }

    /**
     * Specifies if cancellation was requested for the operation.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     * @return bool
     */
    public function getCancelRequested()
    {
        return $this->cancel_requested;
    }

    /**
     * Specifies if cancellation was requested for the operation.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCancelRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->cancel_requested = $var;

        return $this;
    }

    /**
     * API version.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * API version.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

}

