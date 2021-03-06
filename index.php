<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Blue Wings Global</title>
    <meta name="description" content="BlueWings Global is a transportation and logistic startup, founded by Ankit Sharma.BlueWings Global transports various kinds of goods such as Textile, Agro Products, Spices and Tea, Granites & Marbles, Office Bags and Backpags. We deliver consignment all around the globle as we in PAN India.">
</head>

<body id="home" data-spy="scroll" data-target="#main-nav">
    <!-- START HERE -->
    <nav class="navbar navbar-expand-xl  navbar-light fixed-top py-4" id="main-nav">
        <div class="container">
            <a href="#home" class="navbar-brand">
                <img src="img/logo.jpg" height="50" width="50" alt="">
                <img src="img/brandname.png" height="50" width="150" class=" ">
            </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul id="menu-items" class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#newsletter" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#products" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>

           <!-- <h3 id="iec" class="align-middle bg-primary m-auto p-2">IEC : <span>HHMPS9929C</span></h3> -->
        </div>
    </nav>

    <!-- SHOWCASE SLIDER-->
    <section id="showcase">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="primary-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption d-block text-left mb-5">
                            <h1 class="display-3">Our Mission</h1>
                            <ul class="lead">
                                <li>To guide the customers in the best possible manner.</li>
                                <li>To provide premium services among all other consultancy companies in the market.</li>
                                <li>To increase global participation of the locally-based companies in all different fields of operations.
                                </li>
                                <li>To make all the processes easier for our customers so that they expand fearlessly.</li>
                                <li>To increase our horizons by reaching out to more companies and providing the solutions that fit their industry needs.</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary btn-lg">Get a Quote</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="primary-overlay"></div>
                        <div class="carousel-caption d-block text-center mb-5">
                            <h1 class="display-3">Our Vision</h1>
                            <p class="lead">To grow exponentially alongside witnessing the growth of our clients by reaching a global audience for all the local products and companies. </p>
                            <a href="#contact" class="btn btn-primary btn-lg">Get in Touch</a>
                        </div>
                    </div>
                </div>

                <!-- Left & Right Controls -->
                <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>

                <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <!-- For Screen below 768px -->
        <div class="showcasebelow410 bg-light my-1">
            <div class="container">
                <div class="row">
                    <div class="col mb-resp text-center">
                        <h1 class="display-3  text-primary text-uppercase">Our Mission
                        </h1>
                        <ul class="font-italic text-dark list-unstyled">
                            <li data-aos="fade-left" class="py-1">To guide the customers in the best possible manner.</li>
                                <li class="py-1">To provide premium services among all other consultancy companies in the market.</li>
                                <li data-aos="fade-right" class="py-1">To increase global participation of the locally-based companies in all different fields of operations.
                                </li>
                                <li class="py-1">To make all the processes easier for our customers so that they expand fearlessly.</li>
                                <li data-aos="fade-left" class="py-1">To increase our horizons by reaching out to more companies and providing the solutions that fit their industry needs.</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mb-resp text-center">
                        <h1 class="display-3 text-primary text-uppercase">Our Vision</h1>
                        <p class="font-italic text-dark" data-aos="fade-up">To grow exponentially alongside witnessing the growth of our clients by reaching a global audience for all the local products and companies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id="newsletter" class="text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg mb-resp" placeholder="Enter Name" required>
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control form-control-lg mb-resp" placeholder="Enter Email" required>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-lg btn-block">
                        <i class="fas fa-envelope-open-o"></i> Subscribe to our Newsletter
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- About US -->
    <section id="founders" class="py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div id="about-us" class="col-md-7">
                    <h1 class="text-dark pb-3 text-uppercase">
                        About Us
                    </h1>
                    <p class="font-italic text-dark">
                        With a diversified portfolio spread into categories like Textile Manufacturing, Agro Products, Granite and Marble, Spices, Tea, and Backpacks, Blue Wings is a one-stop-shop for every company that focuses on household’s needs. We have a global vision to succeed at the international as well as the local level. Alongside providing the best solutions for international sales and strategies that can make local companies global, we take care of the products so that they reach safe and sound to the end consumer. Risk Management is our forte because we, at Blue Wings, are cautious about documentation and all the legal procedures that are important according to the nature and scope of the business. 
                    </p>
                </div>
                <div id="founders-card" class="col-md-5">
                    <div  class="card">
                        <div class="card-body">
                            <img src="img/person.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Ankit Narendra Sharma</h3>
                            <h5 class="text-muted">Director</h5>
                            <ul class="list-unstyled">
                                <li>A young and enthusiastic Entrepreneur</li>
                                <li>MBA by Qualification.</li>
                                <li>Having Experience of sales in various industries like Insurance,Cosmetics,FMCG,Foods
                                    and Processing.</li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <div class="p-4">
                                    <a href="https://www.facebook.com/profile.php?id=100006497943599" target="_blank">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="https://www.instagram.com/bluewings_global/?igshid=1qmzzpp7yokqe">
                                        <i class="fab fa-instagram" target="_blank"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="https://www.linkedin.com/in/ankit-sharma-94474a136">
                                        <i class="fab fa-linkedin" target="_blank"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <!--
    <section id="services" class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary pb-3 text-uppercase">
                            Our Skills & Expertise
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-primary mb-resp">
                        <div class="card-body align-items-center d-flex justify-content-center">
                            <h3 class="text-primary">Export Consulting</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-primary text-white mb-resp">
                        <div class="card-body align-items-center d-flex justify-content-center">
                            <h3>Product Launch Internationally</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-primary mb-resp">
                        <div class="card-body align-items-center d-flex justify-content-center">
                            <h3 class="text-primary">Export Sales Consulting</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body align-items-center d-flex justify-content-center">
                            <h3>From Leads to Sales to Services Everything on Exports</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

    <!-- PRODUCTS -->
    <section id="products" class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-dark pb-3 text-uppercase">
                            Products we Trade
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="shadow-lg card rounded shadow-sm h-100 border-0">
                        <a href="img/product1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                            <img src="img/product1.jpg" alt="Image of raw fabrics" class="img-fluid card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="text-dark">Textile</h4>
                            <p class="small text-muted font-italic">We manufacture high-quality fabrics with innovative designs in the heart of Surat with an experience of more than two decades. We also assist in taking textile businesses to the next level by offering our unmatched services at Blue Wings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="shadow-lg card rounded shadow-sm h-100 border-0">
                        <a href="img/product2.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                            <img src="img/product2.jpg" alt="Agriculture Products" class="img-fluid card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="text-dark">Agro Products</h4>
                            <p class="small text-muted font-italic">We have also extended our services to all the business enterprises that deal with grains, rice, sugar, and other agricultural products to help them get global recognition and sales in different countries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="shadow-lg card rounded shadow-sm h-100 border-0">
                        <a href="img/product3.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                            <img src="img/product3.jpg" alt="Jars of Chilli, Turmeric & Corriander Powder" class="img-fluid card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="text-dark">Spices & Tea</h4>
                            <p class="small text-muted font-italic"> Many local brands that deal within the spectrum of spices or tea that are successful in the domestic markets need to be depicted on the global stage so that the world can taste what India has to offer. With the skilled guidance of our experts, we pledge to form strategies as per the specified requirements for every company that wants to export their valuable products to an international audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="shadow-lg card rounded shadow-sm h-100 border-0">
                        <a href="img/product4.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                            <img src="img/product4.jpg" alt="Images of Granite Tiles" class="img-fluid card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="text-dark">Granite and Marble</h4>
                            <p class="small text-muted font-italic">Indian granite and marble are famous around the world for ultimate quality and valuable production methods. Indian businesses struggle to make it to the next level and therefore, we have taken the onus to increase their sales at every level by enhancing the existing methods and sales channels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="shadow-lg card rounded shadow-sm h-100 border-0">
                        <a href="img/product5.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                            <img src="img/product5.jpg" alt="Image of school bags & bagpacks" class="img-fluid card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="text-dark">Backpacks and Office Bags</h4>
                            <p class="small text-muted font-italic">
                                High-quality bags can be produced cheaply in India due to the great availability of resources and inexpensive labor. These bags can be exported and sold at a much higher price in other countries such as the USA and the UK to gain massive profits. Indian companies that wish to grow their business enterprises can opt for our services that cover a wide range of productive elements to start or increase international sales.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Image Grid of Products -->
    <!-- <section id="image-grid">
        <div class="container my-4">
            
            <div class="row">
        
              
              <div class="col-lg-4 col-md-12 mb-4">
                <a href="img/rice.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/rice.jpg" class="shadow bg-dark img-fluid mb-4" alt="">
                </a>

                <a href="img/jewellery.jpeg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/jewellery.jpeg" class="shadow bg-dark img-fluid mb-4" alt="">
        </a>

        <a href="img/backpack1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/backpack1.jpg" class="shadow bg-dark img-fluid mb-4" alt="">
        </a>

        <a href="img/garments1.jpeg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/garments1.jpeg" class="shadow bg-dark img-fluid mb-4" alt="">
                </a>
              </div>
              
        
              
              <div class="col-lg-4 col-md-6 mb-4">
                <a href="img/spices1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/spices1.jpg" class="shadow bg-dark img-fluid mb-4" alt="">
                </a>
                <a href="img/spices2.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/spices2.jpg" class="shadow bg-dark img-fluid mb-4" alt="">
        </a>

        <a href="img/garments2.jpeg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
        data-width="560">
