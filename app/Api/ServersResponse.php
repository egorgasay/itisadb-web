<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: balancer.proto

namespace App\Api;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ServersResponse</code>
 */
class ServersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string serversInfo = 1;</code>
     */
    protected $serversInfo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serversInfo
     * }
     */
    public function __construct($data = NULL) {
        \App\GPBMetadata\Balancer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string serversInfo = 1;</code>
     * @return string
     */
    public function getServersInfo()
    {
        return $this->serversInfo;
    }

    /**
     * Generated from protobuf field <code>string serversInfo = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServersInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->serversInfo = $var;

        return $this;
    }

}

