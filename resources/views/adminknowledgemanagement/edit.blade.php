@extends('layouts.app')
@section('content')
<div class="container">

<h2>Knowledge Management Lesson {{$kmlesson->lessonNo}}</h2>

<div class="box box-warning">
            <div class="box-header with-border">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="{{ route('adminnetadmin.update', $kmlesson->id)}}" method="post">
       @csrf
       @method('PUT')
            <p>Lesson No.</p>
             <input class="form-control" type="text" value="{{$kmlesson->lessonNo}}" >
            <p>Objectives</p>
            <textarea class="form-control">{!! $kmlesson->objectives!!}</textarea>
            <p>Content</p>
            <textarea class="form-control">{!! $kmlesson->content !!}</textarea>
            <p>Upload file</p>
              <a href="/files/{{$kmlesson->file}}" >{{$kmlesson->file}}</a>
              <input class="form-control" type="file" name="file">
              <p>References</p>
             <input class="form-control" type="text" value="{{$kmlesson->references}}" >
              <p>&nbsp;</p>
              <button type="submit" onclick="return confirm('Update Lesson Details?')" class="pull-right btn btn-sm btn-primary">Save</button>
              <a class="btn btn-danger btn-sm" href="{{ route('adminknowledgemanagement.index')}}">Go Back</a>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection