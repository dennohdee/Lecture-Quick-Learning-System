@extends('layouts.master')
@section('content')
<div class="container">
<h2>System Administration Lessons</h2>
<div class="row">
@if(count($syslesson)>0)
@foreach($syslesson as $syslesson)
<script type="text/javascript">
      function getAll(){
        document.getElementById('def').style.display="none";
        document.getElementById('read').style.display="block";
      }
      function getLess(){
        document.getElementById('def').style.display="block";
        document.getElementById('read').style.display="none";
      }
      </script>
  <div class="col-md-6">
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
            
            <div id="def" style="display:block">{!! str_limit($syslesson->content, 300) !!} <a href="{{ route('sysadmin.show', $syslesson->id)}}">...Show More</a></div>
            <div id="read" style="display:none">{!! $syslesson->content!!} <a href="#" onClick="return getLess();">...Show Less</a></div>
            <h3>Download PDF</h3>
              <a href="/files/{{$syslesson->file}}" >{{$syslesson->file}}</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      @endforeach
      @else
      <div class="box-body">No Lessons Have Been Posted!</div>
      @endif
      </div>
</div>
@endsection