<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/reaction.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An emoji that is used as a reaction to a message.
 *
 * Generated from protobuf message <code>google.chat.v1.Emoji</code>
 */
class Emoji extends \Google\Protobuf\Internal\Message
{
    protected $content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $unicode
     *           Optional. A basic emoji represented by a unicode string.
     *     @type \Google\Apps\Chat\V1\CustomEmoji $custom_emoji
     *           Output only. A custom emoji.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Reaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A basic emoji represented by a unicode string.
     *
     * Generated from protobuf field <code>string unicode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUnicode()
    {
        return $this->readOneof(1);
    }

    public function hasUnicode()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. A basic emoji represented by a unicode string.
     *
     * Generated from protobuf field <code>string unicode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUnicode($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. A custom emoji.
     *
     * Generated from protobuf field <code>.google.chat.v1.CustomEmoji custom_emoji = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Apps\Chat\V1\CustomEmoji|null
     */
    public function getCustomEmoji()
    {
        return $this->readOneof(2);
    }

    public function hasCustomEmoji()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output only. A custom emoji.
     *
     * Generated from protobuf field <code>.google.chat.v1.CustomEmoji custom_emoji = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Apps\Chat\V1\CustomEmoji $var
     * @return $this
     */
    public function setCustomEmoji($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\CustomEmoji::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

}

