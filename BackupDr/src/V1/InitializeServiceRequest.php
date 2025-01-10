<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupdr.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for initializing the service.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.InitializeServiceRequest</code>
 */
class InitializeServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the serviceConfig used to initialize the
     * service. Format:
     * `projects/{project_id}/locations/{location}/serviceConfig`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The resource type to which the default service config will be
     * applied. Examples include, "compute.googleapis.com/Instance" and
     * "storage.googleapis.com/Bucket".
     *
     * Generated from protobuf field <code>string resource_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $resource_type = '';
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the serviceConfig used to initialize the
     *           service. Format:
     *           `projects/{project_id}/locations/{location}/serviceConfig`.
     *     @type string $resource_type
     *           Required. The resource type to which the default service config will be
     *           applied. Examples include, "compute.googleapis.com/Instance" and
     *           "storage.googleapis.com/Bucket".
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupdr::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the serviceConfig used to initialize the
     * service. Format:
     * `projects/{project_id}/locations/{location}/serviceConfig`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the serviceConfig used to initialize the
     * service. Format:
     * `projects/{project_id}/locations/{location}/serviceConfig`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The resource type to which the default service config will be
     * applied. Examples include, "compute.googleapis.com/Instance" and
     * "storage.googleapis.com/Bucket".
     *
     * Generated from protobuf field <code>string resource_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Required. The resource type to which the default service config will be
     * applied. Examples include, "compute.googleapis.com/Instance" and
     * "storage.googleapis.com/Bucket".
     *
     * Generated from protobuf field <code>string resource_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

