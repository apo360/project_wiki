<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Acesso | Plataforma Académica</title>
    
    <style>
        .cascading-right {
          margin-right: -50px;
        }
    
        @media (max-width: 991.98px) {
          .cascading-right {
            margin-right: 0;
          }
        }
   </style>
   
  </head>
  <body>
      <!-- Section: Design Block -->
        <section class="text-center text-lg-start">
        
          <!-- Jumbotron -->
          <div class="container py-4">
            <div class="row g-0 align-items-center">
              <div class="col-lg-6 mb-5 mb-lg-0" style = "position: relative;">
                <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px); ">
                  <div class="card-body p-5 shadow-5 text-center">
                    <h2 class="fw-bold mb-5">Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <!-- 2 column grid layout with text inputs for the first and last names -->
        
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <label class="form-label" for="email">Email</label>
                      </div>
        
                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        <label class="form-label" for="password">Palavra-passe</label>
                      </div>
        
                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                        <label class="form-check-label" for="form2Example33">
                          Subscribe to our newsletter
                        </label>
                      </div>
        
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block mb-4" style = "background-color: #141c2c;">
                        Log in
                      </button>
        
                      <!-- Register buttons -->
                      <div class="text-center" style = "color: black">
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-facebook-f"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-google"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-twitter"></i>
                        </button>
        
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab fa-github"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4" alt="" />
              </div>
            </div>
          </div>
          <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
