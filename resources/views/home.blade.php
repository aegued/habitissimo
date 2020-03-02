<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('style.css') }}">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2>Pide presupuestos</h2>
                    <p>Construcciones y reformas, instalaciones, limpieza, mudanzas, arquitectos y más…</p>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge badge-light">1</span>
                            Cuéntanos <b>qué necesitas</b>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-light">2</span>
                            Recibe hasta <b>4 presupuestos de tu zona</b>
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-light">3</span>
                            Compara ofertas y <b>elige (o no) la mejor</b>
                        </li>
                    </ul>
                </div>

                <div class="col-8">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5>Solicita presupuestos</h5>
                        </div>
                        <div class="card-body">

                            <form id="form" action="{{ url('api/solicitudes') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="description">Descripción</label>
                                    <input type="text" class="form-control" name="description" id="description">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="date">Fecha estimada</label>
                                            <select class="form-control" name="date" id="date">
                                                <option>Lo antes posible</option>
                                                <option>De 1 a 3 meses</option>
                                                <option>Más de 3 meses</option>
                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="col-6">
                                            <label for="price">Preferencia precio</label>
                                            <select class="form-control" name="price" id="price">
                                                <option>Lo más barato</option>
                                                <option>Relación calidad precio</option>
                                                <option>Mejor calidad</option>
                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="category">Categoría</label>
                                            <select class="form-control" name="category" id="category">
                                                <option value="">-- Seleccionar Categoría --</option>
                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="col-6">
                                            <label for="subcategory">Subcategoría</label>
                                            <select class="form-control" name="subcategory" id="subcategory" disabled>
                                                <option value="">-- Seleccionar Subcategoría --</option>
                                            </select>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                            <div class="invalid-feedback"></div>
                                        </div>

                                        <div class="col-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="phone">Teléfono</label>
                                            <input type="text" class="form-control" name="phone" id="phone">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="col-6">
                                            <label for="address">Direccion</label>
                                            <input type="text" class="form-control" name="address" id="address">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group alerts"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right">Enviar</button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    <script type="text/javascript" src="{{ asset('script.js') }}"></script>
    </body>
</html>
