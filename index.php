<?php include 'includes/header.php'; ?>

<!-- hero section start  -->
<div class='col-12 position-relative'>
    <img src="images/BANNER 2.svg" alt="img" class='w-100 d-none d-md-block'>
   
    <img src="images/frf.svg" alt="img" class='w-100 d-block d-md-none'>
    <!--<img src="https://i.postimg.cc/zvCxWpST/enthusiastic-young-woman-glasses-teacher-celebrating-raising-hand-up-cheering-tirumphing-with.jpg" alt="img" class='w-100 d-block d-md-none' style="margin-top:300px">-->
    <div class="left-text">
        <p>
            Develop your<br><span style='color:#FFC727;font-weight:600;'>SKILLS</span> in a new<br> and
            different way
        </p>

    </div>
    <div class="left-text1">
        <p>
            Experience a transformative approach to skill
            development on our online learning platform.
            Uncover a new realm of learning experiences and elevate your expertise in unique ways.
        </p>
    </div>
    <div class="left-btn">
        <a href="" class='text-black'>Enroll Now</a>
    </div>
    <div class="figicon">
        <img src="images/tt.gif" alt="img">
    </div>
    <div class="firstimg d-none">
        <img src="images/1.png" alt="img">
    </div>
    <div class="firstimg1 d-none ">
        <p>30+ <br> Online Courses</p>
    </div>
    <div class="firstimg2 d-none">
        <p>Your Success <br>Our Duty</p>
    </div>

</div>

<!-- hero section start  -->
<!-- package secton start  -->
<div class="Biz_pac">
    <h6> Packages for <span style='color:#1B1B1B;'>Growth</span></h6>
