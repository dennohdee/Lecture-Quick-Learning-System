@extends('layouts.master')
@section('content')
<div class="container">

<h2>System Administration Lesson {{$syslesson->lessonNo}}</h2>
<a class="btn btn-sm" href="javascript:void(0)">&nbsp;</a><a class="pull-right btn btn-sm btn-danger" href="{{ route('sysadmin.index')}}">Go Back</a>

<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Lesson No {{$syslesson->lessonNo}}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <h3>Objectives</h3>
            {!! $syslesson->objectives!!}
            <h3>Content</h3>
            <div id="def">{!! $syslesson->content !!}</div>
            <div id="read" style="display:none">{!! $syslesson->content!!} <a href="#" onClick="return getLess();">Show Less</a></div>
            <h3>Download PDF</h3>
              @if(($syslesson->file) !== "")
              <a href="/files/{{$syslesson->file}}" >{{$syslesson->file}}</a>
            @else
              No File Have Been Uploaded!
               @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

</div>
@endsection