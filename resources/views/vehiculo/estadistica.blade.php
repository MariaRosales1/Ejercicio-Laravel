@extends('plantilla')

@section('seccion')

     
    <div class="container">
            <table class="table">
                <thead>
                        <tr>
                            <td scope="col"> <strong>Marca</strong> </td>
                            <td scope="col"><strong>Total</strong></td>
                            
                        </tr>
                  
            </thead>
            <tbody>
                @for($i=0; $i<3; $i++)
                    <tr>
                        <td>{{$marcas[$i]}}</td>
                        <td>{{$total[$i]}}</td>
                       
                    </tr>
                @endfor
            </tbody>
            </table>
        </div>    
    
@endsection