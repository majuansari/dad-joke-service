<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dad_jokes.proto

namespace DadJoke;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DadJoke.DadJokeRequest</code>
 */
class DadJokeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string keyword = 1;</code>
     */
    private $keyword = '';

    public function __construct() {
        \GPBMetadata\DadJokes::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string keyword = 1;</code>
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Generated from protobuf field <code>string keyword = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword = $var;

        return $this;
    }

}

