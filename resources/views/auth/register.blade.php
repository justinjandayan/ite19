<!DOCTYPE html>
<html lang="en">
<head>
  <title>DEALER FLOW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <style>
    /* Add this style to your existing styles or update the existing one */
    .heading-section {
      font-family: 'Bebas Neue', cursive; /* Use Bebas Neue or your preferred Fast and Furious style font */
      font-size: 36px; /* Adjust the font size as needed */
      color: #fff; /* Set the font color to match your design */
      letter-spacing: 2px; /* Adjust letter-spacing for a stylized look */
    }

    /* You might want to update other styles using Bebas Neue as well */
    body {
      margin: 0;
      overflow: auto;  /* Prevent scrollbars caused by particles overflow */
    }

    #particles-js {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .content-container {
      position: relative;
      z-index: 1; /* Ensure the content is above the particles */
    }
  </style>
</head>
<body class="img js-fullheight" style="background-image: url(frontend/images/background_car.jpg);">
  <div id="particles-js"></div>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">DEALER FLOW</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Register your Account</h3>


            @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
		      	<form action="{{ route('post.register') }}" method="post">
              @include(' _message')
					{{ csrf_field() }}

					<div class="form-group">
						<label for="user_type">Register As?:</label>
					  <select name="user_type" id="user_type">
						  <option value="2">Customer </option>
						  <option value="3">Dealer</option>
						  <option value="4">Supplier</option>
					  </select>
						</div>

            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"  placeholder="First Name" required>
            </div>

			<div class="form-group">
				<input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}"  placeholder="Last Name" required>
			  </div>

		      		<div class="form-group">
		      			<input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
		      		</div>

					
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>

              <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password_confirmation" id="password" placeholder="Retype Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>


	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	
								<div class="w-50 ">
									<a href="{{ url('/') }}" style="color: #fff">Click to Login</a>
								</div>
                
                
	            </div>
	          </form>
      
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/css/js/popper.js') }}"></script>
  <script src="{{ asset('frontend/css/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/css/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/particle.js') }}"></script>

	</body>
</html>
