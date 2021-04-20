<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($id)
    {
        $course = Course::findOrFail($id);

        $data = DB::table('course_teachers')
            ->join('courses', 'courses.id', '=', 'course_teachers.course_id')
            ->join('teachers', 'teachers.id', '=', 'course_teachers.teacher_id')
            ->join('users', 'users.id', '=', 'teachers.user_id')
            ->where('courses.id', '=', $id)
            ->select(
                'courses.name as name',
                'courses.briefDescription as briefDescription',
                'courses.language as language',
                'courses.price as price',
                'courses.description as description',
                'courses.whatLearn as whatLearn',
                'courses.rating as rating',
                'courses.image as image',
                'courses.requirements as requirements',
                'courses.updated_at as updated_at',
                'users.name as user_name'
            )
            ->get();
        // dd($course);
        return view('course-info', ["data" => $data, "courses" => $course]);
    }
}
