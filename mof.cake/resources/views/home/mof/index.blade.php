@extends('layouts.mof')
@section('title','莫夫主页')
@section('content')
   <!--slide-->
   <div id="wrapper">
      <div class="fullwidthbanner-container">
         <div class="fullwidthbanner">
            <ul>
               @foreach($image as $v)
               <li><img src="/{{$v->imgs}}" alt="" /></li>
               @endforeach
            </ul>
         </div>
         <div class="tp-leftarrow"><img src="/resources/views/home/style/img/left.png"></div>
         <div class="tp-rightarrow"><img src="/resources/views/home/style/img/right.png"></div>
         </div>
   </div>

   <!--新作品展览 1-->
   <div id="picture-list">
      <ul class="plist">
         @foreach($twelve as $v)
         <li><a href=""><img src="/{{$v->image}}"></a></li>
         @endforeach
      </ul>
   </div>
   
   <!--作品展览1-->
   <div id="images">
      @foreach($technology as $v)
        <div class="image">
           <ul>
              <li class="div">{{$v->title}}</li>
              <li>{{$v->describe}}</li>
              <li><a href="">进一步了解 ></a></li>
           </ul>
           <img src="/{{$v->image}}">
        </div>
      @endforeach
   </div>
@endsection