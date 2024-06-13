<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a Repository.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.CreateRepositoryRequest</code>
 */
class CreateRepositoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The connection to contain the repository. If the request is part
     * of a BatchCreateRepositoriesRequest, this field should be empty or match
     * the parent specified there.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The repository to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.Repository repository = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $repository = null;
    /**
     * Required. The ID to use for the repository, which will become the final
     * component of the repository's resource name. This ID should be unique in
     * the connection. Allows alphanumeric characters and any of
     * -._~%!$&'()*+,;=&#64;.
     *
     * Generated from protobuf field <code>string repository_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $repository_id = '';

    /**
     * @param string                            $parent       Required. The connection to contain the repository. If the request is part
     *                                                        of a BatchCreateRepositoriesRequest, this field should be empty or match
     *                                                        the parent specified there. Please see
     *                                                        {@see RepositoryManagerClient::connectionName()} for help formatting this field.
     * @param \Google\Cloud\Build\V2\Repository $repository   Required. The repository to create.
     * @param string                            $repositoryId Required. The ID to use for the repository, which will become the final
     *                                                        component of the repository's resource name. This ID should be unique in
     *                                                        the connection. Allows alphanumeric characters and any of
     *                                                        -._~%!$&'()*+,;=&#64;.
     *
     * @return \Google\Cloud\Build\V2\CreateRepositoryRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Build\V2\Repository $repository, string $repositoryId): self
    {
        return (new self())
            ->setParent($parent)
            ->setRepository($repository)
            ->setRepositoryId($repositoryId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The connection to contain the repository. If the request is part
     *           of a BatchCreateRepositoriesRequest, this field should be empty or match
     *           the parent specified there.
     *     @type \Google\Cloud\Build\V2\Repository $repository
     *           Required. The repository to create.
     *     @type string $repository_id
     *           Required. The ID to use for the repository, which will become the final
     *           component of the repository's resource name. This ID should be unique in
     *           the connection. Allows alphanumeric characters and any of
     *           -._~%!$&'()*+,;=&#64;.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The connection to contain the repository. If the request is part
     * of a BatchCreateRepositoriesRequest, this field should be empty or match
     * the parent specified there.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The connection to contain the repository. If the request is part
     * of a BatchCreateRepositoriesRequest, this field should be empty or match
     * the parent specified there.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The repository to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.Repository repository = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Build\V2\Repository|null
     */
    public function getRepository()
    {
        return $this->repository;
    }

    public function hasRepository()
    {
        return isset($this->repository);
    }

    public function clearRepository()
    {
        unset($this->repository);
    }

    /**
     * Required. The repository to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.Repository repository = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Build\V2\Repository $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V2\Repository::class);
        $this->repository = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the repository, which will become the final
     * component of the repository's resource name. This ID should be unique in
     * the connection. Allows alphanumeric characters and any of
     * -._~%!$&'()*+,;=&#64;.
     *
     * Generated from protobuf field <code>string repository_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRepositoryId()
    {
        return $this->repository_id;
    }

    /**
     * Required. The ID to use for the repository, which will become the final
     * component of the repository's resource name. This ID should be unique in
     * the connection. Allows alphanumeric characters and any of
     * -._~%!$&'()*+,;=&#64;.
     *
     * Generated from protobuf field <code>string repository_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRepositoryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository_id = $var;

        return $this;
    }

}

