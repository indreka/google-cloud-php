<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Guest OS running service details.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.RunningService</code>
 */
class RunningService extends \Google\Protobuf\Internal\Message
{
    /**
     * Service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    protected $service_name = '';
    /**
     * Service state (OS-agnostic).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningService.State state = 2;</code>
     */
    protected $state = 0;
    /**
     * Service start mode (OS-agnostic).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningService.StartMode start_mode = 3;</code>
     */
    protected $start_mode = 0;
    /**
     * Service binary path.
     *
     * Generated from protobuf field <code>string exe_path = 4;</code>
     */
    protected $exe_path = '';
    /**
     * Service command line.
     *
     * Generated from protobuf field <code>string cmdline = 5;</code>
     */
    protected $cmdline = '';
    /**
     * Service pid.
     *
     * Generated from protobuf field <code>int64 pid = 6;</code>
     */
    protected $pid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Service name.
     *     @type int $state
     *           Service state (OS-agnostic).
     *     @type int $start_mode
     *           Service start mode (OS-agnostic).
     *     @type string $exe_path
     *           Service binary path.
     *     @type string $cmdline
     *           Service command line.
     *     @type int|string $pid
     *           Service pid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Service state (OS-agnostic).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningService.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Service state (OS-agnostic).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningService.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\RunningService\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Service start mode (OS-agnostic).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningService.StartMode start_mode = 3;</code>
     * @return int
     */
    public function getStartMode()
    {
        return $this->start_mode;
    }

    /**
     * Service start mode (OS-agnostic).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningService.StartMode start_mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStartMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\RunningService\StartMode::class);
        $this->start_mode = $var;

        return $this;
    }

    /**
     * Service binary path.
     *
     * Generated from protobuf field <code>string exe_path = 4;</code>
     * @return string
     */
    public function getExePath()
    {
        return $this->exe_path;
    }

    /**
     * Service binary path.
     *
     * Generated from protobuf field <code>string exe_path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setExePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->exe_path = $var;

        return $this;
    }

    /**
     * Service command line.
     *
     * Generated from protobuf field <code>string cmdline = 5;</code>
     * @return string
     */
    public function getCmdline()
    {
        return $this->cmdline;
    }

    /**
     * Service command line.
     *
     * Generated from protobuf field <code>string cmdline = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCmdline($var)
    {
        GPBUtil::checkString($var, True);
        $this->cmdline = $var;

        return $this;
    }

    /**
     * Service pid.
     *
     * Generated from protobuf field <code>int64 pid = 6;</code>
     * @return int|string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Service pid.
     *
     * Generated from protobuf field <code>int64 pid = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkInt64($var);
        $this->pid = $var;

        return $this;
    }

}
