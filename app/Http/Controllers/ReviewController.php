<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ReviewController extends Controller
{
    public function reviewSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'review' => 'required'
        ])->validate();

        Reviews::create([
            'name' => $request->name,
            'email' => $request->email,
            'review' => $request->review,
        ]);

        return redirect('/contact');
    }
    
    public function reviews()
    {
        $reviews = Reviews::orderBy('created_at', 'DESC')->get();
        return view('reviews', compact('reviews'));
    }


    public function index()
    {
        $reviews = Reviews::orderBy('created_at', 'DESC')->get();
        return view('reviews', compact('reviews')); // Ensure this view exists
    }
    

    public function destroy($id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews')->with('success', 'Review deleted successfully');
    }
}
