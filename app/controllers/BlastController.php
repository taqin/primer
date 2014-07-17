<?php

class BlastController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /blasts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /blasts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /blasts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$wall = Wall::find(1);
		
		$blast = new Blast;
		
        $blast->message  = Input::get('blast');
        $blast->wall_id	 = $wall->id;
        $blast->save();

        $wall->blast()->save($blast);
        
        //$blast->wall()->associate($wall);

        //return $blast;

        //return Blast::find(1);
        return Redirect::back();
        //Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 * GET /blasts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /blasts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /blasts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /blasts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}