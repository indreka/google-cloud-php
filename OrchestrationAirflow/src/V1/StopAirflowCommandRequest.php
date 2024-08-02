<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stop Airflow Command request.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.StopAirflowCommandRequest</code>
 */
class StopAirflowCommandRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the environment in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}".
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     */
    protected $environment = '';
    /**
     * The unique ID of the command execution.
     *
     * Generated from protobuf field <code>string execution_id = 2;</code>
     */
    protected $execution_id = '';
    /**
     * The name of the pod where the command is executed.
     *
     * Generated from protobuf field <code>string pod = 3;</code>
     */
    protected $pod = '';
    /**
     * The namespace of the pod where the command is executed.
     *
     * Generated from protobuf field <code>string pod_namespace = 4;</code>
     */
    protected $pod_namespace = '';
    /**
     * If true, the execution is terminated forcefully (SIGKILL). If false, the
     * execution is stopped gracefully, giving it time for cleanup.
     *
     * Generated from protobuf field <code>bool force = 5;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $environment
     *           The resource name of the environment in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}".
     *     @type string $execution_id
     *           The unique ID of the command execution.
     *     @type string $pod
     *           The name of the pod where the command is executed.
     *     @type string $pod_namespace
     *           The namespace of the pod where the command is executed.
     *     @type bool $force
     *           If true, the execution is terminated forcefully (SIGKILL). If false, the
     *           execution is stopped gracefully, giving it time for cleanup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the environment in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}".
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * The resource name of the environment in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}".
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;

        return $this;
    }

    /**
     * The unique ID of the command execution.
     *
     * Generated from protobuf field <code>string execution_id = 2;</code>
     * @return string
     */
    public function getExecutionId()
    {
        return $this->execution_id;
    }

    /**
     * The unique ID of the command execution.
     *
     * Generated from protobuf field <code>string execution_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExecutionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->execution_id = $var;

        return $this;
    }

    /**
     * The name of the pod where the command is executed.
     *
     * Generated from protobuf field <code>string pod = 3;</code>
     * @return string
     */
    public function getPod()
    {
        return $this->pod;
    }

    /**
     * The name of the pod where the command is executed.
     *
     * Generated from protobuf field <code>string pod = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPod($var)
    {
        GPBUtil::checkString($var, True);
        $this->pod = $var;

        return $this;
    }

    /**
     * The namespace of the pod where the command is executed.
     *
     * Generated from protobuf field <code>string pod_namespace = 4;</code>
     * @return string
     */
    public function getPodNamespace()
    {
        return $this->pod_namespace;
    }

    /**
     * The namespace of the pod where the command is executed.
     *
     * Generated from protobuf field <code>string pod_namespace = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPodNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->pod_namespace = $var;

        return $this;
    }

    /**
     * If true, the execution is terminated forcefully (SIGKILL). If false, the
     * execution is stopped gracefully, giving it time for cleanup.
     *
     * Generated from protobuf field <code>bool force = 5;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If true, the execution is terminated forcefully (SIGKILL). If false, the
     * execution is stopped gracefully, giving it time for cleanup.
     *
     * Generated from protobuf field <code>bool force = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

