<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member_tag_log extends Model
{
    protected $fillable = [
        'id',
        'member_wechat_openid',
        'before_edit_tagid',
        'after_edit_tagid'
    ];
}
