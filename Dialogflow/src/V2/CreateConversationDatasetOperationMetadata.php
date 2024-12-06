<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_dataset.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for [CreateConversationDataset][].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateConversationDatasetOperationMetadata</code>
 */
class CreateConversationDatasetOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the conversation dataset that will be created. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversationDatasets/<Conversation Dataset Id>`
     *
     * Generated from protobuf field <code>string conversation_dataset = 1 [(.google.api.resource_reference) = {</code>
     */
    private $conversation_dataset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation_dataset
     *           The resource name of the conversation dataset that will be created. Format:
     *           `projects/<Project ID>/locations/<Location
     *           ID>/conversationDatasets/<Conversation Dataset Id>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationDataset::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the conversation dataset that will be created. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversationDatasets/<Conversation Dataset Id>`
     *
     * Generated from protobuf field <code>string conversation_dataset = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getConversationDataset()
    {
        return $this->conversation_dataset;
    }

    /**
     * The resource name of the conversation dataset that will be created. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversationDatasets/<Conversation Dataset Id>`
     *
     * Generated from protobuf field <code>string conversation_dataset = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConversationDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_dataset = $var;

        return $this;
    }

}

