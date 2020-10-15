<?php

namespace App\Exceptions;

use App\Common\Http\Response;
use Doctrine\DBAL\Driver\PDOException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    public function render($request, Exception $exception)
    {

        if($exception instanceof ApiException){
            $result = [
                'errorCode'=>$exception->getCode(),
                'errorMessage'=>$exception->getMessage()==''?ERROR_MESSAGE_LIST[$exception->getCode()]
                    ??ERROR_MESSAGE_LIST[E_UNKNOWN]:$exception->getMessage(),
                'data'=>array()
            ];
            return response()->json($result);
        }
        elseif ($exception instanceof PDOException){
            $result = [
                'errorCode'=>E_MYSQL_ERROR,
                'errorMessage'=>ERROR_MESSAGE_LIST[E_MYSQL_ERROR],
                'data'=>false
            ];
            return response()->json($result,500);
        }
        elseif ($exception instanceof NotFoundHttpException){
            $result = [
                'errorCode'=>E_NOT_FOUND_HTTP,
                'errorMessage'=>ERROR_MESSAGE_LIST[E_NOT_FOUND_HTTP],
                'data'=>false
            ];
            return response()->json($result,404);
        }
        else{
            $result = [
                'errorCode'=>E_UNKNOWN,
                'errorMessage'=>ERROR_MESSAGE_LIST[E_UNKNOWN],
                'data'=>false
            ];
            return response()->json($result,500);
        }

        //todo 这里的异常需要发邮件


        //return parent::render($request, $exception);
    }
}
