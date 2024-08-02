<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanagerserialization.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ExportTaxonomies][google.cloud.datacatalog.v1.PolicyTagManagerSerialization.ExportTaxonomies].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ExportTaxonomiesRequest</code>
 */
class ExportTaxonomiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the project that the exported taxonomies belong
     * to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Resource names of the taxonomies to export.
     *
     * Generated from protobuf field <code>repeated string taxonomies = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $taxonomies;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the project that the exported taxonomies belong
     *           to.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $taxonomies
     *           Required. Resource names of the taxonomies to export.
     *     @type bool $serialized_taxonomies
     *           Serialized export taxonomies that contain all the policy
     *           tags as nested protocol buffers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanagerserialization::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the project that the exported taxonomies belong
     * to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the project that the exported taxonomies belong
     * to.
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
     * Required. Resource names of the taxonomies to export.
     *
     * Generated from protobuf field <code>repeated string taxonomies = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaxonomies()
    {
        return $this->taxonomies;
    }

    /**
     * Required. Resource names of the taxonomies to export.
     *
     * Generated from protobuf field <code>repeated string taxonomies = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaxonomies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->taxonomies = $arr;

        return $this;
    }

    /**
     * Serialized export taxonomies that contain all the policy
     * tags as nested protocol buffers.
     *
     * Generated from protobuf field <code>bool serialized_taxonomies = 3;</code>
     * @return bool
     */
    public function getSerializedTaxonomies()
    {
        return $this->readOneof(3);
    }

    public function hasSerializedTaxonomies()
    {
        return $this->hasOneof(3);
    }

    /**
     * Serialized export taxonomies that contain all the policy
     * tags as nested protocol buffers.
     *
     * Generated from protobuf field <code>bool serialized_taxonomies = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSerializedTaxonomies($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

