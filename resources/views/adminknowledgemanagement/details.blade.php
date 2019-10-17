@extends('layouts.app')
@section('content')
<div class="container">

<h2>Knowledge Management Lesson {{$kmlesson->lessonNo}}</h2>

<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Lesson No {{$kmlesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $kmlesson->objectives!!}
            <h3>Content</h3>
            <div id="def">{!! $kmlesson->content !!}</div>
            <h3>Download PDF</h3>
               @if(($kmlesson->file) !== "")
              <a href="/files/{{$kmlesson->file}}" >{{$kmlesson->file}}</a>
            @else
              <p>No File Have Been Uploaded!</p>
               @endif
              <a class="btn btn-danger btn-sm" href="{{ route('adminknowledgemanagement.index')}}">Go Back</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection