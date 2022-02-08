<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('static-page.index');
    }

    public function aboutUs()
    {
        return view('static-page.about');
    }

    public function services()
    {
        return view('static-page.services');
    }

    public function order(Request $request)
    {
        // dd($request->all());
        $paperType = $request->paper_type;
        $pages = $request->pages;
        $spacing = $request->spacing;
        $level = $request->level;
        $deadline = $request->deadline;

        return redirect()->route('order.create')
            ->with('paperType', $paperType)
            ->with('pages', $pages)
            ->with('spacing', $spacing)
            ->with('level', $level)
            ->with('deadline', $deadline);
    }
}
