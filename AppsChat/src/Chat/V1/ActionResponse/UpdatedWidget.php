<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/message.proto

namespace Google\Apps\Chat\V1\ActionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For `selectionInput` widgets, returns autocomplete suggestions for a
 * multiselect menu.
 *
 * Generated from protobuf message <code>google.chat.v1.ActionResponse.UpdatedWidget</code>
 */
class UpdatedWidget extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the updated widget. The ID must match the one for the
     * widget that triggered the update request.
     *
     * Generated from protobuf field <code>string widget = 2;</code>
     */
    protected $widget = '';
    protected $updated_widget;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Chat\V1\ActionResponse\SelectionItems $suggestions
     *           List of widget autocomplete results
     *     @type string $widget
     *           The ID of the updated widget. The ID must match the one for the
     *           widget that triggered the update request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * List of widget autocomplete results
     *
     * Generated from protobuf field <code>.google.chat.v1.ActionResponse.SelectionItems suggestions = 1;</code>
     * @return \Google\Apps\Chat\V1\ActionResponse\SelectionItems|null
     */
    public function getSuggestions()
    {
        return $this->readOneof(1);
    }

    public function hasSuggestions()
    {
        return $this->hasOneof(1);
    }

    /**
     * List of widget autocomplete results
     *
     * Generated from protobuf field <code>.google.chat.v1.ActionResponse.SelectionItems suggestions = 1;</code>
     * @param \Google\Apps\Chat\V1\ActionResponse\SelectionItems $var
     * @return $this
     */
    public function setSuggestions($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\ActionResponse\SelectionItems::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The ID of the updated widget. The ID must match the one for the
     * widget that triggered the update request.
     *
     * Generated from protobuf field <code>string widget = 2;</code>
     * @return string
     */
    public function getWidget()
    {
        return $this->widget;
    }

    /**
     * The ID of the updated widget. The ID must match the one for the
     * widget that triggered the update request.
     *
     * Generated from protobuf field <code>string widget = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWidget($var)
    {
        GPBUtil::checkString($var, True);
        $this->widget = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedWidget()
    {
        return $this->whichOneof("updated_widget");
    }

}


