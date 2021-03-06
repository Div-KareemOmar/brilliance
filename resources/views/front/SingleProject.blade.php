@extends('front.layout')

@section('content')



    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front/images/background/bg-page-title-1.jpg')}});">
        <div class="auto-container">
            <h1>{{  $Project->getTranslatedAttribute('title',$lang) }}</h1>
        </div>
    </section>
    
    <!--Page Info-->

    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="@if($lang == 'ar') pull-right @else pull-left @endif"><h2>{{  $Project->getTranslatedAttribute('title',$lang) }}</h2></div>
            <div class="@if($lang == 'ar') pull-left @else pull-right @endif">
                <ul class="bread-crumb clearfix">
                <li><a href="{{url("$lang")}}">{{__('index.home')}}</a></li>
                <li></li>
                    
                </ul>
            </div>
        </div>
    </section>
    
    <!--Project Details Section-->
    <section class="project-details">
    	<div class="auto-container">
            
            <!--Project Images-->
            <div dir="ltr" class="project-images">
            	<ul class="single-item-carousel">
                    @php
         
                    $images = json_decode($Project->img); 
                
                @endphp 

                @foreach ($images as $img)
                <li><figure class="image-box"><a href="{{asset("storage/$img")}}" class="lightbox-image" title="Image Caption Here"><img style="height: 500px;" src="{{asset("storage/$img")}}" alt=""></a></figure></li>
                @endforeach

                </ul>
            </div>
            
            <!--Project Content-->
            <div class="project-content">
            	<h2>{{  $Project->getTranslatedAttribute('title',$lang) }}</h2>
            	<div class="row clearfix">
                	<!--Content Column-->
                    <div class="content-column col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    	<div class="text">{!! $Project->getTranslatedAttribute('content',$lang) !!}</div>
                       
                    </div>
                
                </div>
            </div>
            
        
           
        </div>
    </section>


@endsection
