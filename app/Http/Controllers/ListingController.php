<?php

namespace App\Http\Controllers;

use App\Listing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        // $listings = Listing::get()->paginate(12);
        $now = Carbon::now();
        for ($i = 0; $i < 6; $i++) {
            $listings[] = ([
                'id'     => $i,
                'photo'       => 'https://via.placeholder.com/225',
                'title'       => 'Title one',
                'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
                'created'     => $now,
            ]);
        }

        return view('index', ['listings' => $listings]);
    }

    public function view($id)
    {
        // $listing = Listing::findOrFail($id);
        $listing = ([
            'id'     => $id,
            'photo'       => 'https://via.placeholder.com/225',
            'title'       => 'Title one',
            'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'created'     => Carbon::now()
        ]);

        return view('view', ['listing' => $listing]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $phrase   = $request->search;
        $listings = Listing::where('title', 'like', '%' . $phrase . '%')
            ->orWhere('body', 'like', '%' . $phrase . '%')
            ->paginate(12);
        return view('index', ['listings' => $listings]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::where('user_id', Auth()->id)->get()->paginate(12);
        return view('listing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body'  => 'required',
            'photo' => 'mimes:jpeg,bmp,png',
        ])->validate();

        $listing = Listing::create([
            'title' => $request->title,
            'body'  => $request->body,
            'photo' => $request->photo,
        ]);

        return view('listing.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        $listing = Listing::findOrFail($listing->id);
        return view('listing.show', ['listing' => $listing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        $listing = Listing::findOrFail($listing->id);
        return view('listing.edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {

        Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body'  => 'required',
            'photo' => 'mimes:jpeg,bmp,png',
        ])->validate();

        $listing        = Listing::findOrFail($listing->id);
        $listing->title = $request->title;
        $listing->body  = $request->body;
        $listing->photo = $request->photo;
        $listing->save();
        return view('listing.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        Listing::destroy($listing->id);
        return view('listing.index');
    }
}
