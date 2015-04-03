<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
 <link rel="stylesheet" href="bower_components/foundation/css/normalize.css">

  <link rel="stylesheet" href="bower_components/foundation/css/foundation.css">
  <link rel="stylesheet" href="assets/css/app.css">
  

  <script src="bower_components/modernizr/modernizr.js"></script>
	<link rel="stylesheet" href="">
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Expenses Tracker</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="#">Login</a></li>
      
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
     
    </ul>
  </section>
</nav>


	
<section id="hero-cover" >

	<div class="row">
		<div class="large-8 large-centerd medium-8 medium-centered columns">
			<h1 class="white-text">Register now and start tracking your expenses</h1>
			<p class="text-center"><a href="#" class="button radius	">Register Now</a></p>
		</div>
	</div>
	
</section>
<section class="appsections">
	<div class="row">
		<div class="large-8 large-centered medium-8 medium-centered columns">
			<div class="row">
				<div class="large-12 medium-12 columns">
					<table>
					  <thead>
					    <tr>
					      <th width="200">Nombre</th>
					      <th>Email</th>
					      <th width="150">Registro</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($users as $user)
					    <tr>
					      <td>{!! $user->name !!}</td>
					      <td>{!! $user->email !!}</td>
					      <td>{!! $user->created_at !!}</td>
					      
					    </tr>
					    @endforeach
					   </tbody>
					</table>
	

				</div>
				
				<div class="large-12 medium-12 columns">
					
					<div class="pagination-centered">
					    {!! $users->render(Foundation::paginate($users)) !!}
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>




 <script src="bower_components/jquery/dist/jquery.js"></script>
  
   <script src="bower_components/foundation/js/foundation.min.js"></script>
  
		<script>

		$(document).foundation();

	</script>
</body>
</html>