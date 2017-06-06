<!doctype html>

<link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet"/>

<div class="container-fluid">


@include ('layout.nav')
			
		
				<h2>
					
				</h2>
				<div class="col-md-12">
					@yield('content')                
                </div>
                
                     			           
            
				
			</div>
			</div>
		</div>
	</div>
</div>

@include ('layout.footer')

   
