<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Students;
use Illuminate\Http\Request;
use Flash;
use Response;

class StudentsController extends Controller {

    public $successStatus = 200;

    public function getAllStudents(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $students = Students::all();

            return response()->json($students, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }

    public function getStudent(Request $request) {
        $id = $request['sid']; // sid = students id
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $students = Students::where('id', $id)->first();

            if ($students != null) {
                return response()->json($students, $this->successStatus);
            } else {
                return response()->json(['response' => 'Students not found!'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }

    public function searchStudent(Request $request) {
        $studentno = $request['s']; // s = studentsno
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $students = Students::where('Firstname', 'LIKE', '%' . $studentno . '%')
                ->orWhere('Address', 'LIKE', '%' . $studentno . '%')
                ->get();
            // SELECT * FROM students WHERE description LIKE '%studentno%' OR title LIKE '%studentno%'
            if ($students != null) {
                return response()->json($students, $this->successStatus);
            } else {
                return response()->json(['response' => 'Students not found!'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
    }
}
