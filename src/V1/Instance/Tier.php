<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1\Instance;

use UnexpectedValueException;

/**
 * Available service tiers to choose from
 *
 * Protobuf type <code>google.cloud.redis.v1.Instance.Tier</code>
 */
class Tier
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>TIER_UNSPECIFIED = 0;</code>
     */
    const TIER_UNSPECIFIED = 0;
    /**
     * BASIC tier: standalone instance
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * STANDARD_HA tier: highly available primary/replica instances
     *
     * Generated from protobuf enum <code>STANDARD_HA = 3;</code>
     */
    const STANDARD_HA = 3;

    private static $valueToName = [
        self::TIER_UNSPECIFIED => 'TIER_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::STANDARD_HA => 'STANDARD_HA',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


