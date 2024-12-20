<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\Condition\SqlCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to schedule the query to run every so many minutes.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition.SqlCondition.Minutes</code>
 */
class Minutes extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Number of minutes between runs. The interval must be
     * greater than or equal to 5 minutes and less than or equal to 1440
     * minutes.
     *
     * Generated from protobuf field <code>int32 periodicity = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $periodicity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $periodicity
     *           Required. Number of minutes between runs. The interval must be
     *           greater than or equal to 5 minutes and less than or equal to 1440
     *           minutes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Number of minutes between runs. The interval must be
     * greater than or equal to 5 minutes and less than or equal to 1440
     * minutes.
     *
     * Generated from protobuf field <code>int32 periodicity = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Required. Number of minutes between runs. The interval must be
     * greater than or equal to 5 minutes and less than or equal to 1440
     * minutes.
     *
     * Generated from protobuf field <code>int32 periodicity = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setPeriodicity($var)
    {
        GPBUtil::checkInt32($var);
        $this->periodicity = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Minutes::class, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_SqlCondition_Minutes::class);

