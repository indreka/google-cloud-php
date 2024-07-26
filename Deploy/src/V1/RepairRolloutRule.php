<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `RepairRolloutRule` automation rule will automatically repair a failed
 * `Rollout`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RepairRolloutRule</code>
 */
class RepairRolloutRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. ID of the rule. This id must be unique in the `Automation`
     * resource to which this rule belongs. The format is
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Optional. Jobs to repair. Proceeds only after job name matched any one in
     * the list, or for all jobs if unspecified or empty. The phase that includes
     * the job must match the phase ID specified in `source_phase`. This value
     * must consist of lower-case letters, numbers, and hyphens, start with a
     * letter and end with a letter or a number, and have a max length of 63
     * characters. In other words, it must match the following regex:
     * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
     *
     * Generated from protobuf field <code>repeated string jobs = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $jobs;
    /**
     * Output only. Information around the state of the 'Automation' rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationRuleCondition condition = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. ID of the rule. This id must be unique in the `Automation`
     *           resource to which this rule belongs. The format is
     *           `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $jobs
     *           Optional. Jobs to repair. Proceeds only after job name matched any one in
     *           the list, or for all jobs if unspecified or empty. The phase that includes
     *           the job must match the phase ID specified in `source_phase`. This value
     *           must consist of lower-case letters, numbers, and hyphens, start with a
     *           letter and end with a letter or a number, and have a max length of 63
     *           characters. In other words, it must match the following regex:
     *           `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
     *     @type \Google\Cloud\Deploy\V1\AutomationRuleCondition $condition
     *           Output only. Information around the state of the 'Automation' rule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. ID of the rule. This id must be unique in the `Automation`
     * resource to which this rule belongs. The format is
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. ID of the rule. This id must be unique in the `Automation`
     * resource to which this rule belongs. The format is
     * `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional. Jobs to repair. Proceeds only after job name matched any one in
     * the list, or for all jobs if unspecified or empty. The phase that includes
     * the job must match the phase ID specified in `source_phase`. This value
     * must consist of lower-case letters, numbers, and hyphens, start with a
     * letter and end with a letter or a number, and have a max length of 63
     * characters. In other words, it must match the following regex:
     * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
     *
     * Generated from protobuf field <code>repeated string jobs = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Optional. Jobs to repair. Proceeds only after job name matched any one in
     * the list, or for all jobs if unspecified or empty. The phase that includes
     * the job must match the phase ID specified in `source_phase`. This value
     * must consist of lower-case letters, numbers, and hyphens, start with a
     * letter and end with a letter or a number, and have a max length of 63
     * characters. In other words, it must match the following regex:
     * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
     *
     * Generated from protobuf field <code>repeated string jobs = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->jobs = $arr;

        return $this;
    }

    /**
     * Output only. Information around the state of the 'Automation' rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationRuleCondition condition = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\AutomationRuleCondition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * Output only. Information around the state of the 'Automation' rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.AutomationRuleCondition condition = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\AutomationRuleCondition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\AutomationRuleCondition::class);
        $this->condition = $var;

        return $this;
    }

}

