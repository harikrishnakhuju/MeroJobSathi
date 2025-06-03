<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //jobs for this tag
        return view('results', ['jobs'=> $tag->jobs]);
    }
}
