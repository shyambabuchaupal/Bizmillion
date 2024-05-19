<div class="footer_main">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="footer_logo">
                <img src="images/delogo.svg" alt="logo">
                <p>The BizMillion is building the foundation of all learners. We are providing a platform where all
                    age
                    groups are welcome to enhance their skills. "Since education is the answer to all the questions we
                    are doing our best to incorporate them all".</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
            <div class="footer_h">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Course </a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Enroll Now</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>

        </div>
        <div class="col-lg-2 col-md-6 col-6">
            <div class="footer_h1">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">About Us </a></li>
                    <li><a href="#">Gallery </a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#"> Become An Instructor</a></li>

                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6 d-none d-md-block">
            <div class="footer_h2">
                <h3>Policy</h3>
                <ul>
                    <li><a href="#"> Refund Policy</a></li>
                    <li><a href="#"> Terms And Condition </a></li>
                    <li><a href="#"> Disclaimer </a></li>
                    <li><a href="#"> Privacy Policy</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="col-12 d-flex mt-3 text-center justify-content-center">
      <p class='text-center mb-0 foo-btm'>All Rights Reserved ©<?php echo date("Y")." "; ?> | BizMillion Private Limited.</p>
 
    </div>
</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const accordionContent = button.nextElementSibling;

        button.classList.toggle('active');

        if (button.classList.contains('active')) {
            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
        } else {
            accordionContent.style.maxHeight = 0;
        }

        // Close other open accordion items
        document.querySelectorAll('.accordion-header').forEach(otherButton => {
            if (otherButton !== button) {
                otherButton.classList.remove('active');
                otherButton.nextElementSibling.style.maxHeight = 0;
            }
        });
    });
});
</script>

</body>

</html>