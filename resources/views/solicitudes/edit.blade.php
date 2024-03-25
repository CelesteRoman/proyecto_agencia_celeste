@extends('layouts.appfront')

@section('content')
            <div class="page-title">
              <div class="title_left">
                <h2>Tipo de solicitudes</h2>              
              </div>
<!--
            
-->                
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Actualizar solicitud</h2>
                    <div class="clearfix"></div>                
                  <div class="x_content">
                    <br />
                    <form name="frmgenero" id="frmgenero2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('solicitudes.update',['id'=>$solicitudes->id_solicitud]) }}">
                    @csrf 
                    @method('PUT')
                    <!-- -->
                    <!--otro-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_servicio2">tipo_servicio<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tipo_servicio" id="tipo_servicio2" required="required" class="form-control col-md-7 col-xs-12" placeholder="idsolicitudes" value="{{$solicitudes->id_solicitud}}">
                        </div>
                      </div>
                       <!--otro-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion2">descripcion<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descripcion" id="descripcion2" required="required" class="form-control col-md-7 col-xs-12" placeholder="Másculino" value="{{ $solicitudes->descripcion}}">
                        </div>
                      </div>
                        <!--otro-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_solicitud2">tipo_solicitud<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="tipo_solicitud" id="tipo_solicitud2" required="required" class="form-control col-md-7 col-xs-12" placeholder="Másculino" value="{{ $solicitudes->tipo_solicitud}}">
                        </div>
                      </div>
                       <!--otro-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha2">fecha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="fecha" id="fecha2" required="required" class="form-control col-md-7 col-xs-12" placeholder="Másculino" value="{{ $solicitudes->fecha}}">
                        </div>
                      </div>
                       <!--otro-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora2">Hora<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="hora" id="hora2" required="required" class="form-control col-md-7 col-xs-12" placeholder="M" value="{{ $solicitudes->hora}}">
                        </div>
                      </div>
                      <!-- -Fin -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                          <button type="submit" class="btn btn-success">Guardar cambios</button>
                          <button class="btn btn-primary" type="button">Nuevo</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection
