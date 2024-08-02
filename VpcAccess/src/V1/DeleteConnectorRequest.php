<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vpcaccess/v1/vpc_access.proto

namespace Google\Cloud\VpcAccess\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for deleting a Serverless VPC Access connector.
 *
 * Generated from protobuf message <code>google.cloud.vpcaccess.v1.DeleteConnectorRequest</code>
 */
class DeleteConnectorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of a Serverless VPC Access connector to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of a Serverless VPC Access connector to delete. Please see
     *                     {@see VpcAccessServiceClient::connectorName()} for help formatting this field.
     *
     * @return \Google\Cloud\VpcAccess\V1\DeleteConnectorRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of a Serverless VPC Access connector to delete.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vpcaccess\V1\VpcAccess::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of a Serverless VPC Access connector to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of a Serverless VPC Access connector to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

