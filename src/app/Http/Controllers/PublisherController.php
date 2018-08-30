<?php

/**
 * @author Soares
 */

namespace App\Http\Controllers;

use App\Publisher;
use Illuminate\Http\Request;

/**
 * CRUD
 */
class PublisherController extends Controller
{
    /** @var Publisher */
    protected $publisher;

    /**
     * Create a new controller instance.
     *
     * @param Publisher $publisher
     */
    public function __construct(Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->publisher->store($request->name, $request->city, $request->state, $request->country);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Publisher $publisher
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Publisher $publisher
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Publisher           $publisher
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Publisher $publisher
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
    }
}
