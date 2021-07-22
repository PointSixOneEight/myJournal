
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset ('resources/css/mdb.min.css ') }}"/>
  <!-- Data tables-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
  <!--J Query-->
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset ('resources/css/datatable.css') }}" />
<link rel="stylesheet" href="{{ asset ('resources/css/login.css') }}" />
<section id="login">
<img class="wave" src="{{ asset ('resources/img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset ('resources/img/bitcoin.svg') }}">
		</div>
		<div class="login-content">
			<form action="{{route('login.acc')}}" method="POST">
			@csrf
				<img src="{{ asset ('resources/img/avatar.svg') }}">
				<h2 class="title" >Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="email" class="input" >
						<span class="text-danger  ">@error('email'){{$message}}@enderror</span>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
						   <span class="text-danger  ">@error('password'){{$message}}@enderror</span>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input  type="submit" name="login" class="btn" value="Login">
				@if(Session::get('fail'))
				<div class="alert alert-danger mt-5" role="alert">
					{{Session::get('fail')}}
				</div>
				@endif
            </form>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{ asset ('resources/js/login.js') }}"></script>
<script type="text/javascript" src="{{ asset ('resources/js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
 <script type="text/javascript" src="{{ asset ('resources/js/admin.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>