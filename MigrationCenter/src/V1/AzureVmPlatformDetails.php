<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Azure VM specific details.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.AzureVmPlatformDetails</code>
 */
class AzureVmPlatformDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Azure platform's machine type label.
     *
     * Generated from protobuf field <code>string machine_type_label = 1;</code>
     */
    protected $machine_type_label = '';
    /**
     * The location of the machine in the Azure format.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     */
    protected $location = '';
    /**
     * Azure platform's provisioning state.
     *
     * Generated from protobuf field <code>string provisioning_state = 3;</code>
     */
    protected $provisioning_state = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_type_label
     *           Azure platform's machine type label.
     *     @type string $location
     *           The location of the machine in the Azure format.
     *     @type string $provisioning_state
     *           Azure platform's provisioning state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Azure platform's machine type label.
     *
     * Generated from protobuf field <code>string machine_type_label = 1;</code>
     * @return string
     */
    public function getMachineTypeLabel()
    {
        return $this->machine_type_label;
    }

    /**
     * Azure platform's machine type label.
     *
     * Generated from protobuf field <code>string machine_type_label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineTypeLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type_label = $var;

        return $this;
    }

    /**
     * The location of the machine in the Azure format.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the machine in the Azure format.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Azure platform's provisioning state.
     *
     * Generated from protobuf field <code>string provisioning_state = 3;</code>
     * @return string
     */
    public function getProvisioningState()
    {
        return $this->provisioning_state;
    }

    /**
     * Azure platform's provisioning state.
     *
     * Generated from protobuf field <code>string provisioning_state = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProvisioningState($var)
    {
        GPBUtil::checkString($var, True);
        $this->provisioning_state = $var;

        return $this;
    }

}
