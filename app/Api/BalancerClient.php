<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Api;

/**
 */
class BalancerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \App\Api\BalancerSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Set(\App\Api\BalancerSetRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Set',
        $argument,
        ['\App\Api\BalancerSetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Api\BalancerGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(\App\Api\BalancerGetRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Get',
        $argument,
        ['\App\Api\BalancerGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Api\ConnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Connect(\App\Api\ConnectRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Connect',
        $argument,
        ['\App\Api\ConnectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Api\DisconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Disconnect(\App\Api\DisconnectRequest $argument,
                                                          $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Disconnect',
        $argument,
        ['\App\Api\DisconnectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \App\Api\ServersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Servers(\App\Api\ServersRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Servers',
        $argument,
        ['\App\Api\ServersResponse', 'decode'],
        $metadata, $options);
    }

}
