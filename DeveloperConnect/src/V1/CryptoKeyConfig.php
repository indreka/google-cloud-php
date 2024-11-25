<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The crypto key configuration. This field is used by the Customer-managed
 * encryption keys (CMEK) feature.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.CryptoKeyConfig</code>
 */
class CryptoKeyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the key which is used to encrypt/decrypt customer
     * data. For key in Cloud KMS, the key should be in the format of
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string key_reference = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $key_reference = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_reference
     *           Required. The name of the key which is used to encrypt/decrypt customer
     *           data. For key in Cloud KMS, the key should be in the format of
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the key which is used to encrypt/decrypt customer
     * data. For key in Cloud KMS, the key should be in the format of
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string key_reference = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKeyReference()
    {
        return $this->key_reference;
    }

    /**
     * Required. The name of the key which is used to encrypt/decrypt customer
     * data. For key in Cloud KMS, the key should be in the format of
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string key_reference = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeyReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_reference = $var;

        return $this;
    }

}

