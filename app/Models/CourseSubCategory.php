<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name','slug','status'];
    protected static $courseSubCategory;

    public static function updateOrCreateCourseSubCategory($request,$id=null)
    {
        courseSubCategory::updateOrcreate(['id'=> $id],[
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'slug'=>str_replace(' ','-',$request->name),
            'status'=>$request->status

    ]);
    }
}
