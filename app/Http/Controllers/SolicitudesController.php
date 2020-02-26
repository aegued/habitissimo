<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudesController extends BaseController
{
    //Create and Store a new Solicitude
    public function store(Request $request)
    {

    }

    //Get the Solicitude Data
    public function show($id)
    {
        return $this->sendResponse($id,'Hola mundo');
    }

    //Update the Solicitude
    public function update(Request $request, $id)
    {

    }

    //Public the Solicitude
    public function publicSolicitude($id)
    {

    }

    //Discard the Solicitude
    public function discardSolicitude($id)
    {

    }

    //List the Solicitudes by User
    public function listSolicitudes($email)
    {

    }
}
