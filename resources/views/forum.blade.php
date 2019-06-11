@extends('layouts.master')

@section('content')
<div class="container">
<a name="#box">
<div class="box box-widget">
            <div class="box-header with-border">
            <ul class="products-list product-list-in-box">
                @foreach($quizs as $quiz)
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('/img/default-50x50.gif') }}" alt="Q">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{ $quiz->category}}
                      <span class="label label-warning pull-right">Posted: {{ $quiz->created_at}}</span></a>
                    <span class="product-description">
                    
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Samsung
                      <span class="label label-warning pull-right">$1800</span></a>
                    <span class="product-description">
                          HDTV.
                        </span>
                  </div>
                </li>
                @endforeach
              </ul>
          </div>
          <!-- /.box -->
          </a>
  </div>
@endsection