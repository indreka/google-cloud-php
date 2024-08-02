<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to update a phrase matcher.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.UpdatePhraseMatcherRequest</code>
 */
class UpdatePhraseMatcherRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new values for the phrase matcher.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatcher phrase_matcher = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $phrase_matcher = null;
    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ContactCenterInsights\V1\PhraseMatcher $phraseMatcher Required. The new values for the phrase matcher.
     * @param \Google\Protobuf\FieldMask                           $updateMask    The list of fields to be updated.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\UpdatePhraseMatcherRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ContactCenterInsights\V1\PhraseMatcher $phraseMatcher, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setPhraseMatcher($phraseMatcher)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\PhraseMatcher $phrase_matcher
     *           Required. The new values for the phrase matcher.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new values for the phrase matcher.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatcher phrase_matcher = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\PhraseMatcher|null
     */
    public function getPhraseMatcher()
    {
        return $this->phrase_matcher;
    }

    public function hasPhraseMatcher()
    {
        return isset($this->phrase_matcher);
    }

    public function clearPhraseMatcher()
    {
        unset($this->phrase_matcher);
    }

    /**
     * Required. The new values for the phrase matcher.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.PhraseMatcher phrase_matcher = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\PhraseMatcher $var
     * @return $this
     */
    public function setPhraseMatcher($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\PhraseMatcher::class);
        $this->phrase_matcher = $var;

        return $this;
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

