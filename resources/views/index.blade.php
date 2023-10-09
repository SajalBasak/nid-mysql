<!DOCTYPE html>
<html>
<head>
	<title>NID Project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
</head>
<body>
	<div align="center" class="new-div">
    <div class="inner">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo.png') }}" width="80" height="80" alt="">
        </a>
        <p class="logo-name">
          Election Commission Bangladesh
        </p>
      </nav>
      <div class="option">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LogIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admin Panel</a>
          </li>
        </ul>
      </div>
    </div>
  </div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>