</div>
<div class="total_pac">
    <div class="container">
        <div class="row">
            <?php
            $packQuery="SELECT * FROM `bizpack`";
            $packResult=mysqli_query($db,$packQuery);
            while($packRow=mysqli_fetch_assoc($packResult)){
                ?>
            <div class="col-md-6 col-lg-3 col-12 mb-4 zoom">
                <div class="pac_img m-auto">
                    <img src="packImg/<?=$packRow['image']?>" alt="silver" class='w-100'>
                    <div class="pac_name mb-0">
                        <p class='ms-2'><?=$packRow['name']?></p>
                    </div>
                    <div class="pac_star ms-2">
                        <span>4.5</span>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-half" style='color:#FFC807;'></i>
                        <span>(467,65)</span>
                    </div>
                    <div class="pac_price d-flex justify-content-between mt-1">
                        <p class='ms-2 '><span style='color:green;'><i
                                    class="bi bi-currency-rupee"></i><?=$packRow['price']?></span>
                            <del><i class="bi bi-currency-rupee"></i><?=$packRow['disprice']?></del>
                        </p>
                        <a class='me-2' href="bundleDetail.php" style='color:#0057FF;'>View More</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


        </div>
    </div>
</div>
<!-- package_section end  -->

<!-- online section start  -->
<div class="row">
    <div class="col-md-6">
        <div class="online_img">
            <img src="images/online_rightimg.png" alt="online" class='w-100'>
        </div>
    </div>
    <div class="col-md-6 ">
        <div class="online_text">
            <div class="medol">
                <img src="images/medel.png" alt="img">
                <p>Premium learning experience</p>
            </div>

            <h6>Online <span style='color:#FFC700;'>learning</span><br> wherever and whenever.</h6>
        </div>
        <div class="online_bgimg ">
            <img src="images/online_leftimg.png" alt="online" class='w-100'>
            <div class="textmain">
                <ul>
                    <li class='first_li'>Master the skills that matter to you</li>
                    <li class='first_li1'>Web-based training you can consume at your own<br> pace</li>
                    <li class='first_li'>Courses are interactive.</li>
                    <li class='first_li'>Connect with effective methods</li>
                    <li class='first_li'>Increase your learning skills</li>
                </ul>
                <div class="left-btn1">
                    <a href="" class='text-white'>Enroll Now</a>
                    <div class="figicon1">
                        <img src="images/tt.gif" alt="img">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- online section end  -->

<!-- courses section start  -->
<div class="col-12 pt-5">
    <h3 class='course_heading'>Popular <span style='color:#FFC700;'>Courses</span></h3>
</div>

<!--desktop course page -->
<div class='new_course d-none d-md-block mx-5 my-5 rounded' style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
    <div class='row py-3 px-3'>
        <div class='col-md-4'>
            <div class='imgCourse'>
                <img src="images/1.svg" alt="img" class='w-50 rounded'>
            </div>
        </div>
        <div class='col-md-6'>
            <div class='textCourse'>
                <h2>Data Science</h2>
                <p>
                   Students learn how to collect, analyze, and interpret large sets of data to extract
                   valuable insights and make data-driven
                   decisions. The course often involves hands-on
                   projects to apply learned concepts to real-world problems.
                </p>
                 <div class="pac_star mt-2">
                    <span>4.5</span>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-half" style='color:#FFC807;'></i>
                    <span>(467,65)</span>
                </div>
            </div>
        </div>
        <div class='col-md-2 d-flex justify-content-end align-items-center'>
             <a href="#"><img src="images/bjGzP.jpg" alt="img" class='w-50'></a>
        </div>
    </div>
</div>
<div class='new_course d-none d-md-block mx-5 my-5 rounded' style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
    <div class='row py-3 px-3'>
        <div class='col-md-4'>
            <div class='imgCourse'>
                <img src="images/2.svg" alt="img" class='w-50 rounded'>
            </div>
        </div>
        <div class='col-md-6'>
            <div class='textCourse'>
                <h2>Digital marketing</h2>
                <p>
                  Participants learn how to create effective digital marketing strategies,
                  optimize online presence, and leverage various digital channels
                  to reach and engage with target audiences.
                </p>
                 <div class="pac_star mt-2">
                    <span>4.5</span>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-half" style='color:#FFC807;'></i>
                    <span>(467,65)</span>
                </div>
            </div>
        </div>
        <div class='col-md-2 d-flex justify-content-end align-items-center'>
            <a href="#"><img src="images/bjGzP.jpg" alt="img" class='w-50'></a>
             
        </div>
    </div>
</div>
<div class='new_course d-none d-md-block mx-5 my-5 rounded' style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
    <div class='row py-3 px-3'>
        <div class='col-md-4'>
            <div class='imgCourse'>
                <img src="images/3.svg" alt="img" class='w-50 rounded'>
            </div>
        </div>
        <div class='col-md-6'>
            <div class='textCourse'>
                <h2>Stock Market</h2>
                <p>
                  Participants learn how to analyze stocks, understand market trends, and make informed investment decisions. The course often includes real-world case studies,
                  simulations, and practical exercises to help students apply their knowledge effectively in the stock market.
                </p>
                 <div class="pac_star mt-2">
                    <span>4.5</span>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-half" style='color:#FFC807;'></i>
                    <span>(467,65)</span>
                </div>
            </div>
        </div>
        <div class='col-md-2 d-flex justify-content-end align-items-center'>
            <a href="#"> <img src="images/bjGzP.jpg" alt="img" class='w-50'></a>
            
        </div>
    </div>
</div>





<!-- mobile vieww course card  -->
<div class="container-fluid">
    <div class="mobile_course d-block d-md-none p-3 rounded" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>
        <div class="row">
            <div class="col-lg-12">
                <img src="images/courseimg.jpeg" alt="img" class='w-100'>
                <div class="course_name py-3">
                    <p>Digital Marketing Mastery</p>
                    <small>Digital Dhairya</small>
                </div>
                <div class="pac_star mt-1">
                    <span>4.5</span>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                    <i class="bi bi-star-half" style='color:#FFC807;'></i>
                    <span>(467,65)</span>
                </div>
                <div class="card mb-3 border-0" style="max-width: 540px;">
                    <div class="row g-0 mt-2">
                        <div class="col-lg-12 d-flex">
                            <img src="images/Vector.png" class="wefrr" alt="img">
                            <p class='ms-3'>2 Lakh+<br> Students Enrolled</p>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p class='hhgbgtjk'>₹4400</p>
                    <a href="#" class='text-primary'>View More</a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- course section end  -->


<!-- why section start  -->
<div class="col-12 pt-5">
    <h3 class='text-center tytytyu'>Why BizMillion <span style='color:#FFC700;'>?</span></h3>

</div>
<div class="why_course pt-4">
    <div class="row">
        <div class="col-md-4 col-lg-4 col-12 zoom">
            <div class="whymig card border-0 m-auto"
                style='width: 277px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                <img src="images/w1.png" alt="img">

            </div>
            <div class="why_text">
                <h2>Educate</h2>
                <p>From the best of the best trainers</p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12 zoom">
            <div class="whymig card border-0 m-auto"
                style=' width: 277px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                <img src="images/w2.png" alt="img">
            </div>
            <div class="why_text">
                <h2>Innovate</h2>
                <p>Attain sought-after knowledge for your professional growth</p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12 zoom">
            <div class="whymig card border-0 m-auto"
                style='width: 277px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;'>
                <img src="images/w3.png" alt="img">
            </div>
            <div class="why_text">
                <h2>Success</h2>
                <p>Make an impact with the help of best training programs</p>
            </div>
        </div>
    </div>
</div>
<!-- why section end  -->

<!-- faq section start  -->
<div class="col-12 pt-5">
    <h2 class='faq_heading'>Frequently Asked <span style='color:#FFC700;'>Questions</span></h2>
</div>

<div class="faq_start">
    <div class="col-12">
        <div class="accordion-container">
            <div class="accordion-item hhhhhtt">
                <button class="accordion-header">
                    FAQ Question 1 <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Answer to question 1...</p>
                </div>
            </div>
            <div class="accordion-item hhhhhtt">
                <button class="accordion-header">
                    FAQ Question 2 <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Answer to question 2...</p>
                </div>
            </div>
            <div class="accordion-item hhhhhtt">
                <button class="accordion-header">
                    FAQ Question 3 <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Answer to question 3...</p>
                </div>
            </div>
            <div class="accordion-item hhhhhtt">
                <button class="accordion-header">
                    FAQ Question 4 <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Answer to question 4...</p>
                </div>
            </div>
            <div class="accordion-item hhhhhtt">
                <button class="accordion-header">
                    FAQ Question 5 <span class="icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Answer to question 5...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq section end  -->

<!-- Testimonials start  -->
<div class="col-12 pt-5 mb-3 ">
    <h2 class='test_heading'>Testimonials</h2>
</div>
<div class="testimonials_di">
    <div class="row">
        <div class="col-lg col-12 mb-4 zoom">
            <div class="card" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:2px solid #FFC700;border-radius: 24px;'>
               <div class=' d-flex justify-content-center mt-4'>
                    <img src="images/t1.png" class="card-img-top" alt="img" style='width:59px; height:59px;padding: 5px;'><br>
                       
               </div>
               <small class='ms-2 text-center'>Preeti Singh</small>
            

                <div class="card-body">
                    <div class="pac_star mt-2 text-center">

                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-half" style='color:#FFC807;'></i>

                    </div>
                    <p class="card-text small tytytytyt">
                        I received my certificate, and I would like to thank you for your support. Your course was
                        challenging
                    </p>

                </div>
            </div>
        </div>
        <div class="col-lg col-12 mb-4 zoom">
            <div class="card" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:2px solid #FFC700;border-radius: 24px;'>
               <div class=' d-flex justify-content-center mt-4'>
                    <img src="images/t1.png" class="card-img-top" alt="img" style='width:59px; height:59px;padding: 5px;'><br>
                       
               </div>
               <small class='ms-2 text-center'>Preeti Singh</small>

                <div class="card-body">
                    <div class="pac_star mt-2 text-center">

                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-half" style='color:#FFC807;'></i>

                    </div>
                    <p class="card-text small tytytytyt">
                        I received my certificate, and I would like to thank you for your support. Your course was
                        challenging
                    </p>

                </div>
            </div>
        </div>
        <div class="col-lg col-12 mb-4 zoom">
            <div class="card" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:2px solid #FFC700;border-radius: 24px;'>
                 <div class=' d-flex justify-content-center mt-4'>
                    <img src="images/t1.png" class="card-img-top" alt="img" style='width:59px; height:59px;padding: 5px;'><br>
                       
               </div>
               <small class='ms-2 text-center'>Preeti Singh</small>

                <div class="card-body">
                    <div class="pac_star mt-2 text-center">

                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-half" style='color:#FFC807;'></i>

                    </div>
                    <p class="card-text small tytytytyt">
                        I received my certificate, and I would like to thank you for your support. Your course was
                        challenging
                    </p>

                </div>
            </div>
        </div>
        <div class="col-lg col-12 mb-4 zoom">
            <div class="card" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:2px solid #FFC700;border-radius: 24px;'>
                <div class=' d-flex justify-content-center mt-4'>
                    <img src="images/t1.png" class="card-img-top" alt="img" style='width:59px; height:59px;padding: 5px;'><br>
                       
               </div>
               <small class='ms-2 text-center'>Preeti Singh</small>

                <div class="card-body">
                    <div class="pac_star mt-2 text-center">

                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-half" style='color:#FFC807;'></i>

                    </div>
                    <p class="card-text small tytytytyt">
                        I received my certificate, and I would like to thank you for your support. Your course was
                        challenging
                    </p>

                </div>
            </div>
        </div>
        <div class="col-lg col-12 mb-4 zoom">
            <div class="card" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:2px solid #FFC700;border-radius: 24px;'>
               <div class=' d-flex justify-content-center mt-4'>
                    <img src="images/t1.png" class="card-img-top" alt="img" style='width:59px; height:59px;padding: 5px;'><br>
                       
               </div>
               <small class='ms-2 text-center'>Preeti Singh</small>

                <div class="card-body">
                    <div class="pac_star mt-2 text-center">

                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-fill" style='color:#FFC807;'></i>
                        <i class="bi bi-star-half" style='color:#FFC807;'></i>

                    </div>
                    <p class="card-text small tytytytyt">
                        I received my certificate, and I would like to thank you for your support. Your course was
                        challenging
                    </p>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Testimonials end  -->



<!-- note section start  -->
<div class="note py-5">
    <div class="container11 mx-4">
        <div class="col-12 d-flex" style='box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border:2px solid #FFC700;padding: 1vw 2vw;border-radius: 24px;'>
            <div class='col-2'>
                <b>Note:-</b>
            </div>
            <div class='col-8'>
                <p class='text_note'>
                    BizMillion is not liable for payments made outside our website for our
                    course. Please use
                    our secure payment gateway on our website to avoid scams or fraudulent activities.
                </p>
            </div>
            
        </div>
    </div>
</div>
<!-- note section end  -->
<?php include 'includes/footer.php'; ?>