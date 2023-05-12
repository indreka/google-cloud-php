<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for active A/B testing [Experiments][].
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.ExperimentInfo</code>
 */
class ExperimentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The fully qualified resource name of the experiment that provides the
     * serving config under test, should an active experiment exist. For example:
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/experiments/experiment_id`
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.resource_reference) = {</code>
     */
    private $experiment = '';
    protected $experiment_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\ExperimentInfo\ServingConfigExperiment $serving_config_experiment
     *           A/B test between existing Cloud Retail Search
     *           [ServingConfig][google.cloud.retail.v2.ServingConfig]s.
     *     @type string $experiment
     *           The fully qualified resource name of the experiment that provides the
     *           serving config under test, should an active experiment exist. For example:
     *           `projects/&#42;&#47;locations/global/catalogs/default_catalog/experiments/experiment_id`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * A/B test between existing Cloud Retail Search
     * [ServingConfig][google.cloud.retail.v2.ServingConfig]s.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ExperimentInfo.ServingConfigExperiment serving_config_experiment = 2;</code>
     * @return \Google\Cloud\Retail\V2\ExperimentInfo\ServingConfigExperiment|null
     */
    public function getServingConfigExperiment()
    {
        return $this->readOneof(2);
    }

    public function hasServingConfigExperiment()
    {
        return $this->hasOneof(2);
    }

    /**
     * A/B test between existing Cloud Retail Search
     * [ServingConfig][google.cloud.retail.v2.ServingConfig]s.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ExperimentInfo.ServingConfigExperiment serving_config_experiment = 2;</code>
     * @param \Google\Cloud\Retail\V2\ExperimentInfo\ServingConfigExperiment $var
     * @return $this
     */
    public function setServingConfigExperiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ExperimentInfo\ServingConfigExperiment::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The fully qualified resource name of the experiment that provides the
     * serving config under test, should an active experiment exist. For example:
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/experiments/experiment_id`
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    /**
     * The fully qualified resource name of the experiment that provides the
     * serving config under test, should an active experiment exist. For example:
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/experiments/experiment_id`
     *
     * Generated from protobuf field <code>string experiment = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->experiment = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExperimentMetadata()
    {
        return $this->whichOneof("experiment_metadata");
    }

}
