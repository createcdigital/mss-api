<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    //    update Member's Tag columns
    public function updateMemberTag(Request $request)
    {
        $model =Member::find($request->id);

        $model->tag = $request->tag;

        if($model->save())
            return json_encode(["rs" => "success"]);
        else
            return json_encode(["rs" => "error"]);
    }
    
}