<img src="img/garments2.jpeg" class="shadow bg-dark img-fluid mb-4" alt="">
</a>
<a href="img/tomato.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
data-width="560">
<img src="img/tomato.jpg" class="shadow bg-dark img-fluid mb-4" alt="">
</a>


              </div>
              
        
              
              <div class="col-lg-4 col-md-6 mb-4">
                <a href="img/jewellery2.jpeg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                            data-width="560">
                <img src="img/jewellery2.jpeg" class="shadow bg-dark img-fluid mb-4" alt="">
                </a>
                <a href="img/backpack2.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
                data-width="560">
                <img src="img/backpack2.jpg" class="shadow bg-dark img-fluid mb-4" alt="">
        </a>

       
              </div>
        
          </div>
    </section> -->


    <!-- FOUNDERS -->
    <!--
        <section id="founders" class="my-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary pb-3 text-uppercase">
                            Meet The Founders
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Narendra Mohanlal Sharma</h3>
                            <h5 class="text-muted">CEO & Founder</h5>
                            <ul class="list-unstyled">
                                <li>Started career as a Manager in a Textile Factory in early 90’s.</li>
                                <li>Today a well known Fabric Trader in Surat,Gujarat.</li>
                                <li>Having Expertise and Experience in textile industry from last 30 yrs.</li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <div class="p-4">
                                    <a href="https://www.facebook.com/Bluewings.Global/">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="http://twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="https://www.linkedin.com/company/bluewingsconsulants/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Ankit Narendra Sharma</h3>
                            <h5 class="text-muted">CEO & Co-Founder</h5>
                            <ul class="list-unstyled">
                                <li>A young and enthusiastic Entrepreneur..</li>
                                <li>MBA by Qualification.</li>
                                <li>Having Experience of sales in various industries like Insurance,Cosmetics,FMCG,Foods
                                    and Processing.</li>
                            </ul>
                            <div class="d-flex justify-content-center">
                                <div class="p-4">
                                    <a href="https://www.facebook.com/Bluewings.Global/">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="http://twitter.com">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="https://www.linkedin.com/company/bluewingsconsulants/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    

    <!-- CONTACT -->
    <?php
        $msg = '';
        $msgClass = '';

        //Check for submit
        if(filter_has_var(INPUT_POST, 'submit')){
        //submit the form
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check Required fields
        if(!empty($email) && !empty($name) && !empty($message)) {
            //PASSED
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                //Failed
                $msg = "Please enter a valid email";
                $msgClass = "alert-danger";
            } else {
                //PASSED
                $to = "imsajid12@gmail.com";
                $subject = "Contact request from ".$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name : </h4><p>'.$name.'</p>
                        <h4>Email : </h4><p>'.$email.'</p>
                        <h4>Message : </h4><p>'.$message.'</p>
                        ';

                //Email Headers
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

                //Additional headers
                $headers .= "From: ".$name. "<".$email.">"."\r\n";

                if(mail($to, $subject, $body, $headers)) {
                    //Email Sent
                    $msg = "You email has been sent";
                    $msgClass = "alert-success";
                } else {
                    //Email Not Sent
                    $msg = "You email was not sent";
                    $msgClass = "alert-danger";
                }
            }

        } else {
            //Failed
            $msg = "Please fill in all fields";
            $msgClass = "alert-danger";
        }
        }

    ?>

    <section id="contact" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-resp">
                    <h3 class="text-dark">Get In Touch</h3>
                    <p class="lead">Please fill the form to get in touch with us.</p>

                    <?php if($msg != ''): ?>
                        <div id="alert" class="alert <?php echo $msgClass; ?>">
                            <?php echo $msg ?>
                        </div>
                    <?php endif ?>
                    
                    <form id="contact-form" action="index.php#contact" method="POST">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                            </div>
                            <textarea rows="5" class="form-control" name="message" placeholder="Message">
                            </textarea>
                        </div>

                        <input name="submit" type="submit" value="Send Message" class="btn btn-primary btn-block btn-lg">
                    </form>
                    
                    <div class="status"></div>
                </div>

                <div class="col-lg-5 align-self-center">
                    <h3 class="text-dark">Contact Details</h3>

                    <h4 class="text-dark"><i class="fa fa-envelope"></i> Email</h4>
                    <ul class="list-unstyled">
                        <li><a href="mailto:ankitsharmaa@bluewingsglobal.com?subject=Enquiry Email" target="_blank" rel="noopener">ankitsharmaa@bluewingsglobal.com</a></li>
                    </ul>

                    <h4 class="text-dark"><i class="fa fa-mobile" aria-hidden="true"></i> Contact No.</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:+91 79840 84729">+91 79840 84729</a></li>
                    </ul>

                    <hr>

                    <h3 class="text-dark">We are active on</h3>

                    <div class="d-flex">
                        <div class="p-4">
                            <a href="https://www.facebook.com/Bluewings.Global/" target="_blank">
                                <i class="fab fa-facebook fa-4x"></i>
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="https://www.instagram.com/bluewings_global/?igshid=1qmzzpp7yokqe" target="_blank">
                                <i class="fab fa-instagram fa-4x"></i>
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="https://www.linkedin.com/company/bluewingsconsulants/" target="_blank">
                                <i class="fab fa-linkedin fa-4x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back To Top-->
    <a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" role="button"><i
            class="fas fa-chevron-up"></i></a>

    <!-- FOOTER -->
    <footer id="main-footer" class="py-5 text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <img src="img/logo.jpg" alt="BlueWings Logo" class="img-fluid mx-auto d-block">
                    <img src="img/footerbrandname.png" class="img-fluid mx-auto d-block">
                    <h5 class="text-center bg-dark p-1">IEC : <span>HHMPS9929C</span></h5>

                    <div class="d-flex justify-content-center">
                        <div class="p-4">
                            <a href="https://www.facebook.com/Bluewings.Global/" target="_blank">
                                <i class="fab fa-facebook fa-3x"></i>
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="https://www.instagram.com/bluewings_global/?igshid=1qmzzpp7yokqe" target="_blank">
                                <i class="fab fa-instagram fa-3x"></i>
                            </a>
                        </div>
                        <div class="p-4">
                            <a href="https://www.linkedin.com/company/bluewingsconsulants/" target="_blank">
                                <i class="fab fa-linkedin fa-3x"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!--
                    <div class="col-lg-3 col-md-6">
                    <h4>Skills & Expertise</h4>
                    <ul class="list-unstyled">
                        <li>Export Consulting</li>
                        <li>Product Launch Internationally</li>
                        <li>Export Sales Consulting</li>
                        <li>From Leads to Sales to Services Everything on Exports
                        </li>
                    </ul>
                </div>
            -->
                <div class="col-lg-4 col-md-6">
                    <a href="#products"><h4 class="text-dark">Products</h4></a>
                    <ul class="list-unstyled">
                        <li>Textile</li>
                        <li>Agro Products</li>
                        <li>Spices & Tea</li>
                        <li>Granite & Marble</li>
                        <li>Bagpacks & Office Bags</li>
                    </ul>
                </div>

                <div id="contact-details" class="col-lg-4 col-md-6">
                    <h4 class="text-dark">Contact Details</h4>

                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <ul class=" list-unstyled">
                        <li><a href="mailto:ankitsharmaa@bluewingsglobal.com?subject=Enquiry Email" target="_blank" rel="noopener">ankitsharmaa@bluewingsglobal.com</a></li>
                    </ul>

                    <h4><i class="fa fa-mobile" aria-hidden="true"></i> Contact No.</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:+91 79840 84729">+91 79840 84729</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="lead align-self-center">
                        Copyright &copy; <span id="year"></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    

    <script>
        //Closing alert after 3seconds
        setTimeout(function () { 
  
        // Closing the alert 
         $('#alert').alert('close'); 
        }, 3000);

        //Carousel just below navbar
        $('body').css('padding-top', $('.navbar').outerHeight());

        AOS.init({
            duration: 1200,
        });
    </script>
</body>

</html>