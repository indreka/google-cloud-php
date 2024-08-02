<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Package's parent is a schema.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.PackageEntity</code>
 */
class PackageEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * The SQL code which creates the package.
     *
     * Generated from protobuf field <code>string package_sql_code = 1;</code>
     */
    protected $package_sql_code = '';
    /**
     * The SQL code which creates the package body. If the package specification
     * has cursors or subprograms, then the package body is mandatory.
     *
     * Generated from protobuf field <code>string package_body = 2;</code>
     */
    protected $package_body = '';
    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 3;</code>
     */
    protected $custom_features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $package_sql_code
     *           The SQL code which creates the package.
     *     @type string $package_body
     *           The SQL code which creates the package body. If the package specification
     *           has cursors or subprograms, then the package body is mandatory.
     *     @type \Google\Protobuf\Struct $custom_features
     *           Custom engine specific features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The SQL code which creates the package.
     *
     * Generated from protobuf field <code>string package_sql_code = 1;</code>
     * @return string
     */
    public function getPackageSqlCode()
    {
        return $this->package_sql_code;
    }

    /**
     * The SQL code which creates the package.
     *
     * Generated from protobuf field <code>string package_sql_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPackageSqlCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_sql_code = $var;

        return $this;
    }

    /**
     * The SQL code which creates the package body. If the package specification
     * has cursors or subprograms, then the package body is mandatory.
     *
     * Generated from protobuf field <code>string package_body = 2;</code>
     * @return string
     */
    public function getPackageBody()
    {
        return $this->package_body;
    }

    /**
     * The SQL code which creates the package body. If the package specification
     * has cursors or subprograms, then the package body is mandatory.
     *
     * Generated from protobuf field <code>string package_body = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPackageBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_body = $var;

        return $this;
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 3;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getCustomFeatures()
    {
        return $this->custom_features;
    }

    public function hasCustomFeatures()
    {
        return isset($this->custom_features);
    }

    public function clearCustomFeatures()
    {
        unset($this->custom_features);
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCustomFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->custom_features = $var;

        return $this;
    }

}

