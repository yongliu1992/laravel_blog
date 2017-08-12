<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile',['user'=>User::findOrFail($id)]);
    }
}
