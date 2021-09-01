<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/streaming.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifies a pubsub location to use for transferring data into or
 * out of a streaming Dataflow job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.PubsubLocation</code>
 */
class PubsubLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * A pubsub topic, in the form of
     * "pubsub.googleapis.com/topics/<project-id>/<topic-name>"
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    private $topic = '';
    /**
     * A pubsub subscription, in the form of
     * "pubsub.googleapis.com/subscriptions/<project-id>/<subscription-name>"
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     */
    private $subscription = '';
    /**
     * If set, contains a pubsub label from which to extract record timestamps.
     * If left empty, record timestamps will be generated upon arrival.
     *
     * Generated from protobuf field <code>string timestamp_label = 3;</code>
     */
    private $timestamp_label = '';
    /**
     * If set, contains a pubsub label from which to extract record ids.
     * If left empty, record deduplication will be strictly best effort.
     *
     * Generated from protobuf field <code>string id_label = 4;</code>
     */
    private $id_label = '';
    /**
     * Indicates whether the pipeline allows late-arriving data.
     *
     * Generated from protobuf field <code>bool drop_late_data = 5;</code>
     */
    private $drop_late_data = false;
    /**
     * If set, specifies the pubsub subscription that will be used for tracking
     * custom time timestamps for watermark estimation.
     *
     * Generated from protobuf field <code>string tracking_subscription = 6;</code>
     */
    private $tracking_subscription = '';
    /**
     * If true, then the client has requested to get pubsub attributes.
     *
     * Generated from protobuf field <code>bool with_attributes = 7;</code>
     */
    private $with_attributes = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           A pubsub topic, in the form of
     *           "pubsub.googleapis.com/topics/<project-id>/<topic-name>"
     *     @type string $subscription
     *           A pubsub subscription, in the form of
     *           "pubsub.googleapis.com/subscriptions/<project-id>/<subscription-name>"
     *     @type string $timestamp_label
     *           If set, contains a pubsub label from which to extract record timestamps.
     *           If left empty, record timestamps will be generated upon arrival.
     *     @type string $id_label
     *           If set, contains a pubsub label from which to extract record ids.
     *           If left empty, record deduplication will be strictly best effort.
     *     @type bool $drop_late_data
     *           Indicates whether the pipeline allows late-arriving data.
     *     @type string $tracking_subscription
     *           If set, specifies the pubsub subscription that will be used for tracking
     *           custom time timestamps for watermark estimation.
     *     @type bool $with_attributes
     *           If true, then the client has requested to get pubsub attributes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Streaming::initOnce();
        parent::__construct($data);
    }

    /**
     * A pubsub topic, in the form of
     * "pubsub.googleapis.com/topics/<project-id>/<topic-name>"
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * A pubsub topic, in the form of
     * "pubsub.googleapis.com/topics/<project-id>/<topic-name>"
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * A pubsub subscription, in the form of
     * "pubsub.googleapis.com/subscriptions/<project-id>/<subscription-name>"
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * A pubsub subscription, in the form of
     * "pubsub.googleapis.com/subscriptions/<project-id>/<subscription-name>"
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
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
     * If set, contains a pubsub label from which to extract record timestamps.
     * If left empty, record timestamps will be generated upon arrival.
     *
     * Generated from protobuf field <code>string timestamp_label = 3;</code>
     * @return string
     */
    public function getTimestampLabel()
    {
        return $this->timestamp_label;
    }

    /**
     * If set, contains a pubsub label from which to extract record timestamps.
     * If left empty, record timestamps will be generated upon arrival.
     *
     * Generated from protobuf field <code>string timestamp_label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTimestampLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->timestamp_label = $var;

        return $this;
    }

    /**
     * If set, contains a pubsub label from which to extract record ids.
     * If left empty, record deduplication will be strictly best effort.
     *
     * Generated from protobuf field <code>string id_label = 4;</code>
     * @return string
     */
    public function getIdLabel()
    {
        return $this->id_label;
    }

    /**
     * If set, contains a pubsub label from which to extract record ids.
     * If left empty, record deduplication will be strictly best effort.
     *
     * Generated from protobuf field <code>string id_label = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIdLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->id_label = $var;

        return $this;
    }

    /**
     * Indicates whether the pipeline allows late-arriving data.
     *
     * Generated from protobuf field <code>bool drop_late_data = 5;</code>
     * @return bool
     */
    public function getDropLateData()
    {
        return $this->drop_late_data;
    }

    /**
     * Indicates whether the pipeline allows late-arriving data.
     *
     * Generated from protobuf field <code>bool drop_late_data = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDropLateData($var)
    {
        GPBUtil::checkBool($var);
        $this->drop_late_data = $var;

        return $this;
    }

    /**
     * If set, specifies the pubsub subscription that will be used for tracking
     * custom time timestamps for watermark estimation.
     *
     * Generated from protobuf field <code>string tracking_subscription = 6;</code>
     * @return string
     */
    public function getTrackingSubscription()
    {
        return $this->tracking_subscription;
    }

    /**
     * If set, specifies the pubsub subscription that will be used for tracking
     * custom time timestamps for watermark estimation.
     *
     * Generated from protobuf field <code>string tracking_subscription = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_subscription = $var;

        return $this;
    }

    /**
     * If true, then the client has requested to get pubsub attributes.
     *
     * Generated from protobuf field <code>bool with_attributes = 7;</code>
     * @return bool
     */
    public function getWithAttributes()
    {
        return $this->with_attributes;
    }

    /**
     * If true, then the client has requested to get pubsub attributes.
     *
     * Generated from protobuf field <code>bool with_attributes = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setWithAttributes($var)
    {
        GPBUtil::checkBool($var);
        $this->with_attributes = $var;

        return $this;
    }

}
