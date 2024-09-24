<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    public function addReview(Request $request) {
        $formFields = $request->validate([
            'comment' => 'required'
            
        ]);
        $formFields['user_id'] = Auth::user()->id;
        Review::create($formFields);

        return redirect('/home');
    }

    public function updateReviewChanges(Review $review, Request $request){

        $formFields = $request->validate([
            'isFeatured' => 'required'
        ]);

        $review->update($formFields);
        return redirect('/manage-reviews');
    }

    public function deleteReview(Review $review){
        $review->delete();
        return redirect('/manage-reviews');
    }   
}
