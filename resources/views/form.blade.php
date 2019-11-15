@extends('plantilla')
@section('contenido')

<div class="card">
    <div class="card-header card-header-danger">
        <span class="nav-tabs-title">NUEVO REGISTRO</span>
    </div>
    <div class="card-body">
        <div class="row">
            
        </div>
    </div>
</div>
    
@endsection


{{-- crear --}}
@extends('plantilla')
@section('contenido')

<div class="card">
    <div class="card-header card-header-danger">
        <a href="{{route('personal.create')}}" class="btn btn-primary">REGISTRAR</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <table class="table align-items-center">
                    <thead class="thead-light">
                        <tr>
                           <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($personal as $per)
                        
                            <tr>
                                <td></td>
                            </tr>
                    
                    @endforeach
                    </tbody>
                </table>
            {{-- {{$personal->render()}} --}}
            </div>
        </div>
    </div>
</div>


@endsection
