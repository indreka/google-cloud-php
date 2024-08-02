<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vpcaccess/v1/vpc_access.proto

namespace Google\Cloud\VpcAccess\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for listing Serverless VPC Access connectors in a location.
 *
 * Generated from protobuf message <code>google.cloud.vpcaccess.v1.ListConnectorsRequest</code>
 */
class ListConnectorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location from which the routes should be listed.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of functions to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Continuation token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The project and location from which the routes should be listed. Please see
     *                       {@see VpcAccessServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\VpcAccess\V1\ListConnectorsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and location from which the routes should be listed.
     *     @type int $page_size
     *           Maximum number of functions to return per call.
     *     @type string $page_token
     *           Continuation token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vpcaccess\V1\VpcAccess::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location from which the routes should be listed.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location from which the routes should be listed.
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
     * Maximum number of functions to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of functions to return per call.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * Continuation token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Continuation token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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

