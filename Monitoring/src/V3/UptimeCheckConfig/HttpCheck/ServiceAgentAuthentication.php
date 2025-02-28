<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information needed for generating either an
 * [OpenID Connect
 * token](https://developers.google.com/identity/protocols/OpenIDConnect) or
 * [OAuth token](https://developers.google.com/identity/protocols/oauth2).
 * The token will be generated for the Monitoring service agent service
 * account.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UptimeCheckConfig.HttpCheck.ServiceAgentAuthentication</code>
 */
class ServiceAgentAuthentication extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of authentication.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.ServiceAgentAuthentication.ServiceAgentAuthenticationType type = 1;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of authentication.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of authentication.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.ServiceAgentAuthentication.ServiceAgentAuthenticationType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of authentication.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.ServiceAgentAuthentication.ServiceAgentAuthenticationType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck\ServiceAgentAuthentication\ServiceAgentAuthenticationType::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceAgentAuthentication::class, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_HttpCheck_ServiceAgentAuthentication::class);

