<?php

namespace App\Modules\SuperAdmin\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
   public function index(Request $request)
  {
    return Inertia::render('SuperAdmin,SuperAdminDashboard')->withViewData([
      'title' => 'Hello theEects',
      'metaDesc' => ' This page is ...'
    ]);
  }

}
