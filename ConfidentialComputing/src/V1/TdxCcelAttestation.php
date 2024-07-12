<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace Google\Cloud\ConfidentialComputing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A TDX Attestation quote.
 *
 * Generated from protobuf message <code>google.cloud.confidentialcomputing.v1.TdxCcelAttestation</code>
 */
class TdxCcelAttestation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Confidential Computing Event Log (CCEL) ACPI table. Formatted
     * as described in the ACPI Specification 6.5.
     *
     * Generated from protobuf field <code>bytes ccel_acpi_table = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ccel_acpi_table = '';
    /**
     * Optional. The CCEL event log. Formatted as described in the UEFI 2.10.
     *
     * Generated from protobuf field <code>bytes ccel_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ccel_data = '';
    /**
     * Optional. An Event Log containing additional events measured into the RTMR
     * that are not already present in the CCEL.
     *
     * Generated from protobuf field <code>bytes canonical_event_log = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $canonical_event_log = '';
    /**
     * Optional. The TDX attestation quote from the guest. It contains the RTMR
     * values.
     *
     * Generated from protobuf field <code>bytes td_quote = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $td_quote = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ccel_acpi_table
     *           Optional. The Confidential Computing Event Log (CCEL) ACPI table. Formatted
     *           as described in the ACPI Specification 6.5.
     *     @type string $ccel_data
     *           Optional. The CCEL event log. Formatted as described in the UEFI 2.10.
     *     @type string $canonical_event_log
     *           Optional. An Event Log containing additional events measured into the RTMR
     *           that are not already present in the CCEL.
     *     @type string $td_quote
     *           Optional. The TDX attestation quote from the guest. It contains the RTMR
     *           values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Confidentialcomputing\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Confidential Computing Event Log (CCEL) ACPI table. Formatted
     * as described in the ACPI Specification 6.5.
     *
     * Generated from protobuf field <code>bytes ccel_acpi_table = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCcelAcpiTable()
    {
        return $this->ccel_acpi_table;
    }

    /**
     * Optional. The Confidential Computing Event Log (CCEL) ACPI table. Formatted
     * as described in the ACPI Specification 6.5.
     *
     * Generated from protobuf field <code>bytes ccel_acpi_table = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCcelAcpiTable($var)
    {
        GPBUtil::checkString($var, False);
        $this->ccel_acpi_table = $var;

        return $this;
    }

    /**
     * Optional. The CCEL event log. Formatted as described in the UEFI 2.10.
     *
     * Generated from protobuf field <code>bytes ccel_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCcelData()
    {
        return $this->ccel_data;
    }

    /**
     * Optional. The CCEL event log. Formatted as described in the UEFI 2.10.
     *
     * Generated from protobuf field <code>bytes ccel_data = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCcelData($var)
    {
        GPBUtil::checkString($var, False);
        $this->ccel_data = $var;

        return $this;
    }

    /**
     * Optional. An Event Log containing additional events measured into the RTMR
     * that are not already present in the CCEL.
     *
     * Generated from protobuf field <code>bytes canonical_event_log = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCanonicalEventLog()
    {
        return $this->canonical_event_log;
    }

    /**
     * Optional. An Event Log containing additional events measured into the RTMR
     * that are not already present in the CCEL.
     *
     * Generated from protobuf field <code>bytes canonical_event_log = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCanonicalEventLog($var)
    {
        GPBUtil::checkString($var, False);
        $this->canonical_event_log = $var;

        return $this;
    }

    /**
     * Optional. The TDX attestation quote from the guest. It contains the RTMR
     * values.
     *
     * Generated from protobuf field <code>bytes td_quote = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTdQuote()
    {
        return $this->td_quote;
    }

    /**
     * Optional. The TDX attestation quote from the guest. It contains the RTMR
     * values.
     *
     * Generated from protobuf field <code>bytes td_quote = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTdQuote($var)
    {
        GPBUtil::checkString($var, False);
        $this->td_quote = $var;

        return $this;
    }

}

