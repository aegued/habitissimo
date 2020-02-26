<?php

namespace App\Http\Controllers;

use App\Solicitude;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolicitudesController extends BaseController
{
    //Create and Store a new Solicitude
    public function store(Request $request)
    {
        $messages = [
            'description.required'  =>  'La descripción es requerida',
            'email.required'        =>  'El email es requerido',
            'email.email'           =>  'El email tiene que ser válido',
            'phone.required'        =>  'El teléfono es requerido',
            'address.required'      =>  'La dirección es requerida',
        ];

        $validator = Validator::make($request->all(), [
            'description'   =>  'required',
            'email'         =>  'required|email:rfc,dns',
            'phone'         =>  'required',
            'address'       =>  'required'
        ], $messages);

        if ($validator->fails())
            return $this->sendError('Accesso Denegado',$validator->errors(), 409);

        $user = User::where('email', $request->email)->get()->first();

        if ($user)
        {
            $user->phone    =   $request->phone;
            $user->address  =   $request->address;
            $user->save();
        }
        else
        {
            $user = new User();
            $user->email    =   $request->email;
            $user->phone    =   $request->phone;
            $user->address  =   $request->address;
            $user->save();
        }

        $solicitude = new Solicitude($request->all());
        $solicitude->user_id = $user->id;
        $solicitude->save();

        return $this->sendResponse($solicitude,'Solicitud creada correctamente');

    }

    //Get the Solicitude Data
    public function show($id)
    {

    }

    //Update the Solicitude
    public function update(Request $request, $id)
    {
        $solicitude = Solicitude::find($id);

        if (!$solicitude)
            return $this->sendError('Acceso Denegado','No existe la Solicitud.',403);

        if ($solicitude->status != 'Pendiente')
            return $this->sendError('Acceso Denegado','La solicitud no se encuentra en estado Pendiente.',403);

        $solicitude->title          =   $request->title;
        $solicitude->description    =   $request->description;
        $solicitude->category       =   $request->category;
        $solicitude->save();

        return $this->sendResponse($solicitude,'Solicitud actualizada correctamente');
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
