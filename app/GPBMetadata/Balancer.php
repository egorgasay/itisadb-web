<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: balancer.proto

namespace App\GPBMetadata;

class Balancer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
balancer.protoapi"@
BalancerSetRequest
key (	
value (	
server ("1
BalancerGetRequest
key (	
server ("S
ConnectRequest
Address (	
Total (
	Available (
server (")
DisconnectRequest
serverNumber ("
ServersRequest"$
BalancerGetResponse
value (	"6
BalancerSetResponse
status (	
savedTo ("7
ConnectResponse
status (	
serverNumber ("
DisconnectResponse"&
ServersResponse
serversInfo (	2�
Balancer:
Set.api.BalancerSetRequest.api.BalancerSetResponse" :
Get.api.BalancerGetRequest.api.BalancerGetResponse" 6
Connect.api.ConnectRequest.api.ConnectResponse" ?

Disconnect.api.DisconnectRequest.api.DisconnectResponse" 6
Servers.api.ServersRequest.api.ServersResponse" BZ./bproto3'
        , true);

        static::$is_initialized = true;
    }
}

