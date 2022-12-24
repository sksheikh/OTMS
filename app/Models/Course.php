<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helper\Helper;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_category_id',
        'course_sub_category_id',
        'user_id',
        'title',
        'price',
        'image',
        'short_description',
        'long_description',
        'starting_date',
        'ending_date',
        'total_hour',
        'slug',
        'status',
        'hit_count',
        'apply_count',
    ];

    protected static $course;

    public static function createOrUpdateCourse($request,$id)
    {
        Course::updateOrcreate(['id'=>$id],[
            'course_category_id' =>$request->course_category_id,
            'course_sub_category_id' =>$request->course_sub_category_id,
            'user_id' => auth()->id(),
            'title' =>$request->title,
            'price' =>$request->price,
            'image' =>Helper::uploadFile($request->file('image'),'course'),
            'short_description' =>$request->short_description,
            'long_description' =>$request->long_description,
            'starting_date' =>$request->starting_date,
            'ending_date' =>$request->ending_date,
            'total_hour' =>$request->total_hour,
            'slug' =>str_replace(' ','-',$request->title),
        ]);
    }



    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(CourseSubCategory::class);
    }

    public function trainer()
    {
        return $this->belongsTo(User::class);
    }
}
