<?php

include("admin/includes/db.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>tryckyDot</title> -->
    
    <?php include('style.php') ?>
    
  </head>
  <body>
   

 <!-- -----------------------------Nav start----------------------------------- -->

 <?php include('contents/nav.php') ?>
        

          <div class="quote-btn">
            <button type="button" class="btn btn-sm" style="display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Get a Quote
            </button>
          </div>
          
    
 <!-- -----------------------------Nav end----------------------------------- -->



<!-- -----------------------------About start----------------------------------------->


<section class="about-us">
  <div class="container">
    <div class="main-head">
      <h2 class="fw-bold main-head">About <b class="subhead">Us</b></h2>
    </div>
      <p class="fw-bolder about-us-client d-none d-md-block">Our success is the satisfactory happiness of our clients!</p>
      <!-- <div class="about-image-bg-mob d-block d-md-none">
        <img src="images/about-us2.png" alt="" class="vert-move">
      </div> -->
      <div class="row padding-gap">
        <!-- <div class="col-lg-6 ">
          <div class="about-image-bg-mob d-block d-md-none">
              <img src="images/about-us2.png" alt="" class="vert-move">
          </div>
        </div> -->
        <p class="fw-bolder about-us-client d-block d-md-none">Our success is the satisfactory happiness of our clients!</p>
        <div class="col-lg-6">
          <p class="sub-paragraph ">We are software company established in 2020 to provide website development, software development, mobile application development (iOS & Android), ERP software development (Offline& Cloud), AI developemtn, Digital marketing and to provide the precise services. </p>
          <p class="sub-paragraph ">Our continuum of web solutions supports start-ups, enterprises and organisations to have enhances effective outcomes focused solutions which help you to mould, renew and add up new proficiencies to your business.</p>
          <p class="sub-paragraph ">As we have rebranded our company from Aspire IT solutions to TrickyDot Technologies, the aura has also moved on as the finest technology solution provider. We keep the expertise ongoing with the era and most relevant innovations. The technological know-how is spread over varieties. We give the outputs with impecable standards by utilising the most up-to-date technologies.</p>
        </div>
        <div class="col-lg-6 ">
          <div class="about-image-bg">
              <img src="images/about-us2.png" alt="" class="vert-move d-none d-md-block">
          </div>
        </div>
      </div>
      
      <div class="carousel-logos">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <?php
                  $sql = "select * from tbl_customers";
                  $run = mysqli_query($con , $sql);
                  $count = mysqli_num_rows($run);

                  $loop = 0;

                  while($row = mysqli_fetch_array($run)){

                    $loop ++;
                    $img = $row["image"];
                ?>
                    <div class="col-lg-2">
                      <a href=""><img src="admin/assets/images/customers/<?php echo $img ?>" alt="" class="img-fluid"></a>
                    </div>

                    <?php
                      if ($loop % 6 == 0 || $loop == $count) {
                    ?>
                
              </div>
            </div>


            <?php
              if ($loop !=  $count) { 
            ?>
              <div class="carousel-item">
              <div class="row">
              <?php }
                  }
                }
              ?>
          </div>
          <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span> -->
          </button>
        </div>
      </div>



      <!-- <div class="about-us-img1">
        <img src="images/about-us/about-img-1.jpg" alt="" class="img-fluid">
      </div> -->

  </div>




      <div class="year-of-experience ">
        <div class="container">
          <div class="about-contents">
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-2 border-column">
                <div class="profile-experience ">
                  <h1 class=" fw-bolder">2</h1>
                  <h6>Years of <br> Experience</h6>
                </div>
              </div>
              <div class="col-lg-2 ">
                <div class="profile-experience ">
                  <h1 class="fw-bolder">500+</h1>
                  <h6>Projects <br>delivered</h6>
                </div>
              </div>
              <div class="col-lg-2 ">
                <div class="profile-experience ">
                  <h1 class="fw-bolder">500+</h1>
                  <h6>Clients <br>Lorem</h6>
                </div>
              </div>
              <div class="col-lg-2 ">
                <div class="profile-experience ">
                  <h1 class="fw-bolder">10+</h1>
                  <h6>Services <br>providing</h6>
                </div>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
      </div>

    <div class="container">
      <div class="core-values">
        <h4 class="fw-bold main-head">Core Values of  <b class="subhead">Our Company</b></h4>
          <div class="core-values-para padding-gap">
            <p class="sub-paragraph  text-justify" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. Praesent scelerisque lectus vitae ligula fermentum, eget gravida mi scelerisque. Vestibulum dolor nibh, dictum id commodo a, maximus eu dui. Maecenas est massa, cursus eget laoreet sed, lobortis eu mauris. Maecenas est massa, cursus eget laoreet sed, lobortis eu mauris.  Maecenas est massa, cursus eget laoreet sed, lobortis eu mauris. Maecenas est massa, cursus eget laoreet sed, lobortis eu mauris.</p>

          </div>

        <div class="core-values-cards">
          <div class="row">
            <div class="col-lg-4 core-card-top ">
              <div class="card">
                <div class="card-body">
                  <img src="images/about-us/mission.png" alt="..." class="mb-2">
                  <h5 class="card-title fw-bold mt-2">Mission</h5>
                  <p class="card-text">Pitch in with the enterprises and businesses to have efficient profficiency for them.
                    We make outputs from effective solutions
                    To give the best output as services.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 core-card-top">
              <div class="card">
                <div class="card-body">
                  <img src="images/about-us/vision.png"  alt="..."  class="mb-2">
                  <h5 class="card-title fw-bold mt-2">Vision</h5>
                  <p class="card-text">We seeks to have an environment where everyone can go on with the benefits of advanced technologies.
                    To have the even satisfactory services for everyone on technologies.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 core-card-top ">
              <div class="card">
                <div class="card-body">
                  <img src="images/about-us/why.png" alt="..." class="mb-2">
                  <h5 class="card-title fw-bold mt-2">Why choose us?</h5>
                  <p class="card-text">We listen and then organise. We follow proven ethical processes and  focus on virtual output which has profit for you. 
                    We deliver on time & on budget</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      
      </div>
    
      
      
      



<!-- -----------------------------our team start----------------------------------------->

<div class="our-team">
        <div class="container">
          <h4 class="fw-bold main-head">Meet our <b class="subhead">team</b></h4>
            <div class="core-values-para">
              <p class="sub-paragraph  text-justify mb-5" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. Praesent scelerisque lectus vitae ligula fermentum, eget gravida mi scelerisque.</p>
            </div>
            <div class="meet-our-team ">
             
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row team-card-row">

                        <?php
              
                          $sql = "select * from tbl_team";
                          $run = mysqli_query($con, $sql);
                          while($row = mysqli_fetch_array($run)){

                            $img = $row["img"];
                            $title = $row["name"];
                            $designation = $row["designation"];

                          } 
                          
                        ?>
                          <div class="col-lg-4 top-pad">
                            <div class="teams card-gap">
                              <div class="team-img-bg ">
                                <img src="admin/assets/images/team/<?php echo $img ?>" alt=""> 
                                  
                                  <h6 class="name text-center mt-3"><?php echo $title ?></h6>
                                  <p class="name text-center"><?php echo $designation ?></p>
                                </div>
                              </div>
                            </div>
                          </div> 
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev prev-btn d-none d-md-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next next-btn  d-none d-md-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
        </div>
      </div>


<!-- -----------------------------our team end----------------------------------------->










<!-- -----------------------------our story start----------------------------------------->


<!-- <div class="our-story">
  <div class="container">
    <h4 class="fw-bold main-head">Our <b class="subhead">story</b></h4>
    <div class="our-story-para">
      <p class="sub-paragraph  text-justify mb-5" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. Praesent scelerisque lectus vitae ligula fermentum, eget gravida mi scelerisque.</p>
    </div>
    <div class="circle-1">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
        <circle cx="8" cy="8" r="8"/>
      </svg>
    </div>
    <div class="time-line">
      <div class="row ">
        <div class="col-lg-8 p-3 bottom-border left-border">
          <div class="row">
            <div class="col-lg-8 p-4">
              <h5 class="mt-5">Date</h5>
              <p>Lorem ipsum dolor sit amet</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. In volutpat enim quis tellus hendrerit tincidunt eu at lectus.</p>
            </div>
            <div class="col-lg-4">
              <div class="timeline-img timeline-img-1">
                <img src="images/about-us/time-line/1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 bottom-border p-4">

        </div>
      </div>

      <div class="row">
        <div class="col-lg-4  p-3"></div>
        <div class="col-lg-8 column-3 ">
          <div class="row">
            <div class="col-lg-4">
              <div class="timeline-img timeline-img-2">
                <img src="images/about-us/time-line/2.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-8 right-border  p-4">
              <h5 class="mt-5">Date</h5>
              <p>Lorem ipsum dolor sit amet</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. In volutpat enim quis tellus hendrerit tincidunt eu at lectus.</p>
            </div>
          </div>
        </div>
      </div>



      <div class="row ">
        <div class="col-lg-8 top-border left-border bottom-border">
          <div class="row">
            <div class="col-lg-8">
              <h5 class="mt-5">Date</h5>
              <p>Lorem ipsum dolor sit amet</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. In volutpat enim quis tellus hendrerit tincidunt eu at lectus.</p>
            </div>
            <div class="col-lg-4">
              <div class="timeline-img timeline-img-3">
                <img src="images/about-us/time-line/3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 top-border bottom-border">

        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 "></div>
        <div class="col-lg-8  ">
          <div class="row">
            <div class="col-lg-4">
              <div class="timeline-img timeline-img-4">
                <img src="images/about-us/time-line/4.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-8 right-border">
              <h5 class="mt-5">Date</h5>
              <p>Lorem ipsum dolor sit amet</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. In volutpat enim quis tellus hendrerit tincidunt eu at lectus.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="circle-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        </svg>
      </div>
      
    </div>
  </div>
</div> -->
</div>


<!-- -----------------------------our story end----------------------------------------->






<!-- -----------------------------FAQ start----------------------------------------->


<!-- <div class="faq">
  <div class="container">
    <h4 class="fw-bold main-head">FAQ? How can we <b class="subhead">Help?</b></h4>
      <div class="faq-para">
        <p class="sub-paragraph  text-justify mb-5" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. Praesent scelerisque lectus vitae ligula fermentum, eget gravida mi scelerisque.</p>
      </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="content">
          
          
          <div>
            <input type="checkbox" id="question1" name="q"  class="questions">
            <div class="plus">+</div>
            <label for="question1" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem
            </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
              
            </div>
          </div>
          <div>
            <input type="checkbox" id="question2" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question2" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem    </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
              
            </div>
          </div>
          <div>
            <input type="checkbox" id="question3" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question3" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem    </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
              
            </div>
          </div>
          <div>
            <input type="checkbox" id="question4" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question4" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem    
            </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
            </div>
          </div>
          <div>
            <input type="checkbox" id="question5" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question5" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem    
            </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
              
            </div>
          </div>
          <div>
            <input type="checkbox" id="question6" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question6" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem    
            </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
              
            </div>
          </div>
          <div>
            <input type="checkbox" id="question7" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question7" class="question">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem    
            </label>
            <div class="answers">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris sem, tempor non justo a, auctor tempus felis. In volutpat enim quis tellus hendrerit tincidunt eu at lectus. Suspendisse sit amet turpis nec arcu mattis aliquet. Aenean et metus ut elit suscipit aliquet hendrerit ac erat. </p>
              
            </div>
          </div>
          
          
          
          </div>
      </div>
  
      <div class="col-lg-6">
        <img src="images/faq2.png" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</div> -->


<!-- -----------------------------FAQ end----------------------------------------->



<!-- -----------------------------About end----------------------------------------->



 <!-- --------------------------------footer start---------------------------- -->

 <?php include('footer.php') ?>
 
<!-- -------------------------------get a quote modal--------------------------- -->

 
<?php include('model.php') ?>

<!-- -------------------------------get a quote modal--------------------------- -->




<?php include('script.php') ?>




</body>
</html>