<?php

namespace App\Http\Controllers\site\portfolio;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class BianchiniBiodieselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sobre()
    {
        return view('site.portfolio.bianchini_biodiesel');
    }

}
