<?php

namespace App\Http\Controllers\lecturer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lecture;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all() ;
        return view('lecturer.subject.index' , compact('subjects')) ;
    }

    /**
     * Display a listing of the resource.
     */
    public function index_details($id)
    {
        $subject = Subject::find($id) ;
        return view('lecturer.subject.index_details' , compact('subject')) ;
    }
    public function lectures($id)
    {
        $lectures= Lecture::where('subject_id' , $id)->get() ;
        return view('lecturer.subject.subject_lecture_index' , compact('lectures')) ;
    }

    public function categories($id)
    {
        $categories = Category::where('subject_id' , $id)->get() ;
        return view('lecturer.subject.subject_categories_index' , compact('categories')) ;
    }
}
