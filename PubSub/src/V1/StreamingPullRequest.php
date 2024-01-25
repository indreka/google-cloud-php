<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `StreamingPull` streaming RPC method. This request is used to
 * establish the initial stream as well as to stream acknowledgements and ack
 * deadline modifications from the client to the server.
 *
 * Generated from protobuf message <code>google.pubsub.v1.StreamingPullRequest</code>
 */
class StreamingPullRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The subscription for which to initialize the new stream. This
     * must be provided in the first request on the stream, and must not be set in
     * subsequent requests from client to server.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $subscription = '';
    /**
     * Optional. List of acknowledgement IDs for acknowledging previously received
     * messages (received on this stream or a different stream). If an ack ID has
     * expired, the corresponding message may be redelivered later. Acknowledging
     * a message more than once will not result in an error. If the
     * acknowledgement ID is malformed, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ack_ids;
    /**
     * Optional. The list of new ack deadlines for the IDs listed in
     * `modify_deadline_ack_ids`. The size of this list must be the same as the
     * size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     * with `INVALID_ARGUMENT`. Each element in this list is applied to the
     * element in the same position in `modify_deadline_ack_ids`. The new ack
     * deadline is with respect to the time this request was sent to the Pub/Sub
     * system. Must be >= 0. For example, if the value is 10, the new ack deadline
     * will expire 10 seconds after this request is received. If the value is 0,
     * the message is immediately made available for another streaming or
     * non-streaming pull request. If the value is < 0 (an error), the stream will
     * be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated int32 modify_deadline_seconds = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $modify_deadline_seconds;
    /**
     * Optional. List of acknowledgement IDs whose deadline will be modified based
     * on the corresponding element in `modify_deadline_seconds`. This field can
     * be used to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted.
     *
     * Generated from protobuf field <code>repeated string modify_deadline_ack_ids = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $modify_deadline_ack_ids;
    /**
     * Required. The ack deadline to use for the stream. This must be provided in
     * the first request on the stream, but it can also be updated on subsequent
     * requests from client to server. The minimum deadline you can specify is 10
     * seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 stream_ack_deadline_seconds = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $stream_ack_deadline_seconds = 0;
    /**
     * Optional. A unique identifier that is used to distinguish client instances
     * from each other. Only needs to be provided on the initial request. When a
     * stream disconnects and reconnects for the same stream, the client_id should
     * be set to the same value so that state associated with the old stream can
     * be transferred to the new stream. The same client_id should not be used for
     * different client instances.
     *
     * Generated from protobuf field <code>string client_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $client_id = '';
    /**
     * Optional. Flow control settings for the maximum number of outstanding
     * messages. When there are `max_outstanding_messages` currently sent to the
     * streaming pull client that have not yet been acked or nacked, the server
     * stops sending more messages. The sending of messages resumes once the
     * number of outstanding messages is less than this value. If the value is
     * <= 0, there is no limit to the number of outstanding messages. This
     * property can only be set on the initial StreamingPullRequest. If it is set
     * on a subsequent request, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>int64 max_outstanding_messages = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_outstanding_messages = 0;
    /**
     * Optional. Flow control settings for the maximum number of outstanding
     * bytes. When there are `max_outstanding_bytes` or more worth of messages
     * currently sent to the streaming pull client that have not yet been acked or
     * nacked, the server will stop sending more messages. The sending of messages
     * resumes once the number of outstanding bytes is less than this value. If
     * the value is <= 0, there is no limit to the number of outstanding bytes.
     * This property can only be set on the initial StreamingPullRequest. If it is
     * set on a subsequent request, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>int64 max_outstanding_bytes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_outstanding_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           Required. The subscription for which to initialize the new stream. This
     *           must be provided in the first request on the stream, and must not be set in
     *           subsequent requests from client to server.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ack_ids
     *           Optional. List of acknowledgement IDs for acknowledging previously received
     *           messages (received on this stream or a different stream). If an ack ID has
     *           expired, the corresponding message may be redelivered later. Acknowledging
     *           a message more than once will not result in an error. If the
     *           acknowledgement ID is malformed, the stream will be aborted with status
     *           `INVALID_ARGUMENT`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $modify_deadline_seconds
     *           Optional. The list of new ack deadlines for the IDs listed in
     *           `modify_deadline_ack_ids`. The size of this list must be the same as the
     *           size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     *           with `INVALID_ARGUMENT`. Each element in this list is applied to the
     *           element in the same position in `modify_deadline_ack_ids`. The new ack
     *           deadline is with respect to the time this request was sent to the Pub/Sub
     *           system. Must be >= 0. For example, if the value is 10, the new ack deadline
     *           will expire 10 seconds after this request is received. If the value is 0,
     *           the message is immediately made available for another streaming or
     *           non-streaming pull request. If the value is < 0 (an error), the stream will
     *           be aborted with status `INVALID_ARGUMENT`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $modify_deadline_ack_ids
     *           Optional. List of acknowledgement IDs whose deadline will be modified based
     *           on the corresponding element in `modify_deadline_seconds`. This field can
     *           be used to indicate that more time is needed to process a message by the
     *           subscriber, or to make the message available for redelivery if the
     *           processing was interrupted.
     *     @type int $stream_ack_deadline_seconds
     *           Required. The ack deadline to use for the stream. This must be provided in
     *           the first request on the stream, but it can also be updated on subsequent
     *           requests from client to server. The minimum deadline you can specify is 10
     *           seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *     @type string $client_id
     *           Optional. A unique identifier that is used to distinguish client instances
     *           from each other. Only needs to be provided on the initial request. When a
     *           stream disconnects and reconnects for the same stream, the client_id should
     *           be set to the same value so that state associated with the old stream can
     *           be transferred to the new stream. The same client_id should not be used for
     *           different client instances.
     *     @type int|string $max_outstanding_messages
     *           Optional. Flow control settings for the maximum number of outstanding
     *           messages. When there are `max_outstanding_messages` currently sent to the
     *           streaming pull client that have not yet been acked or nacked, the server
     *           stops sending more messages. The sending of messages resumes once the
     *           number of outstanding messages is less than this value. If the value is
     *           <= 0, there is no limit to the number of outstanding messages. This
     *           property can only be set on the initial StreamingPullRequest. If it is set
     *           on a subsequent request, the stream will be aborted with status
     *           `INVALID_ARGUMENT`.
     *     @type int|string $max_outstanding_bytes
     *           Optional. Flow control settings for the maximum number of outstanding
     *           bytes. When there are `max_outstanding_bytes` or more worth of messages
     *           currently sent to the streaming pull client that have not yet been acked or
     *           nacked, the server will stop sending more messages. The sending of messages
     *           resumes once the number of outstanding bytes is less than this value. If
     *           the value is <= 0, there is no limit to the number of outstanding bytes.
     *           This property can only be set on the initial StreamingPullRequest. If it is
     *           set on a subsequent request, the stream will be aborted with status
     *           `INVALID_ARGUMENT`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The subscription for which to initialize the new stream. This
     * must be provided in the first request on the stream, and must not be set in
     * subsequent requests from client to server.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. The subscription for which to initialize the new stream. This
     * must be provided in the first request on the stream, and must not be set in
     * subsequent requests from client to server.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Optional. List of acknowledgement IDs for acknowledging previously received
     * messages (received on this stream or a different stream). If an ack ID has
     * expired, the corresponding message may be redelivered later. Acknowledging
     * a message more than once will not result in an error. If the
     * acknowledgement ID is malformed, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAckIds()
    {
        return $this->ack_ids;
    }

    /**
     * Optional. List of acknowledgement IDs for acknowledging previously received
     * messages (received on this stream or a different stream). If an ack ID has
     * expired, the corresponding message may be redelivered later. Acknowledging
     * a message more than once will not result in an error. If the
     * acknowledgement ID is malformed, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated string ack_ids = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ack_ids = $arr;

        return $this;
    }

    /**
     * Optional. The list of new ack deadlines for the IDs listed in
     * `modify_deadline_ack_ids`. The size of this list must be the same as the
     * size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     * with `INVALID_ARGUMENT`. Each element in this list is applied to the
     * element in the same position in `modify_deadline_ack_ids`. The new ack
     * deadline is with respect to the time this request was sent to the Pub/Sub
     * system. Must be >= 0. For example, if the value is 10, the new ack deadline
     * will expire 10 seconds after this request is received. If the value is 0,
     * the message is immediately made available for another streaming or
     * non-streaming pull request. If the value is < 0 (an error), the stream will
     * be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated int32 modify_deadline_seconds = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModifyDeadlineSeconds()
    {
        return $this->modify_deadline_seconds;
    }

    /**
     * Optional. The list of new ack deadlines for the IDs listed in
     * `modify_deadline_ack_ids`. The size of this list must be the same as the
     * size of `modify_deadline_ack_ids`. If it differs the stream will be aborted
     * with `INVALID_ARGUMENT`. Each element in this list is applied to the
     * element in the same position in `modify_deadline_ack_ids`. The new ack
     * deadline is with respect to the time this request was sent to the Pub/Sub
     * system. Must be >= 0. For example, if the value is 10, the new ack deadline
     * will expire 10 seconds after this request is received. If the value is 0,
     * the message is immediately made available for another streaming or
     * non-streaming pull request. If the value is < 0 (an error), the stream will
     * be aborted with status `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>repeated int32 modify_deadline_seconds = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModifyDeadlineSeconds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->modify_deadline_seconds = $arr;

        return $this;
    }

    /**
     * Optional. List of acknowledgement IDs whose deadline will be modified based
     * on the corresponding element in `modify_deadline_seconds`. This field can
     * be used to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted.
     *
     * Generated from protobuf field <code>repeated string modify_deadline_ack_ids = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModifyDeadlineAckIds()
    {
        return $this->modify_deadline_ack_ids;
    }

    /**
     * Optional. List of acknowledgement IDs whose deadline will be modified based
     * on the corresponding element in `modify_deadline_seconds`. This field can
     * be used to indicate that more time is needed to process a message by the
     * subscriber, or to make the message available for redelivery if the
     * processing was interrupted.
     *
     * Generated from protobuf field <code>repeated string modify_deadline_ack_ids = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModifyDeadlineAckIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->modify_deadline_ack_ids = $arr;

        return $this;
    }

    /**
     * Required. The ack deadline to use for the stream. This must be provided in
     * the first request on the stream, but it can also be updated on subsequent
     * requests from client to server. The minimum deadline you can specify is 10
     * seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 stream_ack_deadline_seconds = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStreamAckDeadlineSeconds()
    {
        return $this->stream_ack_deadline_seconds;
    }

    /**
     * Required. The ack deadline to use for the stream. This must be provided in
     * the first request on the stream, but it can also be updated on subsequent
     * requests from client to server. The minimum deadline you can specify is 10
     * seconds. The maximum deadline you can specify is 600 seconds (10 minutes).
     *
     * Generated from protobuf field <code>int32 stream_ack_deadline_seconds = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStreamAckDeadlineSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->stream_ack_deadline_seconds = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier that is used to distinguish client instances
     * from each other. Only needs to be provided on the initial request. When a
     * stream disconnects and reconnects for the same stream, the client_id should
     * be set to the same value so that state associated with the old stream can
     * be transferred to the new stream. The same client_id should not be used for
     * different client instances.
     *
     * Generated from protobuf field <code>string client_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Optional. A unique identifier that is used to distinguish client instances
     * from each other. Only needs to be provided on the initial request. When a
     * stream disconnects and reconnects for the same stream, the client_id should
     * be set to the same value so that state associated with the old stream can
     * be transferred to the new stream. The same client_id should not be used for
     * different client instances.
     *
     * Generated from protobuf field <code>string client_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Optional. Flow control settings for the maximum number of outstanding
     * messages. When there are `max_outstanding_messages` currently sent to the
     * streaming pull client that have not yet been acked or nacked, the server
     * stops sending more messages. The sending of messages resumes once the
     * number of outstanding messages is less than this value. If the value is
     * <= 0, there is no limit to the number of outstanding messages. This
     * property can only be set on the initial StreamingPullRequest. If it is set
     * on a subsequent request, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>int64 max_outstanding_messages = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxOutstandingMessages()
    {
        return $this->max_outstanding_messages;
    }

    /**
     * Optional. Flow control settings for the maximum number of outstanding
     * messages. When there are `max_outstanding_messages` currently sent to the
     * streaming pull client that have not yet been acked or nacked, the server
     * stops sending more messages. The sending of messages resumes once the
     * number of outstanding messages is less than this value. If the value is
     * <= 0, there is no limit to the number of outstanding messages. This
     * property can only be set on the initial StreamingPullRequest. If it is set
     * on a subsequent request, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>int64 max_outstanding_messages = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxOutstandingMessages($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_outstanding_messages = $var;

        return $this;
    }

    /**
     * Optional. Flow control settings for the maximum number of outstanding
     * bytes. When there are `max_outstanding_bytes` or more worth of messages
     * currently sent to the streaming pull client that have not yet been acked or
     * nacked, the server will stop sending more messages. The sending of messages
     * resumes once the number of outstanding bytes is less than this value. If
     * the value is <= 0, there is no limit to the number of outstanding bytes.
     * This property can only be set on the initial StreamingPullRequest. If it is
     * set on a subsequent request, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>int64 max_outstanding_bytes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getMaxOutstandingBytes()
    {
        return $this->max_outstanding_bytes;
    }

    /**
     * Optional. Flow control settings for the maximum number of outstanding
     * bytes. When there are `max_outstanding_bytes` or more worth of messages
     * currently sent to the streaming pull client that have not yet been acked or
     * nacked, the server will stop sending more messages. The sending of messages
     * resumes once the number of outstanding bytes is less than this value. If
     * the value is <= 0, there is no limit to the number of outstanding bytes.
     * This property can only be set on the initial StreamingPullRequest. If it is
     * set on a subsequent request, the stream will be aborted with status
     * `INVALID_ARGUMENT`.
     *
     * Generated from protobuf field <code>int64 max_outstanding_bytes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxOutstandingBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_outstanding_bytes = $var;

        return $this;
    }

}

