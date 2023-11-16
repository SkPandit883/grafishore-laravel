<?php
namespace App\Services;


/**
 * Service Class for Response Handler
 *
 */

class Response
{

/**
 * @param        $data
 * @param string $message
 * @return JsonResponse
 */
  public static function success($data, $message = 'Operation Successful')
    {
        return response()->json([
            'status' => 'ok',
            'message' => $message,
            'payload' => $data,
        ], 200, [], JSON_PRETTY_PRINT);

    }



/**
 * @param        $data
 * @param string $message
 * @return JsonResponse
 */
    public static function created($data, $message = 'Data created Successfully')
    {
        return response()->json([
            'status' => 'ok',
            'message' => $message,
            'payload' => $data,
        ], 201, [], JSON_PRETTY_PRINT);
    }



/**
 * @param        $data
 * @param string $message
 * @return JsonResponse
 */
    public static  function updated($data, $message = 'Data modified successfully')
    {
        return response()->json([
            'status' => 'ok',
            'message' => $message,
            'payload' => $data,
        ], 200, [], JSON_PRETTY_PRINT);
    }



/**
 * @param string $message
 * @return JsonResponse
 */
    public static  function deleted($message = 'Deleted successfully')
    {
        return response()->json([
            'status' => 'ok',
            'message' => $message,
        ], 200, [], JSON_PRETTY_PRINT);
    }



/**
 * @param        $errors
 * @param string $message
 * @return JsonResponse
 */
    public static  function validationError($errors, $message = 'Invalid Data')
    {
        return response()->json([
            'status' => 'err',
            'message' => $message,
            'errors' => $errors,
        ], 422, [], JSON_PRETTY_PRINT);

    }



/**
 * @param        $data
 * @param string $message
 * @return JsonResponse
 */
    public static  function error($data, $message = 'Invalid Data', $error_code = 500)
    {
        return response()->json([
            'status' => 'err',
            'message' => $message,
            'errors' => $data,
        ], $error_code, [], JSON_PRETTY_PRINT);

    }

}
