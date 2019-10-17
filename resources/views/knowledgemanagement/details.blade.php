@extends('layouts.master')
@section('content')
<div class="container">

<h2>Knowledge Management Lesson {{$kmlesson->lessonNo}}</h2>
<a class="btn btn-sm" href="javascript:void(0)">&nbsp;</a><a class="pull-right btn btn-sm btn-danger" href="{{ route('knowledgemanagement.index')}}">Go Back</a>

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
            <div id="read" style="display:none">{!! $kmlesson->content!!} <a href="#" onClick="return getLess();">Show Less</a></div>
            <h3>Download PDF</h3>
            @if(($kmlesson->file) !== "")
              @if(($kmlesson->file) !== "")
              <a href="/files/{{$kmlesson->file}}" >{{$kmlesson->file}}</a>
            @else
              No File Have Been Uploaded!
               @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection