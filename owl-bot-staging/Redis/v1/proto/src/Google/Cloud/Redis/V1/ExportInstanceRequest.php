<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [Export][google.cloud.redis.v1.CloudRedis.ExportInstance].
 *
 * Generated from protobuf message <code>google.cloud.redis.v1.ExportInstanceRequest</code>
 */
class ExportInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Redis instance resource name using the form:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. Specify data to be exported.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.OutputConfig output_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Redis instance resource name using the form:
     *               `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     *           where `location_id` refers to a GCP region.
     *     @type \Google\Cloud\Redis\V1\OutputConfig $output_config
     *           Required. Specify data to be exported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Redis instance resource name using the form:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Redis instance resource name using the form:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region.
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
     * Required. Specify data to be exported.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.OutputConfig output_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Redis\V1\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Required. Specify data to be exported.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.OutputConfig output_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Redis\V1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\V1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

