<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;
    protected $fillable =['name','status'];
    protected static $courseCategory;


    public static function updateOrcreateCourseCategory($request,$id=null)
    {
        courseCategory::updateOrcreate(['id'=>$id],[
            'name'=>$request->name,
            'status'=>$request->status
        ]);

    }
}
