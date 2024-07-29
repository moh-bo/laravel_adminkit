<div>
 
    
    
    <div class="container-fluid custom-page">
        <div class="row bg-white">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent-3">
                <div class="row w-100 mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto w-100">
               <!-- Start::row-1 -->
                {{-- <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"> --}}
                
                    
                                <div class="swiper swiper-basic">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="assets/images/11.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="assets/images/21.jpg" alt=""></div>
                                        <div class="swiper-slide"><img src="assets/images/31.jpg" alt=""></div>
                                    </div>
                                </div>
                        
                        {{-- </div>
                    </div> --}}
             
              
                <!--End::row-1 -->
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex">
                                       
                                    </div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <div class="row">
                                                <div class="col-md-2 col-lg-2 col-xl-3 ">
                                            <img src="assets/images/logo.png"
                                              class="desktop-logo ht-40" alt="logo" style="width: 90%;height: 97px; margin-top: -6px; ">
                                                </div>
                                              <div class="col-md-10 col-lg-10 col-xl-6 ">
                                            <h3>Welcome back!</h3>
                                            <h6 class="fw-medium mb-4 fs-17"  style=" animation-direction: alternate-reverse;" >Please sign in to continue.</h6>

                                                </div>
                                            </div>
                                            <form form wire:submit='login' style=" margin-top: 67px; ">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Email</label> <input class="form-control"
                                                    wire:model="email"    placeholder="Enter your email" type="text">
                                                    @error('email')
                                                    <p class="text-sm error-message mt-1">{{ $message }}</p>
                                                @enderror
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Password</label> <input class="form-control"
                                                    wire:model="password" placeholder="Enter your password" type="password">
                                                    @error('password')
                                                    <p class="text-sm error-message mt-1">{{ $message }}</p>
                                                @enderror
                                                </div>
                                                @error('login_failed')
                                                <p class="text-sm error-message mt-1">{{ $message }}</p>
                                            @enderror

                                                <button type="submit" class="btn btn-primary btn-block w-100">Sign in</button>
                                              
                                            </form>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
    
  

</div>
