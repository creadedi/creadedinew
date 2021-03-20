<?php

namespace App\Http\Controllers\site\portfolio;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ModularInstitucionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sobre()
    {
        return view('site.portfolio.modular_video_institucional');
    }

}
