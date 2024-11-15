<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\MetadataJob\ImportJobSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A boundary on the scope of impact that the metadata import job can have.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.MetadataJob.ImportJobSpec.ImportJobScope</code>
 */
class ImportJobScope extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The entry group that is in scope for the import job,
     * specified as a relative resource name in the format
     * `projects/{project_number_or_id}/locations/{location_id}/entryGroups/{entry_group_id}`.
     * Only entries that belong to the specified entry group are affected by
     * the job.
     * Must contain exactly one element. The entry group and the job
     * must be in the same location.
     *
     * Generated from protobuf field <code>repeated string entry_groups = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $entry_groups;
    /**
     * Required. The entry types that are in scope for the import job,
     * specified as relative resource names in the format
     * `projects/{project_number_or_id}/locations/{location_id}/entryTypes/{entry_type_id}`.
     * The job modifies only the entries that belong to these entry types.
     * If the metadata import file attempts to modify an entry whose type
     * isn't included in this list, the import job is halted before modifying
     * any entries or aspects.
     * The location of an entry type must either match the location of the
     * job, or the entry type must be global.
     *
     * Generated from protobuf field <code>repeated string entry_types = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $entry_types;
    /**
     * Optional. The aspect types that are in scope for the import job,
     * specified as relative resource names in the format
     * `projects/{project_number_or_id}/locations/{location_id}/aspectTypes/{aspect_type_id}`.
     * The job modifies only the aspects that belong to these aspect types.
     * If the metadata import file attempts to modify an aspect whose type
     * isn't included in this list, the import job is halted before modifying
     * any entries or aspects.
     * The location of an aspect type must either match the location of the
     * job, or the aspect type must be global.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $aspect_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $entry_groups
     *           Required. The entry group that is in scope for the import job,
     *           specified as a relative resource name in the format
     *           `projects/{project_number_or_id}/locations/{location_id}/entryGroups/{entry_group_id}`.
     *           Only entries that belong to the specified entry group are affected by
     *           the job.
     *           Must contain exactly one element. The entry group and the job
     *           must be in the same location.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $entry_types
     *           Required. The entry types that are in scope for the import job,
     *           specified as relative resource names in the format
     *           `projects/{project_number_or_id}/locations/{location_id}/entryTypes/{entry_type_id}`.
     *           The job modifies only the entries that belong to these entry types.
     *           If the metadata import file attempts to modify an entry whose type
     *           isn't included in this list, the import job is halted before modifying
     *           any entries or aspects.
     *           The location of an entry type must either match the location of the
     *           job, or the entry type must be global.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $aspect_types
     *           Optional. The aspect types that are in scope for the import job,
     *           specified as relative resource names in the format
     *           `projects/{project_number_or_id}/locations/{location_id}/aspectTypes/{aspect_type_id}`.
     *           The job modifies only the aspects that belong to these aspect types.
     *           If the metadata import file attempts to modify an aspect whose type
     *           isn't included in this list, the import job is halted before modifying
     *           any entries or aspects.
     *           The location of an aspect type must either match the location of the
     *           job, or the aspect type must be global.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The entry group that is in scope for the import job,
     * specified as a relative resource name in the format
     * `projects/{project_number_or_id}/locations/{location_id}/entryGroups/{entry_group_id}`.
     * Only entries that belong to the specified entry group are affected by
     * the job.
     * Must contain exactly one element. The entry group and the job
     * must be in the same location.
     *
     * Generated from protobuf field <code>repeated string entry_groups = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntryGroups()
    {
        return $this->entry_groups;
    }

    /**
     * Required. The entry group that is in scope for the import job,
     * specified as a relative resource name in the format
     * `projects/{project_number_or_id}/locations/{location_id}/entryGroups/{entry_group_id}`.
     * Only entries that belong to the specified entry group are affected by
     * the job.
     * Must contain exactly one element. The entry group and the job
     * must be in the same location.
     *
     * Generated from protobuf field <code>repeated string entry_groups = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntryGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->entry_groups = $arr;

        return $this;
    }

    /**
     * Required. The entry types that are in scope for the import job,
     * specified as relative resource names in the format
     * `projects/{project_number_or_id}/locations/{location_id}/entryTypes/{entry_type_id}`.
     * The job modifies only the entries that belong to these entry types.
     * If the metadata import file attempts to modify an entry whose type
     * isn't included in this list, the import job is halted before modifying
     * any entries or aspects.
     * The location of an entry type must either match the location of the
     * job, or the entry type must be global.
     *
     * Generated from protobuf field <code>repeated string entry_types = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntryTypes()
    {
        return $this->entry_types;
    }

    /**
     * Required. The entry types that are in scope for the import job,
     * specified as relative resource names in the format
     * `projects/{project_number_or_id}/locations/{location_id}/entryTypes/{entry_type_id}`.
     * The job modifies only the entries that belong to these entry types.
     * If the metadata import file attempts to modify an entry whose type
     * isn't included in this list, the import job is halted before modifying
     * any entries or aspects.
     * The location of an entry type must either match the location of the
     * job, or the entry type must be global.
     *
     * Generated from protobuf field <code>repeated string entry_types = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntryTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->entry_types = $arr;

        return $this;
    }

    /**
     * Optional. The aspect types that are in scope for the import job,
     * specified as relative resource names in the format
     * `projects/{project_number_or_id}/locations/{location_id}/aspectTypes/{aspect_type_id}`.
     * The job modifies only the aspects that belong to these aspect types.
     * If the metadata import file attempts to modify an aspect whose type
     * isn't included in this list, the import job is halted before modifying
     * any entries or aspects.
     * The location of an aspect type must either match the location of the
     * job, or the aspect type must be global.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAspectTypes()
    {
        return $this->aspect_types;
    }

    /**
     * Optional. The aspect types that are in scope for the import job,
     * specified as relative resource names in the format
     * `projects/{project_number_or_id}/locations/{location_id}/aspectTypes/{aspect_type_id}`.
     * The job modifies only the aspects that belong to these aspect types.
     * If the metadata import file attempts to modify an aspect whose type
     * isn't included in this list, the import job is halted before modifying
     * any entries or aspects.
     * The location of an aspect type must either match the location of the
     * job, or the aspect type must be global.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAspectTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->aspect_types = $arr;

        return $this;
    }

}


