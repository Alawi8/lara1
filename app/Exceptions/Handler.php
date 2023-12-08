<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
        // ...

        public function render($request, Throwable $exception)
        {
            if ($exception instanceof HttpException && $exception->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
    
            return parent::render($request, $exception);
        }
    
        // ...
}
