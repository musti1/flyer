<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flyer;
use App\Flyer_photos;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Http\Requests\FlyerRequest;
use App\Http\Requests\ChangeFlyerRequest;
use App\Http\Controllers\Controller;

class FlyerController extends Controller
{

    public function __construct(){

            $this->middleware('auth', ['except' => ['show']]);

            parent::__construct();


    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //flash('Hello World', 'This is message');

        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FlyerRequest  $request
     * @return Response
     */
    public function store(FlyerRequest $request)
    {
       Flyer::create($request->all());

       //flash('Success','Flyer successfully created');

       flash()->success('Success','Flyer successfully created');
       return redirect('flyer/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($zip, $street)
    {

        $flyer = Flyer::LocatedAt($zip, $street);

        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($zip, $street, ChangeFlyerRequest $request){

        $photo = Flyer_photos::fromFile($request->file('photo'));

        Flyer::LocatedAt($zip, $street)->addPhoto($photo);

    }

    /**
     * Show the form for editing the specified resource.
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
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
