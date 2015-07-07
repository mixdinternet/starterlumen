<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function principal()
    {
        app('seotools.metatags')->setTitle('');
        app('seotools.metatags')->setDescription('');

        return view('pages.principal');
    }

}