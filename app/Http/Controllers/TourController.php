<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index() {
        $tours = Tour::all();
        return view('tours.index', compact('tours'));
    }

    public function create() {
        return view('tours.create');
    }

    public function store(Request $request) {
        Tour::create($request->all());
        return redirect()->route('tours.index');
    }

    public function edit($id) {
        $tour = Tour::findOrFail($id);
        return view('tours.edit', compact('tour'));
    }

    public function update(Request $request, $id) {
        $tour = Tour::findOrFail($id);
        $tour->update($request->all());
        return redirect()->route('tours.index');
    }

    public function destroy($id) {
        Tour::destroy($id);
        return redirect()->route('tours.index');
    }
}