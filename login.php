<?php include 'includes/header.php' ?>

<!-- login page start  -->

<div class="container">
    <div class='col-12 px-lg-5 py-lg-5 px-sm-3'>
        <div class='position-relative mainimglogin'>
            <img src="images/bglogin.png" alt="img" class=' d-none d-md-block '>
            <img src="images/logmob.png" alt="img" class=' d-block d-md-none w-100'>

            <form class="login_left121 position-absolute" action="includes/userlogin.php" method="POST">
                <div class="mb-3 bg-white py-3 rounded border border-warning"
                    style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
                    <h2 class='text-center logintext'>Log in to BizMillion</h2>
                </div>
                <div class="mb-3" style='border: 2px silid #ffc700 !important;'>
                    <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                    <input type="email" class="form-control shadow-none border border-warning" name="email"
                        required>

                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Password</label>
                    <input type="password" class="form-control shadow-none border border-warning" name="password"
                        required>
                </div>
                <div class="mb-3">
                    <button type="submit"
                        class="btn btn-warning shadow-none w-100 border border-warning rounded-pill text-white gfdfghgf"
                        name="login">Login</button>
                </div>
                <div class=" d-flex justify-content-end">
                    <a href='#' class='text-end text-primary'>Reset Password</a>
                </div>

            </form>

        </div>

    </div>
</div>
</div>


<!--<div class="loginSection">-->
<!--    <div class="col-12">-->
<!--        <div class="loginmig position-relative">-->
<!--            <img src="images/loginbg.png" alt="img" class=' d-none d-md-block w-100'>-->
<!--            <img src="images/loginmob.png" alt="img" class=' d-block d-md-none w-100'>-->
<!--            <div class="login_left11 position-absolute top-0 atart-100">-->
<!--             <img src="images/loginimg.png" alt="img" class='w-50'>-->
<!--            </div>-->
<!--        </div>-->


<!--    </div>-->
<!--</div>-->

<!-- login page end  -->

<?php include 'includes/footer.php' ?>