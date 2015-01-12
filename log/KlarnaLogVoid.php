<?php

/**
 * Void implementation of the KlarnaLogInterface
 */
class KlarnaLogVoid implements KlarnaLogInterface
{
    public function request($method, $data)
    {
    }

    public function response($method, $data, $requestId)
    {
    }

    public function error($method, $message, $code, $requestId)
    {
    }
}
