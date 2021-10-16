<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $posts = Posts::all();

        if (count($posts) > 0) {
            return response()->json($posts, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}
