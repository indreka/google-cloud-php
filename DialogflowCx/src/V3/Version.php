<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/version.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a version of a flow.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Version</code>
 */
class Version extends \Google\Protobuf\Internal\Message
{
    /**
     * Format:
     * projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>.
     * Version ID is a self-increasing number generated by Dialogflow upon version
     * creation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The human-readable name of the version. Limit of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * The description of the version. The maximum length is 500 characters. If
     * exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Output only. The NLU settings of the flow at version creation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.NluSettings nlu_settings = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $nlu_settings = null;
    /**
     * Output only. Create time of the version.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The state of this version. This field is read-only and cannot
     * be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Version.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Format:
     *           projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>.
     *           Version ID is a self-increasing number generated by Dialogflow upon version
     *           creation.
     *     @type string $display_name
     *           Required. The human-readable name of the version. Limit of 64 characters.
     *     @type string $description
     *           The description of the version. The maximum length is 500 characters. If
     *           exceeded, the request is rejected.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\NluSettings $nlu_settings
     *           Output only. The NLU settings of the flow at version creation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time of the version.
     *     @type int $state
     *           Output only. The state of this version. This field is read-only and cannot
     *           be set by create and update methods.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Format:
     * projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>.
     * Version ID is a self-increasing number generated by Dialogflow upon version
     * creation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Format:
     * projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>.
     * Version ID is a self-increasing number generated by Dialogflow upon version
     * creation.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The human-readable name of the version. Limit of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The human-readable name of the version. Limit of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description of the version. The maximum length is 500 characters. If
     * exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the version. The maximum length is 500 characters. If
     * exceeded, the request is rejected.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The NLU settings of the flow at version creation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.NluSettings nlu_settings = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\NluSettings|null
     */
    public function getNluSettings()
    {
        return $this->nlu_settings;
    }

    public function hasNluSettings()
    {
        return isset($this->nlu_settings);
    }

    public function clearNluSettings()
    {
        unset($this->nlu_settings);
    }

    /**
     * Output only. The NLU settings of the flow at version creation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.NluSettings nlu_settings = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\NluSettings $var
     * @return $this
     */
    public function setNluSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\NluSettings::class);
        $this->nlu_settings = $var;

        return $this;
    }

    /**
     * Output only. Create time of the version.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time of the version.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The state of this version. This field is read-only and cannot
     * be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Version.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of this version. This field is read-only and cannot
     * be set by create and update methods.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Version.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\Version\State::class);
        $this->state = $var;

        return $this;
    }

}

