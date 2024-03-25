
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Servicios</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <style>
            
        </style>
    </head>
    <body class="#">
        
    @section('content')
<div class="">
           

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="text-center">
                  <br>
                   <div> 
                   <h2>Lista de servicios</h2>
                   <ul >
                    <!-- Regresar -->
                    <a href="{{ url('/dashboard') }}" class="btn btn-info">Regresar</a>
                    </ul>
                   </div> 
                   <br>
                    <ul class="nav navbar-right panel_toolbox">            
                   <!-- <a href="{{ route('servicios.create') }}" class="bi bi-trash">Nuevo</a>-->
                    </ul>
                    <br>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                      <tr>
                          <th>No.</th>
                          <th>Tipo_servicio</th>
                          <th>Descripcion</th>
                          <th>Niñerfa</th>
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
                            <td>{{ $info->tipo_servicio }}</td>
                            <td>{{ $info->descripcion }}</td>
                            <td>{{ $info->niñera }}</td>
                            
                            <td>
            <a class="bi bi-pencil-fill"  href="{{ route('servicios.edit',['id'=>$info->id_servicio]) }}"> </a>
            &nbsp;
            <form method="POST" name="form-del{{ $info->id_servicio }}" id="form-del{{ $info->id_servicio }}" action="{{ route('servicios.destroy',['id'=>$info->id_servicio]) }}" style="display: inline;">
             @csrf
             @method('DELETE')
             <a class="bi bi-trash-fill" onclick="document.getElementById('form-del{{ $info->id_servicio }}').submit();">  </a>
            </form>
        </td>
    </tr>
    @php
    $cont++;
    @endphp
@endforeach
</body>
</html>