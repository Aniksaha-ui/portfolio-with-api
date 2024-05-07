@extends('admin.admin_layout')

@section('admin_panel')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Blog Details of {{$blog->title}}</h5>
            </div>
            <div class="card pd-20 pd-sm-40">
               <h2 class="text-dark">{{$blog->title}}</h2>
               <p class="text-dark">{!! $blog->description !!}</p>
            </div>
        </div>
    @endsection
