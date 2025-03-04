<?php
require 'nav.php';
?>
  
    <main>
        <!-- BANNER -->
        <section class="section position-relative"
            style="background-image: url(image/image-1920x900-1.jpg); height: 90vh;">
            <div class="image-overlay"></div>
            <div class="r-container h-100 position-relative" style="z-index: 2;">
                <div class="row row-cols-1 row-cols-lg-2 w-100 h-100">
                    <div class="col h-100 p-lg-0">
                        <div class="d-flex flex-column gap-3 justify-content-center h-100">
                            <h1 class="font-1 fw-bold lh-1">
                            Record fm 97.7<span class="accent-color"><BR>Tusabula hits all day</span>
                            </h1>
                            <p class="text-gray fs-5">
                                Right in the heart of Kampala-Uganda, Record FM is a household name among youths especially because of the flawless programes and music!
                            </p>
                            <div class="d-flex flex-lg-row flex-column gap-lg-5 gap-4">
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                        data-bs-target="#">
                                        <i class="fa-solid fa-video ms-1"></i>
                                    </button>
                                    <span class="font-1 ls-2 fw-bold">START WATCHING</span>
                                </div>
                                <div class="d-flex flex-row gap-3 align-items-center">
                                    <button type="button" class="btn request-loader" onclick="toggleRadio()">
                                        <i id="playPauseIcon" class="fa-solid fa-play ms-1"></i>
                                    </button>
                                    <span class="font-1 ls-2 fw-bold">START LISTENING</span>
                                </div>
                                
                                <audio id="radioPlayer">
                                    <source src="https://eu1.reliastream.com/proxy/recordfm977?mp=/stream.mp3" type="audio/mp3">
                                    Your browser does not support the audio element.
                                </audio>
                                
                                <script>
                                    function toggleRadio() {
                                        let player = document.getElementById("radioPlayer");
                                        let icon = document.getElementById("playPauseIcon");
                                
                                        if (player.paused) {
                                            player.play();
                                            icon.classList.remove("fa-play");
                                            icon.classList.add("fa-pause");
                                        } else {
                                            player.pause();
                                            icon.classList.remove("fa-pause");
                                            icon.classList.add("fa-play");
                                        }
                                    }
                                </script>
                                
                                <!-- FontAwesome for Icons (Add this if not included in your project) -->
                                <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
          
        </section>

        <div class="position-relative py-5 px-3" style="margin-top: -80px;">
            <div class="position-absolute top-0 start-0 w-75 h-100 bg-accent-color rounded-end-3"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div class="row row-cols-1 row-cols-lg-4 ps-5 ps-lg-0">
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">500<sup>k</sup></h2>
                            <p class="fs-5 m-0">Our Subscribers</p>
                        </div>
                    </div>
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">150<sup>+</sup></h2>
                            <p class="fs-5 m-0">Podcast Episodes</p>
                        </div>
                    </div>
                    <div class="col mb-4 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h2 class="font-1 fw-bold m-0">100<sup>K</sup></h2>
                            <p class="fs-5 m-0">Our Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Favorite Podcast -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <h3 class="font-1 fw-bold">Most <span class="accent-color">Favorite</span> Shows</h3>
          
                    <div class="row row-cols-1 row-cols-lg-3 w-100 text-start">
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-100">
                                <div class="position-relative h-80">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            
                                        </div>
                                    </div>
                                    <img src="image/breakfast.jpeg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                   
                                    <h5 class="font-1 fw-bold lh-1">The UG-Breakfast Show</h5>


                                </div>
                                 
                            </div>
                         
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-80">
                                <div class="position-relative h-80">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-80" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            
                                        </div>
                                    </div>
                                    <img src="image/aba.jpeg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                   
                                    <h5 class="font-1 fw-bold lh-1">There Is Hope</h5>

                                </div>
                                 
                            </div>
                         
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-80">
                                <div class="position-relative h-80">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-80" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            
                                        </div>
                                    </div>
                                    <img src="image/hitlab.jpeg" alt="image" class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex flex-row gap-5">
                                   
                                    <h5 class="font-1 fw-bold lh-1">There Is Hope</h5>

                                </div>
                                 
                            </div>
                         
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-80">
                                <div class="position-relative h-80">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-80" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            
                                        </div>
                                    </div>
                                    <img src="image/7 to 7.jpeg" alt="image" class="img-fluid rounded-3" style="max-height: 280px; width: 100%;">
                                    </div>
                                <div class="d-flex flex-row gap-5">
                                   
                                    <h5 class="font-1 fw-bold lh-1">The Hot 7 At 7</h5>

                                </div>
                                 
                            </div>
                         
                        </div>
                        <div class="col  mb-3">
                            <div class="d-flex flex-column gap-3 h-80">
                                <div class="position-relative h-80">
                                    <div class="image-overlay-2"></div>
                                    <div class="position-absolute start-0 top-0 w-100 h-80" style="z-index: 2;">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            
                                        </div>
                                    </div>
                                    <img src="image/hope.jpeg" alt="image" class="img-fluid rounded-3" style="max-height: 400px; width: 100%;">
                                    </div>
                                <div class="d-flex flex-row gap-5">
                                   
                                    <h5 class="font-1 fw-bold lh-1">The Hot 7 At 7</h5>

                                </div>
                                 
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <h3 class="font-1 fw-bold"><span class="accent-color">Show</span> Lineup</h3>
                    
                    <ul class="nav nav-tabs justify-content-center" id="showTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="breakfast-tab" data-bs-toggle="tab" data-bs-target="#breakfast" type="button" role="tab">MONDAY - THURSDAY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="afternoon-tab" data-bs-toggle="tab" data-bs-target="#afternoon" type="button" role="tab">FRIDAY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="evening-tab" data-bs-toggle="tab" data-bs-target="#evening" type="button" role="tab">SATURDAY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="evening-tab" data-bs-toggle="tab" data-bs-target="#sunday" type="button" role="tab">SUNDAY</button>
                        </li>
                      
                    </ul>
                    
                    <div class="tab-content mt-3" id="showTabsContent">
                        <div class="tab-pane fade show active" id="breakfast" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">UG-Breakfast Show</h5>
                                        <p><strong>Time:</strong> 6:00 AM - 10:00 AM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Hitlab</h5>
                                        <p><strong>Time:</strong> 10:00 AM - 3:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">There Is Hope</h5>
                                        <p><strong>Time:</strong> 12:00 PM - 12:30 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Telesoccer – Mupiira Gwokka</h5>
                                        <p><strong>Time:</strong> 12:30 PM - 1:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">The Big Evening – Ababba</h5>
                                        <p><strong>Time:</strong> 3:00 PM - 6:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">The Music Estate</h5>
                                        <p><strong>Time:</strong> 6:00 PM - 9:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">The Hot 7 At 7</h5>
                                        <p><strong>Time:</strong> 7:00 PM - 8:00 PM</p>
                                    </div>
                                </div>
                        
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Song Requests</h5>
                                        <p><strong>Time:</strong> 8:00 PM - 8:30 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">The UG-Breakfast Show</h5>
                                        <p><strong>Time:</strong> 10:00 PM - 1:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="afternoon" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">There Is Hope</h5>
                                        <p><strong>Time:</strong> 2:00 PM - 3:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Telesoccer – Mupiira Gwokka</h5>
                                        <p><strong>Time:</strong> 12:00 PM - 12:30 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Afternoon Bliss</h5>
                                        <p><strong>Time:</strong> 4:00 PM - 5:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sunday" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">There Is Hope</h5>
                                        <p><strong>Time:</strong> 2:00 PM - 3:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Telesoccer – Mupiira Gwokka</h5>
                                        <p><strong>Time:</strong> 12:00 PM - 12:30 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Afternoon Bliss</h5>
                                        <p><strong>Time:</strong> 4:00 PM - 5:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="evening" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">The Hot 7 At 7</h5>
                                        <p><strong>Time:</strong> 7:00 PM - 8:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Late Night Vibes</h5>
                                        <p><strong>Time:</strong> 9:00 PM - 10:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Midnight Chill</h5>
                                        <p><strong>Time:</strong> 10:00 PM - 11:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Midnight Chill</h5>
                                        <p><strong>Time:</strong> 10:00 PM - 11:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Midnight Chill</h5>
                                        <p><strong>Time:</strong> 10:00 PM - 11:00 PM</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card p-3">
                                        <h5 class="fw-bold">Midnight Chill</h5>
                                        <p><strong>Time:</strong> 10:00 PM - 11:00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- ABOUT -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2 w-100">
                    <div class="col mb-lg-0 mb-5">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                            <h3 class="font-1 fw-bold lh-1">We Provide The <span class="accent-color">Latest</span>
                                Music And News For You</h3>
                            <p class="text-gray">
                                Based in Kampala, Uganda, Record FM 97.7 is a top urban station delivering great music, engaging talk shows, and vibrant discussions on entertainment, social issues, and personal growth.<br> With energetic presenters and a playlist of local and international hits, it keeps listeners informed, inspired, and entertained.

                                Tusabula Hits All Day! 🎶📻
                            </p>
                            <h5 class="font-1 fw-bold ">Listen Our Podcast On</h5>
                            <div class="d-flex flex-lg-row gap-3">
                                <div class="col  mb-3">
                                    <img src="image/youtube.png" alt="youtube" class="img-fluid">
                                </div>
                                <div class="col  mb-3">
                                    <img src="image/spotify.png" alt="spotify" class="img-fluid">
                                </div>
                                <div class="col  mb-3">
                                    <img src="image/google_podcast.png" alt="google podcast" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col  mb-3">
                        <div class="position-relative">
                            <div class="position-absolute top-0 end-0 bg-accent-color px-5 py-4 rounded-3 shadow"
                                style="z-index: 3; margin-top: -50px;">
                                <div class="d-flex flex-column text-center">
                                    <h2 class="font-1 fw-bold m-0">15<sup>th</sup></h2>
                                    <p class="fs-5 m-0">Anniversary</p>
                                </div>
                            </div>
                            <div class="position-relative me-5">
                                <div class="image-overlay-2 rounded-4"></div>
                                <div class="position-absolute start-0 top-0 w-100 h-100" style="z-index: 2;">
                                 
                                </div>
                                <img src="image/image-600x700-1.jpg" alt="image" class="img-fluid w-80 rounded-4">
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR TEAM -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <span class="fs-5">Our Team</span>
                    <h3 class="font-1 fw-bold">Meet Our <span class="accent-color">Host</span></h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.</p>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                            <img src="image/presenter.jpg" alt="image" class="img-fluid rounded-3 mb-3" style="height: 30%;">
                            <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">presenter</h5>
                                    <span class="accent-color">7 to 7 host</span>
                                </div>
                             
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/producer/one.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">Habba</h5>
                                    <span class="accent-color">7 to 7 host</span>
                                </div>
                           
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column bg-secondary-color p-4 rounded-3">
                                <img src="image/producer/two.jpg" alt="image" class="img-fluid rounded-3 mb-3">
                                <div class="mb-4">
                                    <h5 class="font-1 fw-bold m-0 lh-1">presenter</h5>
                                    <span class="accent-color">7 to 7 host</span>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 
        <!-- Our Podcast -->
   

        <!-- Subscribe -->
   
        <!-- Our Partners -->
        <section class="section bg-secondary-color">
            <div class="r-container">
                <div class="d-flex flex-column text-center gap-3">
                    <span class="fs-5">Our Partners</span>
                    <h3 class="font-1 fw-bold lh-1">In <span class="accent-color">Collaboration</span> With</h3>
                    <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum. Nam a pulvinar
                        sapien, a placerat arcu. Nam condimentum orci et semper rutrum.
                    </p>
                    <div class="row row-cols-1 row-cols-lg-6 justify-content-center align-items-center">
                        <div class="col mb-3">
                            <img src="image/star.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                            <img src="image/olaro.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col mb-3">
                        <img src="image/uck.png" alt="logo" class="img-fluid logo-partner" style="max-height: 100px;">
                        </div>
                        <div class="col mb-3">
                            <img src="image/pr.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                        <div class="col  mb-3">
                            <img src="image/stand.png" alt="logo" class="img-fluid logo-partner">
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Blog -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                    <div class="col col-lg-7 mb-3">
                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col mb-3">
                                <div class="card border-0 bg-secondary-color p-3 shadow">
                                    <img src="image/image-600x500-5.jpg" class="img-fluid" alt="image">
                                    <div class="card-body">
                                        <h5 class="font-1 fw-bold ">Goodsound: What is a Podcast? Here’s…</h5>
                                        <p class="card-text">Single Post Home / Single Post Categories Business Comedy
                                            Lifestyle Music News Tips and Tricks Recent Post Moundy…</p>
                                        <a href="#" class="btn link font-1 fw-bold">LEARN MORE <i
                                                class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="card border-0 bg-secondary-color p-3 shadow">
                                    <img src="image/image-600x500-6.jpg" class="img-fluid" alt="image">
                                    <div class="card-body">
                                        <h5 class="font-1 fw-bold ">Moundy Rose: The State of Entrepreneurship,…</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Morbi pharetra magna a lacus dignissim, sed scelerisque elit rutrum.…</p>
                                        <a href="#" class="btn link font-1 fw-bold">LEARN MORE <i
                                                class="fa-solid fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5 ps-lg-5 mb-3">
                        <div class="d-flex flex-column h-100 justify-content-center gap-3">
                            <span class="fs-5">Our Blog</span>
                            <h3 class="font-1 fw-bold lh-1"><span class="accent-color">Latest</span> News For You</h3>
                            <p class="mx-auto text-gray" style="max-width: 768px;">Lorem ipsum dolor sit amet,
                                Phasellus facilisis, neque id dapibus commodo, est libero ultricies felis, venenatis
                                pulvinar eros magna dapibus turpis.
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, neque id
                                dapibus commodo, est libero ultricies felis, venenatis pulvinar eros magna dapibus
                                turpis. Curabitur vel congue quam.
                            </p>
                            <div>
                                <a href="" class="btn button font-1 ls-2">ALL BLOGS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
