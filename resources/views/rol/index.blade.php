@extends('layouts.appfront')



@section('content')
<div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="text-center">
                    <h2>Lista de roles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <!--<button class="btn btn-primary" type="button">Nuevo</button>
                    <a href="{{ route('rol.create') }}" class="btn btn-primary">Nuevo</a> 
                     
                    -->
                    
                    </ul>
                    <ul >
                    <!-- Regresar -->
                    <a href="{{ url('/dashboard') }}" class="btn btn-info">Regresar</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Rol</th>
                          <th>Fecha creación</th>
                          <th>Fecha actualización</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                          $cont = 1;
                        @endphp
                        @foreach($data as $info)
                        <tr>
                          <td>{{ $cont }}</td>             
                          <td>{{$info->rol}}</td>
                          <td>{{ $info->created_at}}</td>
                          <td>{{ $info->updated_at}}</td>
                          <td><a class="bi bi-pencil-fill" href="{{ route('rol.edit',['id'=>$info->id_rol]) }}"> </a>
                           
                          </td>                    
                        </tr>
                         @php
                           $cont++;
                         @endphp
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection
