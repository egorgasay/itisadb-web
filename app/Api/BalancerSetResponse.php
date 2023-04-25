<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: balancer.proto

namespace App\Api;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.BalancerSetResponse</code>
 */
class BalancerSetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string status = 1;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>int32 savedTo = 2;</code>
     */
    protected $savedTo = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $status
     *     @type int $savedTo
     * }
     */
    public function __construct($data = NULL) {
        \App\GPBMetadata\Balancer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string status = 1;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 savedTo = 2;</code>
     * @return int
     */
    public function getSavedTo()
    {
        return $this->savedTo;
    }

    /**
     * Generated from protobuf field <code>int32 savedTo = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSavedTo($var)
    {
        GPBUtil::checkInt32($var);
        $this->savedTo = $var;

        return $this;
    }

}

