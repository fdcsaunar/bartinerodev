<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Resources\OfferResource;
use App\Http\Requests\CreateOfferRequest;


class OffersController extends Controller
{
    // public function index()
    // {
    //     return OfferResource::collection(Offer::all());
    // }


    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(CreateOfferRequest $request, Post $post)
    // {
    //     $data = $request->validated();
    //     $offer = Offer::make($data);
    //     $offer->post()->associate($post);
    //     $offer->save();

    //     return new OfferResource($offer->fresh());
    // }
}
