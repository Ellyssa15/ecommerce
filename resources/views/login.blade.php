@include('loginheader')
  <div class="container-fluid h-custom" style="width: 100%;  margin-top: 6rem;">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-6 col-lg-5 ">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                class="link-danger">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
