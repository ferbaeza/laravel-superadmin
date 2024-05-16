<?php

namespace Baezeta\Admin\Shared\Utils;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public const OK = 200;
    public const CREATED = 201;
    public const NO_CONTENT = 204;
    public const BAD_REQUEST = 400;
    public const UNAUTHORIZED = 401;
    public const FORBIDDEN = 403;
    public const NOT_FOUND = 404;
    public const CONFLICT = 409;
    public const INTERNAL_SERVER_ERROR = 500;

    public static function success(string $message, array|string $data = [], int $status = null): JsonResponse
    {
        $data = is_array($data) ? $data : [$data];
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $status ?? self::OK);
    }


    public static function error(string $message, array $data = [], int $status = null): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $status ?? self::INTERNAL_SERVER_ERROR);
    }
}
