@extends('layouts.admin')
@section('content')
    {{--<form>
        <p>
            <input type="text" name="nombre">
        </p>
        <p>
            <select name="categoria">
                <option value="GOLD">GOLD</option>
                <option value="PLATINIUM">PLATINIUM</option>
            </select>
        </p>
        <p>
            <input type="file">
        </p>
    </form>--}}

    <div class="section scrollspy" id="contact">
        <div class="container">
            <div class="row">
                <h2>Aliado</h2>
            </div>
            <div class="row">
                {!! Form::open(['route' => ['aliado'], 'files'=>true]) !!}

                {{--<form class="col s12 m12 l8 offset-l2"  accept-charset="UTF-8" files="true" enctype="multipart/form-data">--}}
                    <!-- This field helps us avoid spam bots, don't remove it -->

                    <!-- End of anti-spam field -->
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>file</span>
                            {!! Form::file('archivo',['required','accept' => 'image/*']) !!}
                            {{--<input type="file" name="archivo">--}}
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" placeholder="seleccione el logo" type="text" name="archivo2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            {{ Form::text('nombre', null, ['class' => 'required']) }}
                            {{--<input  name="nombre" type="text" class="required">--}}
                            <label>Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            {{ Form::textarea('descripcion', null, ['class' => 'materialize-textarea']) }}
                            {{--<textarea name="descripcion" class="materialize-textarea"></textarea>--}}
                            <label >Descripcion</label>
                        </div>
                    </div>
                    <div class="center-align">
                        <button type="submit" name="send" class="btn-large">
                            GUARDAR
                        </button>
                    </div>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
