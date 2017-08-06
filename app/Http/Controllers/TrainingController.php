<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Training;

class TrainingController extends Controller {
  /**
   * Main entrypoint to see all trainings.
   *
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index() {
    $trainings = Training::all()->toArray();
    return view('trainings', compact('trainings'));
  }

  /**
   * Displays new training form.
   *
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function show_form() {
    return view('training_form');
  }

  /**
   * Saves new training to database.
   *
   * @param \Illuminate\Http\Request $request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function create(Request $request) {
    $user = Auth::user();
    $training = new Training([
      'title' => $request->get('title'),
      'link' => $request->get('link'),
      'location' => $request->get('location'),
      'body' => $request->get('body'),
      'date_from' => Carbon::createFromFormat('Y-m-d', $request->get('date_from')),
      'date_to' => Carbon::createFromFormat('Y-m-d', $request->get('date_to')),
    ]);
    $user->trainings()->save($training);
    return redirect()->route('trainings');
  }

  /**
   * Returns a training
   */
  public function training($id) {
    $training = Training::where('id', $id)
      ->with('author')
      ->get()
      ->first();
    if (!$training) {
      abort(404);
    }
    return view('training/detail', [
      'training' => $training->toArray(),
    ]);
  }

  /**
   * JSON representation of all trainings on site.
   * @return array JSON representation of trainings.
   */
  public function apiIndex() {
    return Training::all()->toArray();
  }

}
