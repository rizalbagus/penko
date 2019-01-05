<?php

namespace App\Http\Controllers\Api;

use App\Perjanjian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PerjanjianCollection;
use App\Http\Resources\PerjanjianItem;

class PerjanjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PerjanjianCollection(Perjanjian::get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Perjanjian::rules(false));
        if (!Perjanjian::create($request->all())) {
            return [
                'message' => 'Bad Request',
                'code' => 400,
            ];
        } else {
            return [
                'message' => 'OK',
                'code' => 200,
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function show(Perjanjian $perjanjian)
    {
            return new PerjanjianItem($perjanjian);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjanjian $perjanjian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjanjian $perjanjian)
    {
        $this->validate($request, Perjanjian::rules(true, $perjanjian->id));
        if (!$perjanjian->update($request->all())) {
            return [
                'message' => 'Bad Request',
                'code' => 400,
            ];
        } else {
            return [
                'message' => 'OK',
                'code' => 201,
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perjanjian $perjanjian)
    {
        if ($perjanjian->delete()) {
            return [
                'message' => 'OK',
                'code' => 204,
            ];
        } else {
            return [
                'message' => 'Bad Request',
                'code' => 400,
            ];
        }
    }
}
