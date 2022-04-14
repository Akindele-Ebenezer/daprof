<!DOCTYPE html>
<html lang="en">
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@500&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <main>
    <!-- https://www.themetechmount.com/wordpress/boldman/elementor/# -->

        <header>
            <div class="header-contact">
                <div>
                    <img src="images/call.png"> <strong>Client Services:</strong> (+234) 808 197 3388
                </div>
                <div>
                    <img src="images/email.png"> <strong>Email:</strong> daprofglobalresources@gmail.com | <img src=""><img src=""><img src=""><img src="">
                </div>
            </div>
            <nav>
                <div>
                    DAPROF LOGO
                </div>
                <div>
                    <ul>
                        <li>HOME</li>
                        <li>SERVICES</li>
                        <li>PROJECTS</li>
                        <li>CONTACT US</li> 
                    </ul>
                </div>
                <div>
                    <img src="images/call.png"> <span>CALL US</span>
                </div>
            </nav>
        </header>

        <div class="nav-sm-screen">
            <div>
                <img src="images/nav-icon.png">
            </div>
            <div>
                DAPROF LOGO
            </div>
        </div>
    
        <?php echo $__env->yieldContent('content'); ?>

        <footer>
            <div class="footer">
                <section>
                    <h3>DAPROF GLOBAL RESOURCES</h3>
                    <p>Our Company is a One-Stop Headquarter for Anti Rust Solutions. <br><br>
                    We all at Daprof Global Resources welcome you to our world of Professional corrosion services. <br><br>
                    We sincerely appreciate your interest in us and we look forward to not only meeting your corrosion services, 
                    needs but also delivering world class solutions. </p>  
                    <h4>Work Days</h4> 
                    <div class="work-days">
                        <div>Mon - Sat</div>
                        <div>09am -05pm</div>
                    </div>
                    <div class="work-days">
                        <div>Sunday</div>
                        <div>Closed</div>
                    </div>
                </section>
                <section>
                    <h4>Useful Links</h4> 
                    <ul>
                        <li>Home</li>
                        <li>Services</li>
                        <li>About</li>
                        <li>Gallery</li>
                        <li>Locations</li>
                        <li>Contact Us</li>
                    </ul>
                </section>
                <section>
                    <h4>Get Free Estimate</h4> 
                    <h3>(+234) 808 197 3388 </h3> 
                    <p>Our online scheduling and payment system is safe.</p> 
                    <button>REQUEST WITH ONLINE FORM</button>
                </section>
                <section>
                    <h4>Gallery</h4> 
                    <img src=""><img src=""><img src=""><img src=""><img src=""><img src="">
                </section>
            </div>
            <div class="footer-2">
                <div>Copyright &copy; 2022 <span>Daprof Global Resources</span> . All rights reserved. </div>
                <div><img src=""><img src=""><img src=""><img src=""></div>
            </div>
        </footer>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\daprof-app\resources\views/layouts/layout.blade.php ENDPATH**/ ?>