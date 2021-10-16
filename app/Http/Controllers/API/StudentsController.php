<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use Flash;
use Response;

class StudentsController extends Controller {

    public $successStatus = 200;

    public function studentsAPI() {
        $students = Students::all();

        if (count($students) > 0) {
            return response()->json($students, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}
