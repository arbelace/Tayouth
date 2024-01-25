    <?php
    // session_start();
    $title = "Tayouth";
    include('functions/userfunction.php');
    include('./includes/header.php');
    ?>
    <section>
        <video autoplay muted loop id="myVideo" class="bg-vid">
            <source src="img/videohome.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-12 col-sm-12">
                    <h1 style="letter-spacing: 10px; font-size: 100pt; color: var(--first-color);" class="pb-lg-0 mb-lg-0">Tayouth</h1>
                    <h3 style="letter-spacing: 3px; font-size: 15pt;" class="text-white ps-lg-4">Your Donation Can Help provide food to people who <br> are struggling to feed themeselve and their families.</h3>
                    <p id="text" class="text-white ps-lg-4"></p>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 100px; background-color: #e4e4e4;">
        <div class="container">
            <div class="row align-items-center">
                <div class="row text-center mt-5 mb-lg-5">
                    <h1 style="letter-spacing: 5px; font-size: 20pt;" class="pb-lg-0 mb-lg-0">How It Works</h1>
                    <p style="font-size: small;">Organization set up to provide help and raise money for those in need</p>
                </div>

                <div class="col-lg-4">
                    <div class="card text-center card_home">
                        <i class="fa-solid fa-gift h1 mt-lg-3" style="color:#D75E0B;"></i>
                        <div class="card-body ">
                            <p class="card-text">People like you give to your favorite projects; you feel great when you get updates about how your money is put to work by trusted organizations.</p>
                            <h5 class="card-title">DONORS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center card_home">
                        <i class="fa-solid fa-building h1 mt-lg-3" style="color:#0B5ED7;"></i>
                        <div class="card-body">
                            <p class="card-text">Generous companies and their employees further support high-impact projects with donations and grants, helping local communities thrive.</p>
                            <h5 class="card-title">COMPANIES</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center card_home">
                        <i class="fa-solid fa-seedling h1 mt-lg-3" style="color:#FEDC25;"></i>
                        <div class="card-body">
                            <p class="card-text">Nonprofits have the funding they need to listen to feedback and try out new ways to work; communities all over the globe get more awesome!</p>
                            <h5 class="card-title">OUR IMPACT</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section style="padding-bottom: 100px; background-color: #e4e4e4;">
        <div class="container">
            <div class="row align-items-center">
                <div class="row text-center mt-5 mb-5">
                    <h1 style="letter-spacing: 5px; font-size: 20pt; color: #1f8555;" class="pb-lg-0 mb-lg-0">Customer Service</h1>
                    <p style="font-size: small;">We always welcome your feedback about our service and your in-store experience – whether you found it friendly and helpful, or it fell short of your expectations.</p>
                </div>

                <div class="col-lg-6">
                    <iframe class="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15449.097360368622!2d121.04093402526051!3d14.526294058613376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8c8c683603d%3A0xe71e5f3cd00d6813!2sPinagsama%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1646354666141!5m2!1sen!2sph" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-lg-4 offset-lg-1">
                    <form>
                        <div class="mb-3">
                            <small>Name</small>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <small>Email</small>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <small>Message</small>
                            <textarea cols="30" rows="4" class="form-control"></textarea>
                        </div>

                        <button type="button" class="btn btn-outline-success btn-sm">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        var i = 0,
            text;
        text = "Volunteer group has a goal to serve all the Barangays in Lucena City through Arangkada Goals."

        function typing() {
            if (i < text.length) {
                document.getElementById("text").innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, 20);
            }
        }
        typing();
    </script>
    <?php include('./includes/footer.php'); ?>