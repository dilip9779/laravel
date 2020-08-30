@include('header')
@include('aside')
<div class="content-wrapper">
        <section class="content">
		<div class="box">
			<div class="box-body">

 @yield('content')
                 </div>				
                </div>		  
           </div>		   
        </section>
</div>
  @include('footer')