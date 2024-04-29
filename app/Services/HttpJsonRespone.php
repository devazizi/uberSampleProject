<?php

namespace App\Services;

class HttpJsonResponse
{

    public static function success(
        $data,
        $message = null,
        $headers = [],
        $httpStatusCode = 200
    ) {
        return response()->json(
            ['data' => $data, 'message' => $message],
            $httpStatusCode,
            $headers
        );
    }

    public static function error(
        $data,
        $message = null,
        $headers = [],
        $httpStatusCode = 500
    ) {
        return response()->json(
            ['data' => $data, 'message' => $message],
            $httpStatusCode,
            $headers
        );
    }
}
