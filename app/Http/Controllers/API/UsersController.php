<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends AppBaseController { 

    public function testQuery() {
        $posts = Posts::all();

        return json_encode($posts, 423);
    }

}



?>