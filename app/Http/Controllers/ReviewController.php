<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Auth;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pending_reviews = Review::where('status', 'pending')->get();
        $approved_reviews = Review::where('status', 'approved')->get();
        return view('Admin.approval.reviews.reviews', compact('pending_reviews', 'approved_reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approve(Review $approve)
    {
        
        $approve->status = 'approved';
        $approve->update();



        return redirect()->back()->with('msg', 'Review has been Approved');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReview(Request $request)
    {
        $existing = Review::where('service_id', $request->service_id)->where('user_id', Auth::id())->first();

        if (!$existing) {
            Review::create([

                'service_id' => $request->service_id,
                'user_id' => Auth::id(),
                'review' => $request->review,
                'star' => $request->star,
                'status' => 'pending'
            ]);

         

            return response()->json(['result' => 'Thanks for your feedback. We will review your feeback']);
        }

        else{

                        
            return response()->json(['result' => 'Already Reviewed']);
        }

        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
