<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A tag template defines a tag that can have one or more typed fields.
 * The template is used to create tags that are attached to Google Cloud
 *  resources. [Tag template roles]
 * (https://cloud.google.com/iam/docs/understanding-roles#data-catalog-roles)
 * provide permissions to create, edit, and use the template. For example,
 * see the [TagTemplate User]
 * (https://cloud.google.com/data-catalog/docs/how-to/template-user) role
 * that includes a permission to use the tag template to tag resources.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.TagTemplate</code>
 */
class TagTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the tag template in URL format.
     * Note: The tag template itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Display name for this template. Defaults to an empty string.
     * The name must contain only Unicode letters, numbers (0-9), underscores (_),
     * dashes (-), spaces ( ), and can't start or end with spaces.
     * The maximum length is 200 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Indicates whether tags created with this template are public. Public tags
     * do not require tag template access to appear in
     * [ListTags][google.cloud.datacatalog.v1.ListTags] API response.
     * Additionally, you can search for a public tag by value with a
     * simple search query in addition to using a ``tag:`` predicate.
     *
     * Generated from protobuf field <code>bool is_publicly_readable = 5;</code>
     */
    protected $is_publicly_readable = false;
    /**
     * Required. Map of tag template field IDs to the settings for the field.
     * This map is an exhaustive list of the allowed fields. The map must contain
     * at least one field and at most 500 fields.
     * The keys to this map are tag template field IDs. The IDs have the
     * following limitations:
     * * Can contain uppercase and lowercase letters, numbers (0-9) and
     *   underscores (_).
     * * Must be at least 1 character and at most 64 characters long.
     * * Must start with a letter or underscore.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.TagTemplateField> fields = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the tag template in URL format.
     *           Note: The tag template itself and its child resources might not be
     *           stored in the location specified in its name.
     *     @type string $display_name
     *           Display name for this template. Defaults to an empty string.
     *           The name must contain only Unicode letters, numbers (0-9), underscores (_),
     *           dashes (-), spaces ( ), and can't start or end with spaces.
     *           The maximum length is 200 characters.
     *     @type bool $is_publicly_readable
     *           Indicates whether tags created with this template are public. Public tags
     *           do not require tag template access to appear in
     *           [ListTags][google.cloud.datacatalog.v1.ListTags] API response.
     *           Additionally, you can search for a public tag by value with a
     *           simple search query in addition to using a ``tag:`` predicate.
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     *           Required. Map of tag template field IDs to the settings for the field.
     *           This map is an exhaustive list of the allowed fields. The map must contain
     *           at least one field and at most 500 fields.
     *           The keys to this map are tag template field IDs. The IDs have the
     *           following limitations:
     *           * Can contain uppercase and lowercase letters, numbers (0-9) and
     *             underscores (_).
     *           * Must be at least 1 character and at most 64 characters long.
     *           * Must start with a letter or underscore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the tag template in URL format.
     * Note: The tag template itself and its child resources might not be
     * stored in the location specified in its name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the tag template in URL format.
     * Note: The tag template itself and its child resources might not be
     * stored in the location specified in its name.
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
     * Display name for this template. Defaults to an empty string.
     * The name must contain only Unicode letters, numbers (0-9), underscores (_),
     * dashes (-), spaces ( ), and can't start or end with spaces.
     * The maximum length is 200 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name for this template. Defaults to an empty string.
     * The name must contain only Unicode letters, numbers (0-9), underscores (_),
     * dashes (-), spaces ( ), and can't start or end with spaces.
     * The maximum length is 200 characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * Indicates whether tags created with this template are public. Public tags
     * do not require tag template access to appear in
     * [ListTags][google.cloud.datacatalog.v1.ListTags] API response.
     * Additionally, you can search for a public tag by value with a
     * simple search query in addition to using a ``tag:`` predicate.
     *
     * Generated from protobuf field <code>bool is_publicly_readable = 5;</code>
     * @return bool
     */
    public function getIsPubliclyReadable()
    {
        return $this->is_publicly_readable;
    }

    /**
     * Indicates whether tags created with this template are public. Public tags
     * do not require tag template access to appear in
     * [ListTags][google.cloud.datacatalog.v1.ListTags] API response.
     * Additionally, you can search for a public tag by value with a
     * simple search query in addition to using a ``tag:`` predicate.
     *
     * Generated from protobuf field <code>bool is_publicly_readable = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPubliclyReadable($var)
    {
        GPBUtil::checkBool($var);
        $this->is_publicly_readable = $var;

        return $this;
    }

    /**
     * Required. Map of tag template field IDs to the settings for the field.
     * This map is an exhaustive list of the allowed fields. The map must contain
     * at least one field and at most 500 fields.
     * The keys to this map are tag template field IDs. The IDs have the
     * following limitations:
     * * Can contain uppercase and lowercase letters, numbers (0-9) and
     *   underscores (_).
     * * Must be at least 1 character and at most 64 characters long.
     * * Must start with a letter or underscore.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.TagTemplateField> fields = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Required. Map of tag template field IDs to the settings for the field.
     * This map is an exhaustive list of the allowed fields. The map must contain
     * at least one field and at most 500 fields.
     * The keys to this map are tag template field IDs. The IDs have the
     * following limitations:
     * * Can contain uppercase and lowercase letters, numbers (0-9) and
     *   underscores (_).
     * * Must be at least 1 character and at most 64 characters long.
     * * Must start with a letter or underscore.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1.TagTemplateField> fields = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\TagTemplateField::class);
        $this->fields = $arr;

        return $this;
    }

}

