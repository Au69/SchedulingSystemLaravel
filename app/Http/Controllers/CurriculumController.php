<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = Curriculum::all();
        return view('admin.curriculum_management.view_curriculum', compact('curriculums'));
    }

    public function create()
    {
        return view('admin.curriculum_management.create');
    }
}
