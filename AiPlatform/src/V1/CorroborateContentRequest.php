<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CorroborateContent.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CorroborateContentRequest</code>
 */
class CorroborateContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location from which to corroborate text.
     * The users must have permission to make a call in the project.
     * Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Input content to corroborate, only text format is supported for
     * now.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content content = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $content = null;
    /**
     * Optional. Facts used to generate the text can also be used to corroborate
     * the text.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Fact facts = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $facts;
    /**
     * Optional. Parameters that can be set to override default settings per
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CorroborateContentRequest.Parameters parameters = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $parameters = null;

    /**
     * @param string                              $parent  Required. The resource name of the Location from which to corroborate text.
     *                                                     The users must have permission to make a call in the project.
     *                                                     Format:
     *                                                     `projects/{project}/locations/{location}`. Please see
     *                                                     {@see VertexRagServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\Content $content Optional. Input content to corroborate, only text format is supported for
     *                                                     now.
     * @param \Google\Cloud\AIPlatform\V1\Fact[]  $facts   Optional. Facts used to generate the text can also be used to corroborate
     *                                                     the text.
     *
     * @return \Google\Cloud\AIPlatform\V1\CorroborateContentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\Content $content, array $facts): self
    {
        return (new self())
            ->setParent($parent)
            ->setContent($content)
            ->setFacts($facts);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location from which to corroborate text.
     *           The users must have permission to make a call in the project.
     *           Format:
     *           `projects/{project}/locations/{location}`.
     *     @type \Google\Cloud\AIPlatform\V1\Content $content
     *           Optional. Input content to corroborate, only text format is supported for
     *           now.
     *     @type array<\Google\Cloud\AIPlatform\V1\Fact>|\Google\Protobuf\Internal\RepeatedField $facts
     *           Optional. Facts used to generate the text can also be used to corroborate
     *           the text.
     *     @type \Google\Cloud\AIPlatform\V1\CorroborateContentRequest\Parameters $parameters
     *           Optional. Parameters that can be set to override default settings per
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location from which to corroborate text.
     * The users must have permission to make a call in the project.
     * Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location from which to corroborate text.
     * The users must have permission to make a call in the project.
     * Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Input content to corroborate, only text format is supported for
     * now.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content content = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Content|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * Optional. Input content to corroborate, only text format is supported for
     * now.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content content = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Content $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Optional. Facts used to generate the text can also be used to corroborate
     * the text.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Fact facts = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFacts()
    {
        return $this->facts;
    }

    /**
     * Optional. Facts used to generate the text can also be used to corroborate
     * the text.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Fact facts = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Fact>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Fact::class);
        $this->facts = $arr;

        return $this;
    }

    /**
     * Optional. Parameters that can be set to override default settings per
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CorroborateContentRequest.Parameters parameters = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\CorroborateContentRequest\Parameters|null
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * Optional. Parameters that can be set to override default settings per
     * request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CorroborateContentRequest.Parameters parameters = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\CorroborateContentRequest\Parameters $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CorroborateContentRequest\Parameters::class);
        $this->parameters = $var;

        return $this;
    }

}

