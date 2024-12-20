<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy\Condition\SqlCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A test that uses an alerting result in a boolean column produced by
 * the SQL query.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition.SqlCondition.BooleanTest</code>
 */
class BooleanTest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the column containing the boolean value. If the
     * value in a row is NULL, that row is ignored.
     *
     * Generated from protobuf field <code>string column = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $column = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column
     *           Required. The name of the column containing the boolean value. If the
     *           value in a row is NULL, that row is ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the column containing the boolean value. If the
     * value in a row is NULL, that row is ignored.
     *
     * Generated from protobuf field <code>string column = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Required. The name of the column containing the boolean value. If the
     * value in a row is NULL, that row is ignored.
     *
     * Generated from protobuf field <code>string column = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->column = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BooleanTest::class, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_SqlCondition_BooleanTest::class);

