@extends('layouts.mof')
@section('title','莫夫设计')
<link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/reset.css">
<link rel="stylesheet" type="text/css" href="/resources/views/home/style/css/mofdesign.css">
@section('content')
         <!--content-->
         <div class="content">
            <ul class="content_ul">
               <li><img src="/resources/views/home/style/img/mof/mofdesign/mofdesign.png"></li>
            </ul>
            <ul class="content_ul">
               <li class="div">设计</li>
               <li>
                  人与人间的信任，就像是纸片，一旦破损，就不会再回到原来的样子。
               </li>
               <li><a href="http://mof.cake/home/mof/work">了解更多 ></a></li>
            </ul>
            <ul class="content_ul">
               <li>莫夫设计</li>
               <li>模具设计</li>
               <li>创新设计</li>
            </ul>
            
         <!--点击切换区域-->
            <div>
               <div class="con">
                  <p class="div">莫夫设计</p>
                  <ul class="con_ul">
                     <li><img src="/resources/views/home/style/img/mof/mofdesign/yuanqiu.png"></li>
                  </ul>
                  <ul class="con_ul con_ulul">
                     @foreach($design1 as $v)
                        <li>{{$v->describe}}</li>
                     @endforeach
                  </ul>
                  <ul class="con_ul con_ulliimg">
                     @foreach($design1 as $v)
                        <li><img src="/{{$v->image}}"></li>
                     @endforeach
                  </ul>
                  <div class="con_ulli">
                     <div class="div">相关产品</div>
                     <p><a href="http://mof.cake/home/mof/work">了解更多></a></p>
                     <ul class="con_ulimg">
                        @foreach($des1 as $v)
                        <li><img src="/{{$v->image}}"></li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="con">
                  <p class="div">模具设计</p>
                  <ul class="con_ul">
                     <li><img src="/resources/views/home/style/img/mof/mofdesign/zhongguo.png"></li>
                  </ul>
                  <ul class="con_ul con_ulul">
                     @foreach($design2 as $v)
                        <li>{{$v->describe}}</li>
                     @endforeach
                  </ul>
                  <ul class="con_ul con_ulliimg">
                     @foreach($design2 as $v)
                        <li><img src="/{{$v->image}}"></li>
                     @endforeach
                  </ul>
                  <div class="con_ulli">
                     <div class="div">相关产品</div>
                     <p><a href="http://mof.cake/home/mof/work">了解更多></a></p>
                     <ul class="con_ulimg">
                        @foreach($des2 as $v)
                           <li><img src="/{{$v->image}}"></li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <div class="con">
                  <p class="div">创新设计</p>
                  <ul class="con_ul">
                     <li><img src="/resources/views/home/style/img/mof/mofdesign/yingyong.png"></li>
                  </ul>
                  <ul class="con_ul con_ulul">
                     @foreach($design3 as $v)
                        <li>{{$v->describe}}</li>
                     @endforeach
                  </ul>
                  <ul class="con_ul con_ulliimg">
                     @foreach($design3 as $v)
                     <li><img src="/{{$v->image}}"></li>
                     @endforeach
                  </ul>
                  <div class="con_ulli">
                     <div class="div">相关产品</div>
                     <p><a href="http://mof.cake/home/mof/work">了解更多></a></p>
                     <ul class="con_ulimg">
                        @foreach($des3 as $v)
                        <li><img src="/{{$v->image}}"></li>
                           @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>

<!--     引入js-->
      <script src="/resources/views/home/style/js/jquery-1.8.3.min.js"></script>
      <script src="/resources/views/home/style/js/mofdesign.js"></script>
@endsection