<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function sliceText($in)
    {
        $out = strlen($in) > 50 ? substr($in,0,50)."..." : $in;
        $out = strip_tags($out);
        return $out;
    }
}
