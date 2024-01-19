<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes node type.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.NodeType</code>
 */
class NodeType extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this node type.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-proj/locations/us-central1-a/nodeTypes/standard-72`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The canonical identifier of the node type
     * (corresponds to the `NodeType`). For example: standard-72.
     *
     * Generated from protobuf field <code>string node_type_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $node_type_id = '';
    /**
     * Output only. The friendly name for this node type.
     * For example: ve1-standard-72
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $display_name = '';
    /**
     * Output only. The total number of virtual CPUs in a single node.
     *
     * Generated from protobuf field <code>int32 virtual_cpu_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $virtual_cpu_count = 0;
    /**
     * Output only. The total number of CPU cores in a single node.
     *
     * Generated from protobuf field <code>int32 total_core_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $total_core_count = 0;
    /**
     * Output only. The amount of physical memory available, defined in GB.
     *
     * Generated from protobuf field <code>int32 memory_gb = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $memory_gb = 0;
    /**
     * Output only. The amount of storage available, defined in GB.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $disk_size_gb = 0;
    /**
     * Output only. List of possible values of custom core count.
     *
     * Generated from protobuf field <code>repeated int32 available_custom_core_counts = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $available_custom_core_counts;
    /**
     * Output only. The type of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NodeType.Kind kind = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $kind = 0;
    /**
     * Output only. Families of the node type.
     * For node types to be in the same cluster
     * they must share at least one element in the `families`.
     *
     * Generated from protobuf field <code>repeated string families = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $families;
    /**
     * Output only. Capabilities of this node type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.NodeType.Capability capabilities = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $capabilities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this node type.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-proj/locations/us-central1-a/nodeTypes/standard-72`
     *     @type string $node_type_id
     *           Output only. The canonical identifier of the node type
     *           (corresponds to the `NodeType`). For example: standard-72.
     *     @type string $display_name
     *           Output only. The friendly name for this node type.
     *           For example: ve1-standard-72
     *     @type int $virtual_cpu_count
     *           Output only. The total number of virtual CPUs in a single node.
     *     @type int $total_core_count
     *           Output only. The total number of CPU cores in a single node.
     *     @type int $memory_gb
     *           Output only. The amount of physical memory available, defined in GB.
     *     @type int $disk_size_gb
     *           Output only. The amount of storage available, defined in GB.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $available_custom_core_counts
     *           Output only. List of possible values of custom core count.
     *     @type int $kind
     *           Output only. The type of the resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $families
     *           Output only. Families of the node type.
     *           For node types to be in the same cluster
     *           they must share at least one element in the `families`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $capabilities
     *           Output only. Capabilities of this node type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this node type.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-proj/locations/us-central1-a/nodeTypes/standard-72`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this node type.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-proj/locations/us-central1-a/nodeTypes/standard-72`
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
     * Output only. The canonical identifier of the node type
     * (corresponds to the `NodeType`). For example: standard-72.
     *
     * Generated from protobuf field <code>string node_type_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNodeTypeId()
    {
        return $this->node_type_id;
    }

    /**
     * Output only. The canonical identifier of the node type
     * (corresponds to the `NodeType`). For example: standard-72.
     *
     * Generated from protobuf field <code>string node_type_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_type_id = $var;

        return $this;
    }

    /**
     * Output only. The friendly name for this node type.
     * For example: ve1-standard-72
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The friendly name for this node type.
     * For example: ve1-standard-72
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The total number of virtual CPUs in a single node.
     *
     * Generated from protobuf field <code>int32 virtual_cpu_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVirtualCpuCount()
    {
        return $this->virtual_cpu_count;
    }

    /**
     * Output only. The total number of virtual CPUs in a single node.
     *
     * Generated from protobuf field <code>int32 virtual_cpu_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVirtualCpuCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->virtual_cpu_count = $var;

        return $this;
    }

    /**
     * Output only. The total number of CPU cores in a single node.
     *
     * Generated from protobuf field <code>int32 total_core_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTotalCoreCount()
    {
        return $this->total_core_count;
    }

    /**
     * Output only. The total number of CPU cores in a single node.
     *
     * Generated from protobuf field <code>int32 total_core_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCoreCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_core_count = $var;

        return $this;
    }

    /**
     * Output only. The amount of physical memory available, defined in GB.
     *
     * Generated from protobuf field <code>int32 memory_gb = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getMemoryGb()
    {
        return $this->memory_gb;
    }

    /**
     * Output only. The amount of physical memory available, defined in GB.
     *
     * Generated from protobuf field <code>int32 memory_gb = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_gb = $var;

        return $this;
    }

    /**
     * Output only. The amount of storage available, defined in GB.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Output only. The amount of storage available, defined in GB.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * Output only. List of possible values of custom core count.
     *
     * Generated from protobuf field <code>repeated int32 available_custom_core_counts = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailableCustomCoreCounts()
    {
        return $this->available_custom_core_counts;
    }

    /**
     * Output only. List of possible values of custom core count.
     *
     * Generated from protobuf field <code>repeated int32 available_custom_core_counts = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailableCustomCoreCounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->available_custom_core_counts = $arr;

        return $this;
    }

    /**
     * Output only. The type of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NodeType.Kind kind = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Output only. The type of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.NodeType.Kind kind = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\NodeType\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Output only. Families of the node type.
     * For node types to be in the same cluster
     * they must share at least one element in the `families`.
     *
     * Generated from protobuf field <code>repeated string families = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFamilies()
    {
        return $this->families;
    }

    /**
     * Output only. Families of the node type.
     * For node types to be in the same cluster
     * they must share at least one element in the `families`.
     *
     * Generated from protobuf field <code>repeated string families = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFamilies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->families = $arr;

        return $this;
    }

    /**
     * Output only. Capabilities of this node type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.NodeType.Capability capabilities = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Output only. Capabilities of this node type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.NodeType.Capability capabilities = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapabilities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\VmwareEngine\V1\NodeType\Capability::class);
        $this->capabilities = $arr;

        return $this;
    }

}

