<?php

namespace Tests\Feature;

use Tests\TestCase;

class SolicitudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //Store Method Test
    public function testStoreSolicitude()
    {
        $response = $this->post('/api/solicitudes/',[
            'description'   =>  'Descripcion de la solicitud',
            'email'         =>  'egued89@gmail.com',
            'phone'         =>  '658797881',
            'address'       =>  'Calle Jesus, 4, Piso 2a, Illes Balears, 07003'
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'   =>  true,
            ]);
    }

    //Update Method Test
    //To response OK, change the status value to 'Pendiente'
    public function testUpdateSolicitude()
    {
        $response = $this->put('api/solicitudes/1',[
            'title'         =>  'Titulo',
            'description'   =>  'Descripcion de la solicitud',
            'category'      =>  'Categoria',
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'   =>  true,
            ]);
    }

    //Public Method Test
    //To response OK, change the status value to 'Pendiente'
    public function testPublicSolicitude()
    {
        $response = $this->get('api/solicitudes/1/public');

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'   =>  true,
            ]);
    }

    //Discard Method Test
    public function testDiscardSolicitude()
    {
        $response = $this->get('api/solicitudes/1/discard');

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'   =>  true
            ]);
    }

    //List Method by User Email Test
    public function testListSolicitudes()
    {
        $response = $this->get('api/solicitudes/egued89@gmail.com/list');

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'    =>  true
            ]);
    }
}
