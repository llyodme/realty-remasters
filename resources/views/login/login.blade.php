<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Re Design</title>



    <style>
:root {
	--input-padding-x: 1.5rem;
	--input-padding-y: .75rem;
  }
  
  body {
	background: #007bff;
	background-image: linear-gradient(to right,#4EA2F6,#003CFF);
  }
  
  .card-signin .card-title {
	margin-bottom: 2rem;
	font-weight: 300;
    font-size: 1.5rem;
    
  }
  
  .card-signin .card-body {
    padding: 2rem;
    border-radius: 9px 60px 9px 60px;
    background-color: white;
    box-shadow: 14px 12px 5px #00000029;
    width: 70%;
    height: 500px;
    margin-left: auto;
    margin-right: auto;

  }
  a{
      color: white;
      
  }
  .form-signin {
	width: 100%;
  }
  
  .form-signin .btn {
	font-size: 1rem;
	letter-spacing: .1rem;
	font-weight: bold;
	padding: .5rem;
    transition: all 0.2s;
    box-shadow: 0px 5px 5px #b5b5b5;
  }
  
  .form-label-group {
	position: relative;
    margin-bottom: 1rem;

  }
  
  .form-label-group input {
    height: auto;
    border: 2px solid #3A87F8;
  }
  
  .form-label-group>input,
  .form-label-group>label {
	padding: var(--input-padding-y) var(--input-padding-x);
  }
  .img-back{
      background-color: #003CFF;
      width: 10%;
      height: 10%;
  }
  .form-label-group>label {
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	margin-bottom: 0;
	/* Override default `<label>` margin */
	line-height: 1.5;
	color: #495057;
	border: 1px solid transparent;
	border-radius: .25rem;
	transition: all .1s ease-in-out;
  }
  
  .form-label-group input::-webkit-input-placeholder {
	color: transparent;
  }
  
  .form-label-group input:-ms-input-placeholder {
	color: transparent;
  }
  
  .form-label-group input::-ms-input-placeholder {
	color: transparent;
  }
  
  .form-label-group input::-moz-placeholder {
	color: transparent;
  }
  
  .form-label-group input::placeholder {
	color: transparent;
  }
  
  .form-label-group input:not(:placeholder-shown) {
	padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
	padding-bottom: calc(var(--input-padding-y) / 3);
  }
  
  .form-label-group input:not(:placeholder-shown)~label {
	padding-top: calc(var(--input-padding-y) / 3);
	padding-bottom: calc(var(--input-padding-y) / 3);
	font-size: 12px;
	color: #777;
  }
  
  /* Fallback for Edge
  -------------------------------------------------- */
  
  @supports (-ms-ime-align: auto) {
	.form-label-group>label {
	  display: none;
	}
	.form-label-group input::-ms-input-placeholder {
	  color: #777;
	}
  }
  
  /* Fallback for IE
  -------------------------------------------------- */
  
  @media all and (-ms-high-contrast: none),
  (-ms-high-contrast: active) {
	.form-label-group>label {
	  display: none;
	}
	.form-label-group input:-ms-input-placeholder {
	  color: #777;
	}
  }
  /*

  */
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card-container card-signin my-5">
              <div class="card-body">
                <img src="img/logo1.png" class="mt-2 ml-auto mr-auto" alt="Legapi Obed Realty Logo">
                <form class="form-signin mt-5">
                  <div class="form-label-group">
                    <input id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputEmail">username</label>
                  </div>
    
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">password</label>
                  </div>
    
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label mb-3" for="customCheck1">Remember password</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block font-weight-normal mt-3" type="submit"><a class="text-decoration-none text-white" href="admin.html">Login</a></button>
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>