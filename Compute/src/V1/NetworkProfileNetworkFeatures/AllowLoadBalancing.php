<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * Specifies whether cloud load balancing is allowed.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.AllowLoadBalancing</code>
 */
class AllowLoadBalancing
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ALLOW_LOAD_BALANCING = 0;</code>
     */
    const UNDEFINED_ALLOW_LOAD_BALANCING = 0;
    /**
     * Generated from protobuf enum <code>LOAD_BALANCING_ALLOWED = 28407977;</code>
     */
    const LOAD_BALANCING_ALLOWED = 28407977;
    /**
     * Generated from protobuf enum <code>LOAD_BALANCING_BLOCKED = 381442285;</code>
     */
    const LOAD_BALANCING_BLOCKED = 381442285;

    private static $valueToName = [
        self::UNDEFINED_ALLOW_LOAD_BALANCING => 'UNDEFINED_ALLOW_LOAD_BALANCING',
        self::LOAD_BALANCING_ALLOWED => 'LOAD_BALANCING_ALLOWED',
        self::LOAD_BALANCING_BLOCKED => 'LOAD_BALANCING_BLOCKED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


