<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/nfs_share.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An NFS share.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.NfsShare</code>
 */
class NfsShare extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the NFS share.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. An identifier for the NFS share, generated by the backend.
     *
     * Generated from protobuf field <code>string nfs_share_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $nfs_share_id = '';
    /**
     * The state of the NFS share.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.NfsShare.State state = 3;</code>
     */
    private $state = 0;
    /**
     * The volume containing the share.
     *
     * Generated from protobuf field <code>string volume = 4 [(.google.api.resource_reference) = {</code>
     */
    private $volume = '';
    /**
     * List of allowed access points.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.NfsShare.AllowedClient allowed_clients = 5;</code>
     */
    private $allowed_clients;
    /**
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the NFS share.
     *     @type string $nfs_share_id
     *           Output only. An identifier for the NFS share, generated by the backend.
     *     @type int $state
     *           The state of the NFS share.
     *     @type string $volume
     *           The volume containing the share.
     *     @type \Google\Cloud\BareMetalSolution\V2\NfsShare\AllowedClient[]|\Google\Protobuf\Internal\RepeatedField $allowed_clients
     *           List of allowed access points.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels as key value pairs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\NfsShare::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the NFS share.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the NFS share.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. An identifier for the NFS share, generated by the backend.
     *
     * Generated from protobuf field <code>string nfs_share_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNfsShareId()
    {
        return $this->nfs_share_id;
    }

    /**
     * Output only. An identifier for the NFS share, generated by the backend.
     *
     * Generated from protobuf field <code>string nfs_share_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNfsShareId($var)
    {
        GPBUtil::checkString($var, True);
        $this->nfs_share_id = $var;

        return $this;
    }

    /**
     * The state of the NFS share.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.NfsShare.State state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the NFS share.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.NfsShare.State state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BareMetalSolution\V2\NfsShare\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The volume containing the share.
     *
     * Generated from protobuf field <code>string volume = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * The volume containing the share.
     *
     * Generated from protobuf field <code>string volume = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume = $var;

        return $this;
    }

    /**
     * List of allowed access points.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.NfsShare.AllowedClient allowed_clients = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedClients()
    {
        return $this->allowed_clients;
    }

    /**
     * List of allowed access points.
     *
     * Generated from protobuf field <code>repeated .google.cloud.baremetalsolution.v2.NfsShare.AllowedClient allowed_clients = 5;</code>
     * @param \Google\Cloud\BareMetalSolution\V2\NfsShare\AllowedClient[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedClients($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BareMetalSolution\V2\NfsShare\AllowedClient::class);
        $this->allowed_clients = $arr;

        return $this;
    }

    /**
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}
