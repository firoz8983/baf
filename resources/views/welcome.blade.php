<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BFA</title>
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>
<header id="full_nav">
<containar>
	<row>
		<nav class="navbar navbar-expand-lg navbar-light bg-light t">
  <a class="navbar-brand" href="#">BAF</a>
  <a class="baf_icon"><i class="flaticon-bird"></i>
    
</a>
  

  <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  ">
          <a class="nav-link" href="#">Welcome To <span class="bangla">Bangla</span><span class="desh">desh</span> Airforce accommodation Management System<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
	</row>
</containar>
	
</header>
<section id="full_slider">
<div class="slider_wrapper">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="{{asset('frontend/images/s1.jpg')}}" alt="First slide" height="100%"  width="100%">
      <div class="carousel-caption custom_caption d-none d-md-block">
    <h5></h5>
    <p></p> 
  </div>
    </div>
    <div class="carousel-item" role="listbox">
      <img class="d-block w-100 " src="{{asset('frontend/images/s2.jpg')}}" alt="Second slide" height="100%"   width="100%">
         <div class="carousel-caption custom_caption d-none d-md-block">
    <h5></h5>
    <p></p>
  </div>
    </div>
    <div class="carousel-item" role="listbox">
      <img class="d-block w-100 " src="{{asset('frontend/images/s3.jpg')}}" alt="Third slide" height="100%"   width="100%">
         <div class="carousel-caption custom_caption d-none d-md-block">
    <h5></h5>
    <p></p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  	
<div class="floting_div ">
		<div class="content">
			<div class="container">
			<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">


				 <form method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						    </div>
						       <input type="text" class="form-control" placeholder="email" name="email" value="{{ old('email') }}" required>
						   </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
					 <input type="password" class="form-control" placeholder="password" name="password" required>
						
					</div>
						
						   <div class="form-group col-md-4 padding">
     		<span class="input-group-text custom_icon"><i class="far fa-calendar-check"></i></span>
     		
      
             <select id="inputState" class="form-control custom_option " name="inputState">
       						

        <option type="Appointment" selected class="custom_Select">Select your Appointment</option>
        <option value="ACO">ACO</option>
         <option value="OC" >OC</option>
          <option value= "System Admin" >System Admin</option>
           <option value="System user" >System user</option>
            <option value="Desired User">Desired User</option>
      </select>
    </div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
                    </div>
                    

                      
          
                  
                    
                    



					<div class="form-group">
                        <button type="submit" class="btn float-right login_btn">
                            {{ __('Login') }}
                        </button>
    
                     
                            
						
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href=" {{ route('register') }}">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
          <a href="{{ route('password.update') }}">Forgot your password?</a>
          
				</div>
			</div>
		</div>
	</div>
			</div>				
			
			</div>
	
</div>

		</div>
	</div>
</div>
</div>
	</section>
<!--slider part end -->

	


<!---======================================All script file is add here==================================-->
	<script src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
	
	 
</body>
</html>






 


        

            
  
