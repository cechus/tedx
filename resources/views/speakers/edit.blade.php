
@extends('vendor.adminlte.layouts.app')

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <form class="form-horizontal" method="POST" action="{{url('update_speaker',array($speaker->id))}}">
                      {{ csrf_field() }}
                        <fieldset>
                          <legend>Expositor</legend>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Nombre del Expositor </label>
                            <div class="col-md-10">
                              <input class="form-control" id="nombre" name="nombre" type="text" value="{!! $speaker->nombre !!}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Titulo de la charla</label>
                            <div class="col-md-10">
                              <input class="form-control" id="charla" name="charla" type="text" value="{!! $speaker->charla !!}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputFile" class="col-md-2 control-label">Imagen del Expositor</label>
                            <div class="col-md-10">
                              <input readonly="" class="form-control" placeholder="Browse..." type="text">
                              <input id="imagen" name="imagen" multiple="" type="file">
                              @if(isset($speaker->imagen) && !empty($speaker->imagen))
                              <div class="col-md-6">
                                  <img src="{!! $speaker->imagen !!}" style="height: 60px;">
                              </div>
                              @endif
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="textArea" class="col-md-2 control-label">Biografia</label>
                            <div class="col-md-10">
                              <textarea class="form-control" rows="10" id="descripcion" name="descripcion">
                                {!! $speaker->descripcion !!}
                              </textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                              <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
