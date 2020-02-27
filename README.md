<h1>Habitissimo Challenge API</h1>

<h2>How install:</h2>
<ol>
    <li>Configure the Data Base in the .env file</li>
    <li>Run php artisan migrate</li>
    <li>Enjoy</li>
</ol>

<h2>How it work:</h2>
<p>Routes:</p>
<ol>
    <li>
        <p>POST api/solicitudes</p>
        <p>Parameters:</p>
        <ul>
            <li>description (Required)</li>
            <li>email (Required)</li>
            <li>phone (Required)</li>
            <li>address (Required)</li>
            <li>title (Optional)</li>
            <li>category (Optional)</li>
        </ul>
    </li>
    <li>
        <p>PUT api/solicitudes/{id}</p>
        <p>Parameters:</p>
        <ul>
            <li>description (Optional)</li>
            <li>title (Optional)</li>
            <li>category (Optional)</li>
        </ul>
    </li>
    <li>
        <p>GET api/solicitudes/{id}/public</p>
    </li>
    <li>
        <p>GET api/solicitudes/{id}/discard</p>
    </li>
    <li>
        <p>GET api/solicitudes/{email}/list</p>
    </li>
</ol>

<p>Return:</p>
<p>
{
    "success": true,
    "data": {
        "description": "Quiero cambios en la casa",
        "title": "Reforma del hogar",
        "category": "Reforma",
        "user_id": 2,
        "updated_at": "2020-02-27 09:01:52",
        "created_at": "2020-02-27 09:01:52",
        "id": 41
    },
    "message": "Solicitud creada correctamente"
}
</p>

<hr>

<p>Test Unit:</p>
<p>Run in the root the comand: vendor/bin/phpunit</p>
