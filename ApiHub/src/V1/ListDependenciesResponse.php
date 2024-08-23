<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The
 * [ListDependencies][google.cloud.apihub.v1.ApiHubDependencies.ListDependencies]
 * method's response.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.ListDependenciesResponse</code>
 */
class ListDependenciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The dependency resources present in the API hub.
     * Only following field will be populated in the response: name.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Dependency dependencies = 1;</code>
     */
    private $dependencies;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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
     *     @type array<\Google\Cloud\ApiHub\V1\Dependency>|\Google\Protobuf\Internal\RepeatedField $dependencies
     *           The dependency resources present in the API hub.
     *           Only following field will be populated in the response: name.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * The dependency resources present in the API hub.
     * Only following field will be populated in the response: name.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Dependency dependencies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * The dependency resources present in the API hub.
     * Only following field will be populated in the response: name.
     *
     * Generated from protobuf field <code>repeated .google.cloud.apihub.v1.Dependency dependencies = 1;</code>
     * @param array<\Google\Cloud\ApiHub\V1\Dependency>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDependencies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApiHub\V1\Dependency::class);
        $this->dependencies = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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

