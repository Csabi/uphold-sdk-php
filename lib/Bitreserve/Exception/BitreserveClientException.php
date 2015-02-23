<?php

namespace Bitreserve\Exception;

/**
 * BitreserveException.
 */
class BitreserveClientException extends \Exception
{
    /**
     * Constructor.
     *
     * @param string $message  Exception message
     * @param string $httpCode Http error code.
     * @param mixed  $response The response.
     * @param mixed  $request  The request.
     */
    public function __construct($message, $error = null, $httpCode = null, $response = null, $request = null)
    {
        parent::__construct($message);

        $this->message = $message;
        $this->error = $error;
        $this->httpCode = $httpCode;
        $this->response = $response;
        $this->request = $request;
    }

    /**
     * Get error.
     *
     * @return string The error string.
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Get the httpCode.
     *
     * @return int The http code.
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * Get the response.
     *
     * @return mixed The response object.
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get the request.
     *
     * @return mixed The request object.
     */
    public function getRequest()
    {
        return $this->request;
    }
}
