<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to detect user's intent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DetectIntentRequest</code>
 */
class DetectIntentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session this query is sent to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<Session
     * ID>` or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     */
    protected $query_params = null;
    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query_input = null;
    /**
     * Instructs the speech synthesizer how to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.OutputAudioConfig output_audio_config = 4;</code>
     */
    protected $output_audio_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The name of the session this query is sent to.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<Session
     *           ID>` or
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     *           If `Environment ID` is not specified, we assume default 'draft'
     *           environment.
     *           It's up to the API caller to choose an appropriate `Session ID`. It can be
     *           a random number or some type of session identifiers (preferably hashed).
     *           The length of the `Session ID` must not exceed 36 characters.
     *           For more information, see the [sessions
     *           guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     *           Note: Always use agent versions for production traffic.
     *           See [Versions and
     *           environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *     @type \Google\Cloud\Dialogflow\Cx\V3\QueryParameters $query_params
     *           The parameters of this query.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\QueryInput $query_input
     *           Required. The input specification.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig $output_audio_config
     *           Instructs the speech synthesizer how to generate the output audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session this query is sent to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<Session
     * ID>` or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The name of the session this query is sent to.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/sessions/<Session
     * ID>` or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>/sessions/<SessionID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment.
     * It's up to the API caller to choose an appropriate `Session ID`. It can be
     * a random number or some type of session identifiers (preferably hashed).
     * The length of the `Session ID` must not exceed 36 characters.
     * For more information, see the [sessions
     * guide](https://cloud.google.com/dialogflow/cx/docs/concept/session).
     * Note: Always use agent versions for production traffic.
     * See [Versions and
     * environments](https://cloud.google.com/dialogflow/cx/docs/concept/version).
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\QueryParameters|null
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    public function hasQueryParams()
    {
        return isset($this->query_params);
    }

    public function clearQueryParams()
    {
        unset($this->query_params);
    }

    /**
     * The parameters of this query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryParameters query_params = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\QueryInput|null
     */
    public function getQueryInput()
    {
        return $this->query_input;
    }

    public function hasQueryInput()
    {
        return isset($this->query_input);
    }

    public function clearQueryInput()
    {
        unset($this->query_input);
    }

    /**
     * Required. The input specification.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.QueryInput query_input = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\QueryInput $var
     * @return $this
     */
    public function setQueryInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\QueryInput::class);
        $this->query_input = $var;

        return $this;
    }

    /**
     * Instructs the speech synthesizer how to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.OutputAudioConfig output_audio_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig|null
     */
    public function getOutputAudioConfig()
    {
        return $this->output_audio_config;
    }

    public function hasOutputAudioConfig()
    {
        return isset($this->output_audio_config);
    }

    public function clearOutputAudioConfig()
    {
        unset($this->output_audio_config);
    }

    /**
     * Instructs the speech synthesizer how to generate the output audio.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.OutputAudioConfig output_audio_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig $var
     * @return $this
     */
    public function setOutputAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\OutputAudioConfig::class);
        $this->output_audio_config = $var;

        return $this;
    }

}

