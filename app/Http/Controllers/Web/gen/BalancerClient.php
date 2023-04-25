<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Http\Controllers\Web\gen;

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
     * @param grpc\Api\BalancerSetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Set(grpc\Api\BalancerSetRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Set',
        $argument,
        ['\App\Http\Controllers\Web\gen-grpc\Api\BalancerSetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param grpc\Api\BalancerGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Get(grpc\Api\BalancerGetRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Get',
        $argument,
        ['\App\Http\Controllers\Web\gen-grpc\Api\BalancerGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param grpc\Api\ConnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Connect(grpc\Api\ConnectRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Connect',
        $argument,
        ['\App\Http\Controllers\Web\gen-grpc\Api\ConnectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param grpc\Api\DisconnectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Disconnect(grpc\Api\DisconnectRequest $argument,
                                                          $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Disconnect',
        $argument,
        ['\App\Http\Controllers\Web\gen-grpc\Api\DisconnectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param grpc\Api\ServersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Servers(grpc\Api\ServersRequest $argument,
                                                    $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Balancer/Servers',
        $argument,
        ['\App\Http\Controllers\Web\gen-grpc\Api\ServersResponse', 'decode'],
        $metadata, $options);
    }

}
