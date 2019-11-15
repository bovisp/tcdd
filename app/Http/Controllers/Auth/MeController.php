<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class MeController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth:api']);
  }

  public function __invoke()
  {
    $user = request()->user();

    return response()->json([
      'email' => $user->email,
      'name' => $user->name
    ]);
  }
}
