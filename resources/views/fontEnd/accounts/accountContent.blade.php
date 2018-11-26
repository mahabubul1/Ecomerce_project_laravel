@extends("fontEnd.masterContent")

@section("mainContent")

<!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>My Account</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
        <div class="page-content">
            <div class="account-login">
              <div class="box-authentication">
                  <h4>Register</h4><p>Create your very own account</p> 	
                  <form action="">
                     <div class="form-group"> 
                         <label for="fullName"> Full Name <span class="required">*</span> </label>
                         <input type="text"  name="fullName" class="form-control" id="name" placeholder=" Enter your full name">
                     </div>

                      <div class="form-group"> 
                            <label for="emmail_register">Email address<span class="required">*</span></label>
                            <input id="emmail_register" type="text" class="form-control">
                      </div>
                        <div class="form-group"> 
                             <label for="fullName"> Password <span class="required">*</span> </label>
                             <input type="text"  name="password" class="form-control" id="password" >
                         </div>

                        <div class="form-group"> 
                          <div class="row">
                            <div class="com-sm-2">
                              <label for="birthday"> Birthday <span class="required">*</span> </label>
                             <input type="date"  name="birthday" class="form-control" id="birthday" >


                           </div>
                           
                         </div>
                      </div> 
                         <div class="col-sm-6"> 
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Gender</label>
                              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                              </select>
                           </div>
                  </form>
                <button class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
              </div>
              <div class="box-authentication">
                  <h4>Login</h4>
                    <label for="emmail_login">Email address<span class="required">*</span></label>
                    <input id="emmail_login" type="text" class="form-control">
                    <label for="password_login">Password<span class="required">*</span></label>
                    <input id="password_login" type="password" class="form-control">
                    <p class="forgot-pass"><a href="#">Lost your password?</a></p>
                    <button class="button"><i class="fa fa-lock"></i>&nbsp; <span>Login</span></button>
                    <label class="inline" for="rememberme">
                   
              </div>
        </div>
      </div>
    </div>
 </section>
  <!-- Main Container End --> 


@endsection