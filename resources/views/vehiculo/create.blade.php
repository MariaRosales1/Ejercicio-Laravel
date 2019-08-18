@extends('plantilla')

@section('seccion')
   
    @if(session('mensaje'))
    <div class="alert alert-success"> {{session('mensaje')}}</div>
    @endif

    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> <strong>Registro de vehículos</strong> </div>
                        <div class="card-body">
                            <form name="my-form" action="{{ url('vehiculos') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre completo</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nombre" class="form-control" name="nombre">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cedula" class="col-md-4 col-form-label text-md-right">Cédula</label>
                                    <div class="col-md-6">
                                        <input type="text" id="cedula" class="form-control" name="cedula">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="placa" class="col-md-4 col-form-label text-md-right">Placa</label>
                                    <div class="col-md-6">
                                        <input type="text" id="placa" class="form-control" name="placa">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>
                                    <div class="col-md-6">
                                        <select name="marca" id="marca" class="form-control">
                                            <option value="toyota">Toyota</option>
                                            <option value="mazda">Mazda</option>
                                            <option value="chevrolet">Chevrolet</option>
                                        </select>
                                        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!} 
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Guardar vehículo
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection