@extends('layouts.app')
@section('content')
<div class="container">

<h2>DBMS Lesson {{$dbmslesson->lessonNo}}</h2>

<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Lesson No {{$dbmslesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $dbmslesson->objectives!!}
            <h3>Content</h3>
            <div id="def">{!! $dbmslesson->content !!}</div>
            <div id="read" style="display:none">{!! $dbmslesson->content!!} <a href="#" onClick="return getLess();">Show Less</a></div>
            <h3>Download PDF</h3>
              <a href="/files/{{$dbmslesson->file}}" >{{$dbmslesson->file}}</a>
              <p>&nbsp;</p>
              <a class="btn btn-danger btn-sm" href="{{ route('admindbms.index')}}">Go Back</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection