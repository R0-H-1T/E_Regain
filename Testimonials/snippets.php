<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } /* Importing fonts from Google */
    /* <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&family=Roboto:wght@300&display=swap" rel="stylesheet"> --> */

@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&family=Roboto:wght@300&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    /* background: linear-gradient(to bottom, #000428, #004683); */
    animation: background-color 20s;
    min-height: 100vh;
}

/* @keyframes background-color {
    0% {
        background: linear-gradient(to bottom, #000428, #004683);
    }

    25% {
        background: linear-gradient(135deg, #1a4223, #5ee95e);
    }

    50% {
        background: linear-gradient(to bottom, #421a31, #e95ed2);
    }

    100% {
        background: linear-gradient(-135deg, #fae37d, #881da8, #20668f);
    }

} */

.container {
    margin-top: 80px;
}

.container .col-lg-4 {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.card {
    width: 300px;
    height: 300px;
    transform-style: preserve-3d;
    perspective: 500px;
    border: none;
    background-color: inherit;
}

.card .face {
    position: absolute;
    color: rgb(0, 0, 0);
    width: 100%;
    height: 100%;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    background: rgba(255, 255, 255, 0.06);
    transform-style: preserve-3d;
    transition: 0.5s;
    backface-visibility: hidden;
    border-top: 1px solid #ddd;
    border-left: 1px solid #ddd;
    /* border-right: 1px solid #999;
border-bottom: 1px solid #999; */
}

.card .face.front-face,
.card .face.back-face {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.card .face.front-face .profile {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
}

.card .face.front-face .name {
    letter-spacing: 2px;
}

.card .face.front-face .designation {
    font-size: 0.8rem;
    color: rgb(19, 19, 19);
    letter-spacing: 0.8px;
}


.card .face.back-face {
    position: absolute;
    background: rgba(255, 255, 255, 0.06);
    /* transform: rotateY(180deg); ----------------------------------*/
    padding: 20px 30px;
    text-align: center;
    user-select: none;
}

.card .face.back-face .fa-quote-left {
    position: absolute;
    top: 25px;
    left: 25px;
    font-size: 1.2rem;
}

.card .face.back-face .fa-quote-right {
    position: absolute;
    bottom: 35px;
    right: 25px;
    font-size: 1.2rem;
}


.testimonial {
    font-size:small;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}
.profile {
    margin-top: 20px;
}

@media(max-width: 991.5px) {
    .col-lg-4 {
        margin-top: 40px;
        margin-bottom: 20px;
    }
}</style>
                                </head>
                                <?php  include '../TemplateHTML/Navbar/home.html'; ?>
                                <body className='snippet-body'>
                                <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face">
                        <img src="Pradnya.webp"
                            alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                            Pradnya
                        </div>
                        <div class="designation">Magarpatta, Pune</div>
                        <div class="testimonial">
                            <center>

                                Thank you for the amazing services! We are very happy with the results. 
                                Will definitely continue with e-solutions for contributing to a better environment to lives in Pune.
                            </center>
                        </div>
                    </div>
                    <!-- <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <span class="fas fa-quote-right"></span>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face">
                        <img src="Ayush.jpg"
                            alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                            Ayush
                        </div>
                        <div class="designation">Warje, Pune</div>
                        <div class="testimonial">
                            <center>

                                Our experience working with your firm was fantastic and I would recommend it.
                                The electronic products nearing the end of their "useful life" are being used.
                            </center>
                        </div>
                    </div>
                    <!-- <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <span class="fas fa-quote-right"></span>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="face front-face">
                        <img src="Pranav.jpg"
                            alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                            Samar
                        </div>
                        <div class="designation">Deccan, Pune</div>
                        <div class="testimonial">
                            <center>

                                Before I was worried about the security of the confidential data stored in the hard drives.
                                But after seeeing the work of e-solutions I was amazed and was convinced. Thanks!
                            </center>
                        </div>
                    </div>
                    <!-- <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial">
                            Before I was worried about the security of the confidential data stored in the hard drives.
                            But after seeeing the work of e-solutions I was amazed and was convinced. Thanks!
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div> -->
                </div>
            </div>
          
            <div class="col-lg-4">
              <div class="card">
                  <div class="face front-face">
                      <img src="Rahul.jpg"
                          alt="" class="profile">
                      <div class="pt-3 text-uppercase name">
                          Rahul
                        </div>
                        <div class="designation">Kondhwa, Pune</div>
                        <div class="testimonial">
                            <center>

                                I had been wondering what I should do with my old Laptop which had stoppped working a long time ago.
                                Fortunately I found E-solutions!, and i'am happy about it.              
                            </center>
                        </div>
                  </div>
                  <!-- <div class="face back-face">
                      <span class="fas fa-quote-left"></span>
                      <span class="fas fa-quote-right"></span>
                  </div> -->
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                  <div class="face front-face">
                      <img src="Neha.jpg"
                          alt="" class="profile">
                      <div class="pt-3 text-uppercase name">
                          Neha
                      </div>
                      <div class="designation">KarveNagar, Pune</div>
                      <div class="testimonial">
                        <center>

                            I love how professional the whole team of E-solutions is. They make the whole process
                            of e-waste donation hassle-free. I feel glad to contribute and reduce e-waste.
                        </center>
                      </div>
                  </div>
                  <!-- <div class="face back-face">
                      <span class="fas fa-quote-left"></span>
                      <span class="fas fa-quote-right"></span>
                  </div> -->
              </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
                <div class="face front-face">
                    <img src="Ketaki.jpg"
                        alt="" class="profile">
                    <div class="pt-3 text-uppercase name">
                        Ketaki
                    </div>
                    <div class="designation">Pimpri Chinchwad, Pune</div>
                    <div class="testimonial">
                        <center>

                            Thanks E-solutions for providing such an easy interface. I am happy that I donated my computer
                            to E-solutions. They are very good at their work.
                        </center>
                    </div>
                </div>
                <!-- <div class="face back-face">
                    <span class="fas fa-quote-left"></span>
                    <span class="fas fa-quote-right"></span>
                </div> -->
            </div>
        </div>
        
        </div>
    </div>


    <a href="../AboutUs/about.php">About Us1</a>

    <?php  include '../TemplateHTML/Footer/footer.html'; ?>

                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'></script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>
