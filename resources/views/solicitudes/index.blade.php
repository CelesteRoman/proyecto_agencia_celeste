
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Solicitudes</title>

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
                   <h2>Lista de solicitudes</h2>
                   </div> 
                    <ul >
                    <!-- Regresar -->
                    <a href="{{ url('/dashboard') }}" class="btn btn-info">Regresar</a>
                    </ul>
                    <br>
                    <ul >
                    <!--Nuevo-->
                    <a href="{{ route('solicitudes.create') }}" class="btn btn-success"> Nuevo </a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                      <tr>
                          <th>No.</th>
                          <th>Tipo de servicio</th>
                          <th>Descripción</th>
                          <th>Tipo de Solicitud </th>
                          <th>Fecha</th>
                          <th>Hora</th>
                          <th>Acciones</th>
                        </tr>
                        </thead>

                            <tbody>
                          @php
                          $cont = 1;
                          @endphp

                        @foreach($data as $solicitudes)
                         <tr>
                            <td>{{ $cont }}</td>
                            <td>{{ $solicitudes->tipo_servicio }}</td>
                            <td>{{ $solicitudes->descripcion }}</td>
                            <td>{{ $solicitudes->tipo_solicitud }}</td>
                            <td>{{ $solicitudes->fecha }}</td>
                            <td>{{ $solicitudes->hora }}</td>
                            <td>
            <a class="bi bi-pencil-fill" href="{{ route('solicitudes.edit',['id'=>$solicitudes->id_solicitud]) }}" > </a>
            &nbsp;
            <form method="POST" name="form-del{{ $solicitudes->id_solicitud }}" id="form-del{{ $solicitudes->id_solicitud }}" action="{{ route('solicitudes.destroy',['id'=>$solicitudes->id_solicitud]) }}" style="display: inline;">
             @csrf
             @method('DELETE')
             <a class="bi bi-trash-fill" onclick="document.getElementById('form-del{{ $solicitudes->id_solicitud }}').submit();"> </a>
            </form>
        </td>
    </tr>
    @php
    $cont++;
    @endphp
@endforeach
</body>
</html>