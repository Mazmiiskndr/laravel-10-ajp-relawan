<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait ApiResponseTrait
{
    /**
     * Constructs a successful JSON response.
     * @param string $message
     * @param mixed|null $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function formatResponseSuccess($message, $data = null, $status = 200)
    {
        // Construct the response
        $response = [
            'status' => 'success',
            'message' => $message,
        ];

        // If $data is not null, add it to the response
        if ($data !== null) {
            $response['data'] = $data;
        }
        // Return the response
        return response()->json($response, $status);
    }

    /**
     * Constructs an error JSON response.
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    private function formatResponseError($message, $status = 500, $execptions = [])
    {
        Log::channel('api')->error($message, $execptions);

        return response()->json([
            'status' => 'error',
            'message' => $message,
        ], $status);
    }
}
