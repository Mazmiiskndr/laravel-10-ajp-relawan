<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $exception)
    {
        if ($request->is('api/*')) {
            if ($exception instanceof NotFoundHttpException) {
                return response()->json([
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'API Endpoint not found',
                ], 404);
            }
        }

        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.not-found', [], 404);
        }

        return parent::render($request, $exception);
    }


    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
