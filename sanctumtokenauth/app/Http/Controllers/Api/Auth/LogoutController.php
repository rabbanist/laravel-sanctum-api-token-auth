<?php
namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{


    /**
     * Handle the incoming request.
     */

//    public function logout(Request $request)
//    {
//        $request->user()->tokens()->delete();
//        return response()->json([
//            'message' => 'Tokens Revoked',
//        ],200);
//    }

    public function __invoke(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json([
               'message' => 'Tokens Revoked',
           ],200);
    }

}
