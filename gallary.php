<?php include 'head.php';?>
<?php include 'header.php';?>
<section class="page-header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-8">
        <div class="title-block">
          <h1>Our Portfolio Gallary</h1>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="index.php">Home</a>
            </li>
             <li class="list-inline-item">/</li>
            <li class="list-inline-item">
                Gallary
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-padding course">
   
    <div class="container">
        <div class="heading"><h3>Some of our recent uploads photos.</h3></div>
        <div class="row">
            
            <div class="col-xl-4 col-lg-4">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course-1.jpg" alt="" class="img-fluid zoom">
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid zoom">
                    </div>
                </div>
            </div>

             <div class="col-xl-4 col-lg-4">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course-3.jpg" alt="" class="img-fluid zoom">
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course-2.jpg" alt="" class="img-fluid zoom"> 
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course-1.jpg" alt="" class="img-fluid zoom"> 
                    </div>
                </div>
            </div>

             <div class="col-xl-4 col-lg-4">
                <div class="course-block">
                    <div class="course-img">
                        <img src="assets/images/course/course-3.jpg" alt="" class="img-fluid zoom">  
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="post-navigation text-center">
                    <ul>
                      <li class="page-num active" aria-current="page">
                        <span class="page-url">
                          1
                          <span class="sr-only">(current)</span>
                        </span>
                      </li>
                      <li class="page-num"><a class="page-url" href="#">2</a></li>
                      <li class="page-num"><a class="page-url" href="#">3</a></li>
                      <li class="page-num"><a class="page-url" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
</section>
<!-- <?php
$output=array();
if ($handle = opendir('assets/images')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            $output[]=$entry;
        }
    }

    closedir($handle);
}

echo '<pre>'; print_r($output);
?> -->
<?php include 'footer.php';?>