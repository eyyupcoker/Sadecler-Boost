<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boost;

class AdminPageController extends Controller
{
    public function allProjects()
    {
        $boosts = Boost::all();
        return view('admin', compact('boosts'));
    }
    public function deleteBoost($id)
    {
        $boost = Boost::findOrFail($id);
        $boost->delete();

        return redirect()->back()->with('success', 'Boost deleted successfully.');
    }
}
