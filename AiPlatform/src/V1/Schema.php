<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/openapi.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schema is used to define the format of input/output data. Represents a select
 * subset of an [OpenAPI 3.0 schema
 * object](https://spec.openapis.org/oas/v3.0.3#schema-object). More fields may
 * be added in the future as needed.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Schema</code>
 */
class Schema extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The type of the data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;
    /**
     * Optional. The format of the data.
     * Supported formats:
     *  for NUMBER type: "float", "double"
     *  for INTEGER type: "int32", "int64"
     *  for STRING type: "email", "byte", etc
     *
     * Generated from protobuf field <code>string format = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $format = '';
    /**
     * Optional. The title of the Schema.
     *
     * Generated from protobuf field <code>string title = 24 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $title = '';
    /**
     * Optional. The description of the data.
     *
     * Generated from protobuf field <code>string description = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Indicates if the value may be null.
     *
     * Generated from protobuf field <code>bool nullable = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $nullable = false;
    /**
     * Optional. Default value of the data.
     *
     * Generated from protobuf field <code>.google.protobuf.Value default = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $default = null;
    /**
     * Optional. SCHEMA FIELDS FOR TYPE ARRAY
     * Schema of the elements of Type.ARRAY.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema items = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $items = null;
    /**
     * Optional. Minimum number of the elements for Type.ARRAY.
     *
     * Generated from protobuf field <code>int64 min_items = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $min_items = 0;
    /**
     * Optional. Maximum number of the elements for Type.ARRAY.
     *
     * Generated from protobuf field <code>int64 max_items = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_items = 0;
    /**
     * Optional. Possible values of the element of Type.STRING with enum format.
     * For example we can define an Enum Direction as :
     * {type:STRING, format:enum, enum:["EAST", NORTH", "SOUTH", "WEST"]}
     *
     * Generated from protobuf field <code>repeated string enum = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enum;
    /**
     * Optional. SCHEMA FIELDS FOR TYPE OBJECT
     * Properties of Type.OBJECT.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.Schema> properties = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;
    /**
     * Optional. The order of the properties.
     * Not a standard field in open api spec. Only used to support the order of
     * the properties.
     *
     * Generated from protobuf field <code>repeated string property_ordering = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $property_ordering;
    /**
     * Optional. Required properties of Type.OBJECT.
     *
     * Generated from protobuf field <code>repeated string required = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $required;
    /**
     * Optional. Minimum number of the properties for Type.OBJECT.
     *
     * Generated from protobuf field <code>int64 min_properties = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $min_properties = 0;
    /**
     * Optional. Maximum number of the properties for Type.OBJECT.
     *
     * Generated from protobuf field <code>int64 max_properties = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_properties = 0;
    /**
     * Optional. SCHEMA FIELDS FOR TYPE INTEGER and NUMBER
     * Minimum value of the Type.INTEGER and Type.NUMBER
     *
     * Generated from protobuf field <code>double minimum = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $minimum = 0.0;
    /**
     * Optional. Maximum value of the Type.INTEGER and Type.NUMBER
     *
     * Generated from protobuf field <code>double maximum = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $maximum = 0.0;
    /**
     * Optional. SCHEMA FIELDS FOR TYPE STRING
     * Minimum length of the Type.STRING
     *
     * Generated from protobuf field <code>int64 min_length = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $min_length = 0;
    /**
     * Optional. Maximum length of the Type.STRING
     *
     * Generated from protobuf field <code>int64 max_length = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_length = 0;
    /**
     * Optional. Pattern of the Type.STRING to restrict a string to a regular
     * expression.
     *
     * Generated from protobuf field <code>string pattern = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $pattern = '';
    /**
     * Optional. Example of the object. Will only populated when the object is the
     * root.
     *
     * Generated from protobuf field <code>.google.protobuf.Value example = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $example = null;
    /**
     * Optional. The value should be validated against any (one or more) of the
     * subschemas in the list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Schema any_of = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $any_of;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Optional. The type of the data.
     *     @type string $format
     *           Optional. The format of the data.
     *           Supported formats:
     *            for NUMBER type: "float", "double"
     *            for INTEGER type: "int32", "int64"
     *            for STRING type: "email", "byte", etc
     *     @type string $title
     *           Optional. The title of the Schema.
     *     @type string $description
     *           Optional. The description of the data.
     *     @type bool $nullable
     *           Optional. Indicates if the value may be null.
     *     @type \Google\Protobuf\Value $default
     *           Optional. Default value of the data.
     *     @type \Google\Cloud\AIPlatform\V1\Schema $items
     *           Optional. SCHEMA FIELDS FOR TYPE ARRAY
     *           Schema of the elements of Type.ARRAY.
     *     @type int|string $min_items
     *           Optional. Minimum number of the elements for Type.ARRAY.
     *     @type int|string $max_items
     *           Optional. Maximum number of the elements for Type.ARRAY.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $enum
     *           Optional. Possible values of the element of Type.STRING with enum format.
     *           For example we can define an Enum Direction as :
     *           {type:STRING, format:enum, enum:["EAST", NORTH", "SOUTH", "WEST"]}
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. SCHEMA FIELDS FOR TYPE OBJECT
     *           Properties of Type.OBJECT.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $property_ordering
     *           Optional. The order of the properties.
     *           Not a standard field in open api spec. Only used to support the order of
     *           the properties.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $required
     *           Optional. Required properties of Type.OBJECT.
     *     @type int|string $min_properties
     *           Optional. Minimum number of the properties for Type.OBJECT.
     *     @type int|string $max_properties
     *           Optional. Maximum number of the properties for Type.OBJECT.
     *     @type float $minimum
     *           Optional. SCHEMA FIELDS FOR TYPE INTEGER and NUMBER
     *           Minimum value of the Type.INTEGER and Type.NUMBER
     *     @type float $maximum
     *           Optional. Maximum value of the Type.INTEGER and Type.NUMBER
     *     @type int|string $min_length
     *           Optional. SCHEMA FIELDS FOR TYPE STRING
     *           Minimum length of the Type.STRING
     *     @type int|string $max_length
     *           Optional. Maximum length of the Type.STRING
     *     @type string $pattern
     *           Optional. Pattern of the Type.STRING to restrict a string to a regular
     *           expression.
     *     @type \Google\Protobuf\Value $example
     *           Optional. Example of the object. Will only populated when the object is the
     *           root.
     *     @type array<\Google\Cloud\AIPlatform\V1\Schema>|\Google\Protobuf\Internal\RepeatedField $any_of
     *           Optional. The value should be validated against any (one or more) of the
     *           subschemas in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Openapi::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The type of the data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. The type of the data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The format of the data.
     * Supported formats:
     *  for NUMBER type: "float", "double"
     *  for INTEGER type: "int32", "int64"
     *  for STRING type: "email", "byte", etc
     *
     * Generated from protobuf field <code>string format = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Optional. The format of the data.
     * Supported formats:
     *  for NUMBER type: "float", "double"
     *  for INTEGER type: "int32", "int64"
     *  for STRING type: "email", "byte", etc
     *
     * Generated from protobuf field <code>string format = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Optional. The title of the Schema.
     *
     * Generated from protobuf field <code>string title = 24 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Optional. The title of the Schema.
     *
     * Generated from protobuf field <code>string title = 24 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. The description of the data.
     *
     * Generated from protobuf field <code>string description = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the data.
     *
     * Generated from protobuf field <code>string description = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Indicates if the value may be null.
     *
     * Generated from protobuf field <code>bool nullable = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Optional. Indicates if the value may be null.
     *
     * Generated from protobuf field <code>bool nullable = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setNullable($var)
    {
        GPBUtil::checkBool($var);
        $this->nullable = $var;

        return $this;
    }

    /**
     * Optional. Default value of the data.
     *
     * Generated from protobuf field <code>.google.protobuf.Value default = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getDefault()
    {
        return $this->default;
    }

    public function hasDefault()
    {
        return isset($this->default);
    }

    public function clearDefault()
    {
        unset($this->default);
    }

    /**
     * Optional. Default value of the data.
     *
     * Generated from protobuf field <code>.google.protobuf.Value default = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setDefault($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->default = $var;

        return $this;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE ARRAY
     * Schema of the elements of Type.ARRAY.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema items = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Schema|null
     */
    public function getItems()
    {
        return $this->items;
    }

    public function hasItems()
    {
        return isset($this->items);
    }

    public function clearItems()
    {
        unset($this->items);
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE ARRAY
     * Schema of the elements of Type.ARRAY.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Schema items = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Schema $var
     * @return $this
     */
    public function setItems($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Schema::class);
        $this->items = $var;

        return $this;
    }

    /**
     * Optional. Minimum number of the elements for Type.ARRAY.
     *
     * Generated from protobuf field <code>int64 min_items = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMinItems()
    {
        return $this->min_items;
    }

    /**
     * Optional. Minimum number of the elements for Type.ARRAY.
     *
     * Generated from protobuf field <code>int64 min_items = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinItems($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_items = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of the elements for Type.ARRAY.
     *
     * Generated from protobuf field <code>int64 max_items = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxItems()
    {
        return $this->max_items;
    }

    /**
     * Optional. Maximum number of the elements for Type.ARRAY.
     *
     * Generated from protobuf field <code>int64 max_items = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxItems($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_items = $var;

        return $this;
    }

    /**
     * Optional. Possible values of the element of Type.STRING with enum format.
     * For example we can define an Enum Direction as :
     * {type:STRING, format:enum, enum:["EAST", NORTH", "SOUTH", "WEST"]}
     *
     * Generated from protobuf field <code>repeated string enum = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * Optional. Possible values of the element of Type.STRING with enum format.
     * For example we can define an Enum Direction as :
     * {type:STRING, format:enum, enum:["EAST", NORTH", "SOUTH", "WEST"]}
     *
     * Generated from protobuf field <code>repeated string enum = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnum($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->enum = $arr;

        return $this;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE OBJECT
     * Properties of Type.OBJECT.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.Schema> properties = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE OBJECT
     * Properties of Type.OBJECT.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.Schema> properties = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Schema::class);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Optional. The order of the properties.
     * Not a standard field in open api spec. Only used to support the order of
     * the properties.
     *
     * Generated from protobuf field <code>repeated string property_ordering = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPropertyOrdering()
    {
        return $this->property_ordering;
    }

    /**
     * Optional. The order of the properties.
     * Not a standard field in open api spec. Only used to support the order of
     * the properties.
     *
     * Generated from protobuf field <code>repeated string property_ordering = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPropertyOrdering($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->property_ordering = $arr;

        return $this;
    }

    /**
     * Optional. Required properties of Type.OBJECT.
     *
     * Generated from protobuf field <code>repeated string required = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Optional. Required properties of Type.OBJECT.
     *
     * Generated from protobuf field <code>repeated string required = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequired($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->required = $arr;

        return $this;
    }

    /**
     * Optional. Minimum number of the properties for Type.OBJECT.
     *
     * Generated from protobuf field <code>int64 min_properties = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMinProperties()
    {
        return $this->min_properties;
    }

    /**
     * Optional. Minimum number of the properties for Type.OBJECT.
     *
     * Generated from protobuf field <code>int64 min_properties = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinProperties($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_properties = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of the properties for Type.OBJECT.
     *
     * Generated from protobuf field <code>int64 max_properties = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxProperties()
    {
        return $this->max_properties;
    }

    /**
     * Optional. Maximum number of the properties for Type.OBJECT.
     *
     * Generated from protobuf field <code>int64 max_properties = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxProperties($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_properties = $var;

        return $this;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE INTEGER and NUMBER
     * Minimum value of the Type.INTEGER and Type.NUMBER
     *
     * Generated from protobuf field <code>double minimum = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE INTEGER and NUMBER
     * Minimum value of the Type.INTEGER and Type.NUMBER
     *
     * Generated from protobuf field <code>double minimum = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setMinimum($var)
    {
        GPBUtil::checkDouble($var);
        $this->minimum = $var;

        return $this;
    }

    /**
     * Optional. Maximum value of the Type.INTEGER and Type.NUMBER
     *
     * Generated from protobuf field <code>double maximum = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Optional. Maximum value of the Type.INTEGER and Type.NUMBER
     *
     * Generated from protobuf field <code>double maximum = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setMaximum($var)
    {
        GPBUtil::checkDouble($var);
        $this->maximum = $var;

        return $this;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE STRING
     * Minimum length of the Type.STRING
     *
     * Generated from protobuf field <code>int64 min_length = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMinLength()
    {
        return $this->min_length;
    }

    /**
     * Optional. SCHEMA FIELDS FOR TYPE STRING
     * Minimum length of the Type.STRING
     *
     * Generated from protobuf field <code>int64 min_length = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_length = $var;

        return $this;
    }

    /**
     * Optional. Maximum length of the Type.STRING
     *
     * Generated from protobuf field <code>int64 max_length = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxLength()
    {
        return $this->max_length;
    }

    /**
     * Optional. Maximum length of the Type.STRING
     *
     * Generated from protobuf field <code>int64 max_length = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_length = $var;

        return $this;
    }

    /**
     * Optional. Pattern of the Type.STRING to restrict a string to a regular
     * expression.
     *
     * Generated from protobuf field <code>string pattern = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Optional. Pattern of the Type.STRING to restrict a string to a regular
     * expression.
     *
     * Generated from protobuf field <code>string pattern = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->pattern = $var;

        return $this;
    }

    /**
     * Optional. Example of the object. Will only populated when the object is the
     * root.
     *
     * Generated from protobuf field <code>.google.protobuf.Value example = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getExample()
    {
        return $this->example;
    }

    public function hasExample()
    {
        return isset($this->example);
    }

    public function clearExample()
    {
        unset($this->example);
    }

    /**
     * Optional. Example of the object. Will only populated when the object is the
     * root.
     *
     * Generated from protobuf field <code>.google.protobuf.Value example = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setExample($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->example = $var;

        return $this;
    }

    /**
     * Optional. The value should be validated against any (one or more) of the
     * subschemas in the list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Schema any_of = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnyOf()
    {
        return $this->any_of;
    }

    /**
     * Optional. The value should be validated against any (one or more) of the
     * subschemas in the list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Schema any_of = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Schema>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnyOf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Schema::class);
        $this->any_of = $arr;

        return $this;
    }

}

