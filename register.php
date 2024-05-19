<?php include 'includes/header.php' ?>


<div class='container'>
    <div class='col-12 px-lg-5 py-lg-5 px-sm-3'>
        <div class='enroll_img position-relative'>
            <img src="images/enroll.png" alt="img" class=' d-none d-md-block '>
            <img src="images/enrollmobile.png" alt="img" class=' d-block d-md-none w-100'>
            <form class="enroll_form position-absolute" action="" method="POST">
                <div class="mb-2 bg-white py-4 border-0 gfgt"
                    style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                    <h2 class='text-center logintext'>Enroll to BizMillion</h2>
                </div>
                 <div class="mb-2">
                    <label  class="form-label text-white mb-0">Name</label>
                    <input type="text" name='name' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' required>
                    
                  </div>
                   <div class="mb-2">
                    <label  class="form-label text-white mb-0">Email</label>
                    <input type="email" name='Email' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' required>
                    
                  </div>
                   <div class="mb-2">
                    <label  class="form-label text-white mb-0">Confirm Email</label>
                    <input type="email" name='name' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' required>
                    
                  </div>
                  <div class='row'>
                      <div class="col-md-6 col-6">
                        <label  class="form-label text-white mb-0">State</label>
                        <select class="form-select shadow-none " style='padding:0.4rem; font-size:11px;' required>
                          <option selected disabled value="">Select State</option>
                          <option>Delhi</option>
                           <option>Noida</option>
                        </select>
                       
                      </div>
                       <div class="col-md-6 col-6">
                        <label  class="form-label text-white mb-0">Date of Birth</label>
                        <input type="date" name='dateofbirth' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' required>
                       
                      </div>
                      <div class="col-md-6 col-6">
                        <label  class="form-label text-white mb-0">Mobile No.</label>
                        <input type="text" name='phoneno' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' placeholder="+91" required >
                       
                      </div>
                      <div class="col-md-6 col-6">
                        <label  class="form-label text-white mb-0">Password</label>
                        <input type="password" name='password' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' required>
                       
                      </div>
                       <div class="col-md-8 col-7">
                        <label  class="form-label text-white mb-0">Referal Code</label>
                        <input type="text" name='referalcode' class="form-control shadow-none" style='padding:0.4rem; font-size:11px;' required>
                       
                      </div>
                       <div class="col-md-2 col-3">
                       
                        <input type="submit" name='apply' class="btn btn-warning shadow-none bg-warning text-white rounded-pill hgtrrt" value="Apply" required>
                       
                      </div>
                  </div>
               

            </form>
        </div>
        <!--desktop bandale start -->
        <div class='row'>
            <div class='col-md-6 mb-4'></div>
            <div class='col-md-6 mb-4'></div>
            <div class='col-md-6 mb-4'></div>
            <div class='col-md-6 mb-4'></div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php' ?>