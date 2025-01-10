<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A node-attached disk resource.
 * Next ID: 8;
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.AttachedDisk</code>
 */
class AttachedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the full path to an existing disk.
     * For example: "projects/my-project/zones/us-central1-c/disks/my-disk".
     *
     * Generated from protobuf field <code>string source_disk = 3;</code>
     */
    protected $source_disk = '';
    /**
     * The mode in which to attach this disk.
     * If not specified, the default is READ_WRITE mode.
     * Only applicable to data_disks.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.AttachedDisk.DiskMode mode = 4;</code>
     */
    protected $mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_disk
     *           Specifies the full path to an existing disk.
     *           For example: "projects/my-project/zones/us-central1-c/disks/my-disk".
     *     @type int $mode
     *           The mode in which to attach this disk.
     *           If not specified, the default is READ_WRITE mode.
     *           Only applicable to data_disks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the full path to an existing disk.
     * For example: "projects/my-project/zones/us-central1-c/disks/my-disk".
     *
     * Generated from protobuf field <code>string source_disk = 3;</code>
     * @return string
     */
    public function getSourceDisk()
    {
        return $this->source_disk;
    }

    /**
     * Specifies the full path to an existing disk.
     * For example: "projects/my-project/zones/us-central1-c/disks/my-disk".
     *
     * Generated from protobuf field <code>string source_disk = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceDisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_disk = $var;

        return $this;
    }

    /**
     * The mode in which to attach this disk.
     * If not specified, the default is READ_WRITE mode.
     * Only applicable to data_disks.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.AttachedDisk.DiskMode mode = 4;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The mode in which to attach this disk.
     * If not specified, the default is READ_WRITE mode.
     * Only applicable to data_disks.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.AttachedDisk.DiskMode mode = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tpu\V2\AttachedDisk\DiskMode::class);
        $this->mode = $var;

        return $this;
    }

}

