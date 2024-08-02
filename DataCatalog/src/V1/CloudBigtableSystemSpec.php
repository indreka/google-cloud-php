<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification that applies to
 * all entries that are part of `CLOUD_BIGTABLE` system
 * (user_specified_type)
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CloudBigtableSystemSpec</code>
 */
class CloudBigtableSystemSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Display name of the Instance. This is user specified and different from
     * the resource name.
     *
     * Generated from protobuf field <code>string instance_display_name = 1;</code>
     */
    protected $instance_display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_display_name
     *           Display name of the Instance. This is user specified and different from
     *           the resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Display name of the Instance. This is user specified and different from
     * the resource name.
     *
     * Generated from protobuf field <code>string instance_display_name = 1;</code>
     * @return string
     */
    public function getInstanceDisplayName()
    {
        return $this->instance_display_name;
    }

    /**
     * Display name of the Instance. This is user specified and different from
     * the resource name.
     *
     * Generated from protobuf field <code>string instance_display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_display_name = $var;

        return $this;
    }

}

