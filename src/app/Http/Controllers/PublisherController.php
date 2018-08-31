<?php

declare(strict_types = 1);

/**
 * @author Soares
 */

namespace App\Http\Controllers;

use App\Publisher;
use Illuminate\Http\Request;

/**
 * Serves the content of publications
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
     * @param Request $request
     *
     * @return string
     */
    public function index(Request $request): string
    {
        return $this->publisher->search($request->name);
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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $this->publisher->modernize($id, $request->name, $request->city, $request->state, $request->country);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     *
     * @return void
     */
    public function destroy(string $id): void
    {
        $this->publisher->del($id);
    }
}
