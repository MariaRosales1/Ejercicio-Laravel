@extends('plantilla')

@section('seccion')

      
    <div class="container">
            <table class="table">
                <thead>
                    @if (count($vehiculos) != 0)
                        <tr>
                            <td scope="col">  <strong>Marca</strong></td>
                            <td scope="col"><strong>Placa </strong></td>
                            <td scope="col"><strong>Mensaje </strong</td>
                        </tr>
                    @endif
            </thead>
            <tbody>
                @forelse ($vehiculos as $vehiculo)
                    <tr>
                        <td>{{$vehiculo->marca}}</td>
                        
                        @if ($vehiculo->marca == 'toyota')
                            <td> <p style="color:rgba(255,0,0,0.8);"><strong>{{$vehiculo->placa}}</strong></p></td>
                            <td> ningún mensaje</td>
                        @elseif ($vehiculo->marca == 'mazda')
                            <td>{{$vehiculo->placa}}</td>
                            <td> <span style="background-color: #a1cc1b"> Los de Mazdas son los mejores</span> </td>
                        @else
                            <td>{{$vehiculo->placa}}</td>
                            <td> ningún mensaje</td>
                        @endif
                    </tr>
                    @empty
                        <div class="alert alert-warning"><h1>No se encontraron vehiculos</h1></div>
                    @endforelse
            </tbody>
            </table>
        </div>    
    
@endsection