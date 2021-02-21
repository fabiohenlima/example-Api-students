<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentResponses($id = null)
    {
        return empty($id) ? Response::json(Student::all()) : Response::json(Student::find($id));
    }
}
