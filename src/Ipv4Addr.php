<?php

namespace std\Net;

/**
 * Based on Rust std::net
 */
abstract class Ipv4Addr
{
    abstract public function getOctets(): array;

    abstract public static function isBenchmarking();

    abstract public static function isBroadcast();

    abstract public static function isDocumentation();

    abstract public static function isGlobal();

    abstract public static function isIetf();

    abstract public static function isLink();

    abstract public static function isLoopback();

    abstract public static function isMulticast();

    abstract public static function isPrivate();

    abstract public static function isReserved();

    abstract public static function isShared();

    abstract public static function isUnspecified();

    abstract public static function toIpv6Compatible();

    abstract public static function toIpv6Mapped();

}
