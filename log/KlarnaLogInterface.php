<?php
interface KlarnaLogInterface
{
    /**
     * Logs request and returns ID
     *
     * @param $method
     * @param $data
     * @return int
     */
    public function request($method, $data);

    /**
     * Logs response
     *
     * @param $method
     * @param $data
     * @param $requestId
     */
    public function response($method, $data, $requestId);

    /**
     * Logs error
     *
     * @param $method
     * @param $message
     * @param $code
     * @param $requestId
     */
    public function error($method, $message, $code, $requestId);
}
