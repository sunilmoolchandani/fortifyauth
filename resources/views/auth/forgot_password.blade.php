<style>
    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                </div>

                <form action="{{route('password.request')}}" method="POST">
                  @csrf
                  <p>Please login to your account</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" name="email"/>
                    <label class="form-label" for="form2Example11">Username</label>
                    @error('email')
                    <span>{{$message}}</span>
                    @enderror()
                  </div>

                  

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Submit</button>
                    
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>