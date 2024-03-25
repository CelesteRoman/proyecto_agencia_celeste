@extends('layouts.appfront')


@section('content')
<div class="">
        

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="text-center">
                    <br>
                    <h2>Lista de usuarios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <p><ul >
                    <!-- Regresar -->
                    <a href="{{ url('/dashboard') }}" class="btn btn-info">Regresar</a>
                    </ul></p>
                    <!-- <a href="#" class="btn btn-primary">Nuevo</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nombre</th>
                          <th>Correo electrónico</th>
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
                        @foreach($data as $user)
                        <tr>
                          <td>{{ $cont }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->rol->rol}}</td>
                          <td>{{ $user->created_at }}</td>
                          <td>{{ $user->updated_at }}</td>
                          <td> <a class="bi bi-pencil-fill" href="{{ route('usuario.edit',['id'=>$user->id]) }}"> </a>
                            &nbsp;
                            <form method="POST" name="form-del{{ $user->id }}" id="form-del{{ $user->id }}" action="{{ route('usuario.destroy',['id'=>$user->id]) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <a class="bi bi-trash-fill" onclick="document.getElementById('form-del{{ $user->id }}').submit();"></a>
                            </form>
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
