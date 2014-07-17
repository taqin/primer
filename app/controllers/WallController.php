<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class WallController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /walls
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$walls = Wall::find(1); //select * from walls

		// Will return a ModelNotFoundException if no user with that id

		
		
		try {

			$blasts = Blast::orderBy('created_at', 'DESC')->get(); //Get all tweets
			//return $blast->get()->toArray();

			return View::make('wall')
			->with('walls', $walls)
			->with('blasts', $blasts);
			
		} catch (ModelNotFoundException $e) {
			
			return Redirect::home();

		}
		


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /walls/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /walls
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /walls/{id}
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
	 * GET /walls/{id}/edit
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
	 * PUT /walls/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /walls/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}