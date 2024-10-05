<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for a list spaces request.
 *
 * Generated from protobuf message <code>google.chat.v1.ListSpacesResponse</code>
 */
class ListSpacesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of spaces in the requested (or first) page.
     * Note: The `permissionSettings` field is not returned in the Space
     * object for list requests.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.Space spaces = 1;</code>
     */
    private $spaces;
    /**
     * You can send a token as `pageToken` to retrieve the next page of
     * results. If empty, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Apps\Chat\V1\Space>|\Google\Protobuf\Internal\RepeatedField $spaces
     *           List of spaces in the requested (or first) page.
     *           Note: The `permissionSettings` field is not returned in the Space
     *           object for list requests.
     *     @type string $next_page_token
     *           You can send a token as `pageToken` to retrieve the next page of
     *           results. If empty, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Space::initOnce();
        parent::__construct($data);
    }

    /**
     * List of spaces in the requested (or first) page.
     * Note: The `permissionSettings` field is not returned in the Space
     * object for list requests.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.Space spaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpaces()
    {
        return $this->spaces;
    }

    /**
     * List of spaces in the requested (or first) page.
     * Note: The `permissionSettings` field is not returned in the Space
     * object for list requests.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.Space spaces = 1;</code>
     * @param array<\Google\Apps\Chat\V1\Space>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Chat\V1\Space::class);
        $this->spaces = $arr;

        return $this;
    }

    /**
     * You can send a token as `pageToken` to retrieve the next page of
     * results. If empty, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * You can send a token as `pageToken` to retrieve the next page of
     * results. If empty, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

