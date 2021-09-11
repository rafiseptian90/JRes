<?php

namespace Rshme\JRes;

use Illuminate\Http\Response;

class JRes {
   // 200 OK JSON Response
   public static function Success(string $msg)
   {
       return response()->json([
          'code_status' => Response::HTTP_OK,
          'status' => $msg
       ], Response::HTTP_OK);
   }

   // 200 OK JSON Response with data prop
   public static function SuccessWithData(string $msg, $data)
   {
       return response()->json([
          'code_status' => Response::HTTP_OK,
          'status' => $msg,
          'data' => $data
       ], Response::HTTP_OK);
   }

   // 422 Unprocessable Entity JSON Response
   public static function UnprocessableEntity(string $msg)
   {
       return response()->json([
          'code_status' => Response::HTTP_UNPROCESSABLE_ENTITY,
          'status' => $msg
       ], Response::HTTP_UNPROCESSABLE_ENTITY);
   }

   // 403 Forbidden JSON Response
   public static function Forbidden(string $msg)
   {
       return response()->json([
          'code_status' => Response::HTTP_FORBIDDEN,
          'status' => $msg
       ], Response::HTTP_FORBIDDEN);
   }

   // 404 Not Found JSON Response
   public static function NotFound($msg)
   {
       return response()->json([
          'code_status' => Response::HTTP_UNPROCESSABLE_ENTITY,
          'status' => $msg
       ], Response::HTTP_UNPROCESSABLE_ENTITY);
   }
}