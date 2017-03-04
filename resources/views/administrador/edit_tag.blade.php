
@extends('vendor.adminlte.layouts.app')

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tag</h3>
                    </div>
                
                       <form method="POST" action="{{url('update_tag',array($tag->id))}}">
                    {{ csrf_field() }}

                      <div class="form-group">
                            <label for="tag_name">tag name:</label>
                            <input type="text" class="form-control" id="tag_name" name="tag_name" value="{{$tag->name}}">
                          </div>
                          
                          <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
