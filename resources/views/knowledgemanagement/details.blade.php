@extends('layouts.master')
@section('content')
<div class="container">

<h2>Network Administration Lesson {{$netlesson->lessonNo}}</h2>

<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Lesson No {{$netlesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $netlesson->objectives!!}
            <h3>Content</h3>
            <div id="def">{!! $netlesson->content !!}</div>
            <div id="read" style="display:none">{!! $netlesson->content!!} <a href="#" onClick="return getLess();">Show Less</a></div>
            <h3>Download PDF</h3>
              <a href="/files/{{$netlesson->file}}" >{{$netlesson->file}}</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection