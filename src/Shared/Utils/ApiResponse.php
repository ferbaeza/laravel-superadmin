<?php

namespace Baezeta\Admin\Shared\Utils;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rules\Exists;

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


    /**
     * Metodo para retornar una respuesta json estandarizada
     *
     * @param mixed $content
     * @param array $errors
     * @param integer $status
     * @return JsonResponse
     */
    public static function success(string $message, mixed $data = [], int $status = self::OK, array $errores = []): JsonResponse
    {
        // $data = match (true) {
        //     is_array($data) || is_string($data) => $data,
        //     is_object($data) => $data->jsonSerialize(),
        // };
        // dd(isset($data->data));
        if(isset($data->data) and $data->data instanceof \Illuminate\Support\Collection){
            $data = $data->data;
        }
        // $data = instanceof($data, 'Illuminate\Support\Collection') ? $data->toArray() : $data;
        $response = [
            'message' => $message,
            'data' => $data,
            'errors' => $errores,
            'status' => $status,
        ];
        return response()->json($response, $status);
    }


    public static function error(string $message, array $data = [], int $status = null): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $status ?? self::INTERNAL_SERVER_ERROR);
    }
}
