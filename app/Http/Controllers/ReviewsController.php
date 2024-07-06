<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(): View
    {
        $reviews = Reviews::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create(): View
    {
        return view('reviews.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $reviewData = $request->all();

        Reviews::create($reviewData);

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function show(Reviews $review): View
    {
        return view('reviews.show', compact('review'));
    }

    public function edit(Reviews $review): View
    {
        $singleReview = Reviews::find($review->id);

        return view('reviews.edit', compact('singleReview'));
    }

    public function update(Request $request, Reviews $review): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $reviewData = $request->all();

        $review->update($reviewData);

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy(Reviews $review): RedirectResponse
    {
        $post = Reviews::find($review->id);
        $post->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
