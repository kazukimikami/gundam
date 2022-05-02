<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Dictionaries;
use App\Http\Controllers\Controller;

class DictionaryController extends Controller
{
    public function index()
    {
      $dictionaries = Dictionaries::get();

      return response()->json([
        "dictionaries" => $dictionaries
      ], 200);
    }

    public function show(Request $request)
    {
      $dictionaries = Dictionaries::find($request->dictionary_id);

      return response()->json($dictionaries);
    }

    public function create(Request $request)
    {
      $dictionaries = Dictionaries::create([
        'title' => $request->title,
        'content' => $request->content,
        'created_at' => $request
      ]);

      return response()->json($dictionaries);
    }

    public function delete(Request $request)
    {
      $dictionaries = Dictionaries::find($request->dictionary_id);
      $dictionaries->delete();

      return response()->json();
    }

    public function update(Request $request)
    {
      $dictionaries = Dictionaries::find($request->dictionary_id);
      $dictionaries->update([
        'title' => $request->title,
        'content' => $request->content,
        'updated_at' => $request
      ]);

      return response()->json($dictionaries);
    }
}
