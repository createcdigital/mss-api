<?php

namespace App\Http\Controllers;

use App\Models\Member_tag_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberTagLogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    //    Add Member and Tag Relationship Update log
    public function add(Request $request)
    {
        $model = new Member_tag_log();
        $model->member_wechat_openid = $request->member_wechat_openid;
        $model->before_edit_tagid = $request->before_edit_tagid;
        $model->after_edit_tagid = $request->after_edit_tagid;

        if($model->save())
            return json_encode(["rs" => "success"]);
        else
            return json_encode(["rs" => "error"]);
    }


}
