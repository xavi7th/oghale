<?php

namespace App\Modules\PublicPages\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class PublicPagesController extends Controller
{

  static function routes()
  {
    Route::group(['middleware' => 'web'], function () {
      Route::get('/', [self::class, 'index'])->name('app.home');
    });
  }

  public function index(Request $request)
  {
    return Inertia::render('PublicPages,Home', [])->withViewData([
      'title' => 'Welcome to Test App',
      'metaDesc' => 'Ek',
      'ogUrl' => route('app.home')
    ]);
  }
}
