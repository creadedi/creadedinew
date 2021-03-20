<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sobre()
    {
        return view('site.trabalhos.index');
    }

}
