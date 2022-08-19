<?php require_once("conn.php"); ?>
<?php
    /*Just for your server-side code*/
    // header('Content-Type: text/html; charset=ISO-8859-1');
?>
<?php
 $d1=new dbconn();
 $pdo=$d1->connect();
 ?>
 <?php require_once("function.php"); ?>
 <?php

 //call all avdrstisment here
 $sql="SELECT * FROM adsense where is_active=0";
 $result=$pdo->query($sql);
 $globalad=$result->fetchAll();
 //call all common contect here
 $sql="SELECT * FROM setting";
 $sett=$pdo->query($sql);
 $setting=$sett->fetch();
 
 //for logout
if(isset($_POST['logout'])){
unset($_SESSION['user']);    
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213528996-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213528996-1');
</script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="The Retail Story">
  <meta name="keywords" content="The Retail Story">
  <meta name="description" content="The Retail Story">
  <meta name="author" content="The Retail Story">
  <title>Your Retail Story</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />

<!--google analytics code-->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6852006878125906"
     crossorigin="anonymous"></script>
</head>
<!----->
<?php include('inc/popup.php'); ?> 

<body>
  <header class="stickyHeader navSticky">
    <div class="row logoHeader px-lg-5 px-0 py-0 py-sm-2 bg-white">
      <nav class="navbar py-0">
        <div class="container-fluid">
          <a class="navbar-brand mb-md-2 mb-lg-0" href="index">
            <img src="images/<?php echo $setting['logo']; ?>" class="img-fluid" alt="Logo">
          </a>
          <form class="d-flex" action="search" method="post">
              <input class="form-control me-2 bg-white border-1 rounded-0 searchInput" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn bg-darkred" type="submit"> <i class="fa fa-search"></i></button>
          </form>
          <div class="dropdown  ms-md-5 ms-0">
              <div class="translate btn btn-white text-red fw-bold" id="google_translate_element"></div>
                          <script type="text/javascript">
                              function googleTranslateElementInit() {
                              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                      }
                         </script>
             <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div>
        </div>
      </nav>
    </div>
    <div class="row menubarTop bg-red py-0 py-sm-1 ps-0" id="mobileBg">
      <div class="">
      <nav class="navbar navbar-expand-lg py-0 float-lg-end float-start">
        <div class="container-fluid">
          <button class="navbar-toggler" id="mobileToggle" type="button" data-bs-toggle="collapse" data-bs-target="#nndMenubar"
            aria-controls="nndMenubar" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span class="fa fa-bars text-red"></span>
          </button>
          <div class="collapse navbar-collapse" id="nndMenubar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="index"><i class="fa fa-home"></i> Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/industry-story"><i class="fa fa-industry"></i> Industry Story</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/startup-story"><i class="fas fa-handshake"></i> StartUp Story</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/wonder-woman"><i class="fas fa-female"></i> Wonder Woman</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/expert-opinion"><i class="fa fa-hat-cowboy"></i> Expert Opinion</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/inside-edge"><i class="far fa-hand-point-down"></i> Inside Edge</a>
              </li>

              <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="category/marketing-campaign"><i class="fas fa-building"></i> Marketing Campaign</a>
              </li>

       
            <!-- <?php if(!empty($_SESSION['user']) and isset($_SESSION['user'])){ ?>
              <li class="nav-item">
                <a class="nav-link text-light text-capitalize dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa fa-user-circle"></i> <?php echo explode(" ", $_SESSION['user'])[0]; ?></a>
                 <ul class="dropdown-menu rounded-0" aria-labelledby="downBroch">
                                        <li>
                                             <form method="post">
                                            <button class="dropdown-item fs-25 text-green" type="submit" name="logout">logout</button>
                                            </form>
                                            </li>
                                    </ul>
              </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link text-light text-capitalize" href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa fa-user-circle"></i> Login</a>
              </li>
              <?php } ?> -->

            </ul>
          </div>
        </div>
      </nav>
      </div>
    </div>
    <div class="row bg-light-red px-sm-5 px-1 py-1">
      <div class="col-xxl-2 col-4">
        <button class="btn bg-red rounded-pill px-xl-5 px-lg-3 px-1 fs-16 cursor-default">Latest News</button>
      </div>
      <div class="col-xxl-10 col-8">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
          <ul class="list-style-none marqLNews">
            <?php
            $result=$pdo->query("SELECT heading,id,category FROM news where is_active=0 ORDER BY id desc LIMIT 7"); 
            $data=$result->fetchAll();
            foreach ($data as $value) {
              # code...
              $a=strip_tags( $value['heading']);
            ?>
            <li class="text-dark fs-16">
           <a href="category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>" class="text-dark text-decoration-none">
             <?php echo $a; ?>
            </a>
            </li>
          <?php } ?>
          </ul>
        </marquee>
      </div>
    </div>
  </header>
<style>
    .cardVido .card{
    overflow:hidden !important;
  }
 .cardVido iframe{
  height:200px !important;
  width: 100% !important;
}
.videosize{
  height:200px !important;
  width: 100% !important;
}
.card-body{
    padding: 9px 1px 3px 10px !important;
}
</style>
<div class="container">
    <div class="row g-3 p-3">
 
  <div class="col-lg-7 topBanner">
     <div id="carouselExampleCaptions" class="carousel slide card shadow-sm" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <?php
   $sql="SELECT * FROM news where is_active=0 ORDER BY id DESC LIMIT 3";
   $result=$pdo->query($sql);
   $data=$result->fetchAll();
   $a=strip_tags( $data[0]['heading']);
   $b=strip_tags( $data[1]['heading']);
   $c=strip_tags( $data[2]['heading']);
  ?>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/<?php echo $data[0]['image'] ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <a href="category/news.php?cat=<?php echo $data[0]['id']; ?>&cat1=<?php echo $data[0]['category']; ?>" class="text-dark text-decoration-none"><h5 class="card-title Poppins-Bold2 hoverRed" id="ct"><?php echo $a; ?></h5></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/<?php echo $data[1]['image'] ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <a href="category/news.php?cat=<?php echo $data[1]['id']; ?>&cat1=<?php echo $data[1]['category']; ?>" class="text-dark text-decoration-none"><h5 class="card-title Poppins-Bold2 hoverRed" id="ct"><?php echo $b; ?></h5></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/<?php echo $data[2]['image'] ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-md-block">
        <a href="category/news.php?cat=<?php echo $data[2]['id']; ?>&cat1=<?php echo $data[2]['category']; ?>" class="text-dark text-decoration-none"><h5 class="card-title Poppins-Bold2 hoverRed" id="ct"><?php echo $c; ?></h5></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
  <div class="col-lg-5 fs-14 topLateTrend">
    <div class="card bg-white shadow p-2 overflow-auto">
    <ul class="nav nav-tabs pt-3" id="leftNewsTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active text-dark Poppins-Bold" id="Top-tab" data-bs-toggle="tab" data-bs-target="#Top" type="button" role="tab" aria-controls="Top" aria-selected="true">Top News</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link text-dark Poppins-Bold" id="Latest-tab" data-bs-toggle="tab" data-bs-target="#Latest" type="button" role="tab" aria-controls="Latest" aria-selected="false">Latest News</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link text-dark Poppins-Bold" id="Trending-tab" data-bs-toggle="tab" data-bs-target="#Trending" type="button" role="tab" aria-controls="Trending" aria-selected="false">Trending News</button>
      </li>
    </ul>
    <div class="tab-content pt-3" id="leftNewsTabContent">
      <div class="tab-pane fade show active" id="Top" role="tabpanel" aria-labelledby="Top-tab">
        <div class="col-sm-12 finCard">
          <div class="mb-1">
            <?php
            // SELECT * FROM `news` ORDER BY view DESC LIMIT 6
               $sql="SELECT * FROM news WHERE is_active=0 and created_at > NOW() - INTERVAL 60 DAY ORDER BY view DESC LIMIT 5";
               $result=$pdo->query($sql);
               $data=$result->fetchAll();
               foreach ($data as $value) {
                 # code...
                 $a=strip_tags( $value['heading']);
             ?>
            <div class="row g-0 mb-2 mb-lg-0">
              <div class="col-4">
                <img src="images/<?php echo $value['image']; ?>" class="img-fluid rounded-start w-100" alt="financial">
              </div>
              <div class="col-8 p-2">
                <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>"  class="text-dark text-decoration-none">
                <h2 class="card-text fs-16  hoverRed Poppins-Bold"><?php echo $a; ?></h2>
                <p class="card-text fs-12"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?></small></p>
              </a>
              <div class="cardCateSmDiv">
              <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="cardCateSm">TOP NEWS</a>
              </div>
              </div>
            </div>
         <?php } ?>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="Latest" role="tabpanel" aria-labelledby="Latest-tab"> 
          <div class="col-sm-12 finCard">
        <div class="mb-1">
          <?php
           $sql="SELECT * FROM news where is_active=0 ORDER BY id desc LIMIT 5";
           $result=$pdo->query($sql);
           $data=$result->fetchAll();
           foreach ($data as $value) {
             # code...
             $a=strip_tags( $value['heading']);
           ?>
        <div class="row g-0 mb-2 mb-lg-0">
              <div class="col-4">
                <img src="images/<?php echo $value['image'] ?>" class="img-fluid rounded-start w-100" alt="financial">
              </div>
              <div class="col-8 p-2">
                <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>"  class="text-dark text-decoration-none">
                <h2 class="card-text fs-16  hoverRed Poppins-Bold"> <?php echo $a; ?> </h2>
                <p class="card-text fs-12"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?></small></p>
              </a>
              <div class="cardCateSmDiv">
              <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="cardCateSm">
              LATEST NEWS
            </a>
            </div>
              </div>
            </div>
            <?php } ?>
        </div>
      </div></div>
      <div class="tab-pane fade" id="Trending" role="tabpanel" aria-labelledby="Trending-tab"> 
          <div class="col-sm-12 finCard">
        <div class="mb-1">
          <?php 
          $sql="SELECT * FROM news WHERE is_active=0 and created_at > NOW() - INTERVAL 60 DAY ORDER BY view DESC LIMIT 5";
          $result=$pdo->query($sql);
          $data=$result->fetchAll();
          foreach ($data as $value) {
            # code...
            $a=strip_tags( $value['heading']);
          ?>
        <div class="row g-0 mb-2 mb-lg-0">
              <div class="col-4">
                <img src="images/<?php echo $value['image'] ?>" class="img-fluid rounded-start w-100" alt="financial">
              </div>
              <div class="col-8 p-2">
                <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>"  class="text-dark text-decoration-none">
                <h2 class="card-text fs-16  hoverRed Poppins-Bold"><?php echo $a ?></h2>
                <p class="card-text fs-12"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?></small></p>
              </a>
              <div class="cardCateSmDiv">
              <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="cardCateSm">TRENDING NEWS</a>
              </div>
              </div>
            </div>
          <?php } ?>
      </div></div>
    </div>
    </div> 
   </div>
</div>
</div>
<div class="container">
    <section class="firstCard py-sm-5 py-2">
        <!--px-sm-5-->
  <div class="">
  <div class="col-lg-12 mt-2 mt-lg-0">
  <div class="row px-0">
       <?php $result=$pdo->query("SELECT * FROM news where important='Yes' and is_active=0 ORDER BY id desc LIMIT 4");
          $data=$result->fetchAll();
          foreach ($data as $value) {
             # code...
              $a = strip_tags($value['heading']);
              $b=  strip_tags($value['description'])
            ?>
      <div class="col-md-6 col-lg-3 pb-2">
        <div class="card shadow-lg">
          <img src="./images/<?php echo $value['image']; ?>" class="card-img-top" alt="weekly-news">
          <div class="card-body">
            <h6 class="card-title hoverRed"><a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline hoverRed"><?php echo substr($a, 0,80) ;?></a></h6>  
           <div class="cardCateDiv">
            <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="cardCate">INDUSTRY</a>
            </div>
            <!--description-->
            <!--<p class="card-text fs-16"><?php echo  substr($b, 0, 150);?><a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline hoverRed text-primary"> read more...</a></p>-->
            </div>
            <div class="border-top col-6 mx-auto pb-1"></div>
           <div class="text-center socialSpace pb-1">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://yourretailstory.com/category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a; ?>" class='me-3' onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="fab fa-facebook text-secondary"></i><span></span></a>

                <a href="https://twitter.com/share?u=https://yourretailstory.com/category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a; ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fab fa-twitter text-secondary"></i></a>

                <a href="https://www.linkedin.com/shareArticle?mini=true&u=https://yourretailstory.com/category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a; ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><i class="fab fa-linkedin text-secondary"></i></a>

                  <a href="https://api.whatsapp.com/send?text=https://yourretailstory.com/category/news.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a; ?>" class="me-3" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp text-secondary"></i></a>
           
            </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
   </div>
</section>
</div>
  
<div class="container">
    <section class="indSec pb-sm-5 pt-sm-4 pt-3 pb-2">
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <h2 class="Poppins-Bold">INDUSTRY STORY</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
        <div class="row indHeight">
          <?php
             $value=fetchdata('Industry-Story',2);
             foreach ($value as $value1) {
               # code...
               $a=strip_tags($value1['heading']);
               $b=strip_tags($value1['description']);
           ?>
          <div class="col-sm-12 col-lg-6 pb-2 pb-md-0 indCard">
            <div class="card shadow-lg mb-2 mb-lg-0">
              <img src="images/<?php echo $value1['image']; ?>" class="card-img-top" alt="weekly-news">
              <div class="card-body pb-0">
                <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                <h6 class="card-title Poppins-Bold hoverRed"><?php echo substr($a,0,80); ?>...</h6></a>
                <p class="card-text fs-16"><?php echo  substr($b, 0, 100); ?><a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed text-primary"> read more...</a></p>
               <div class="cardCateDiv">
                <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">INDUSTRY STORY</a>
                </div>
              </div>
              
              <div class="card-footer bg-transparent card-text border-top-0 pb-2">
                <div class="row">
                  <small class="text-muted col-4 fs-14"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                  <!-- <i class="fa fa-share"></i> -->
                  <small class="text-muted col-4 text-center fs-14"> <a href="javascript:void(0)" class="text-secondary"></a></small>
                  <small class="text-muted col-4 text-end fs-14"><?php echo $value1['view']; ?> View <a href="javascript:void(0)" class="text-secondary"><i class="fa fa-eye"></i></a></small>
                </div>
              </div>

            </div>
          </div>
        <?php } ?>
          <div class="col-sm-12 pt-3">
            <span class="float-end"><a href="category/industry-story.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
          </div>
        </div>
        <h2 class="Poppins-Bold">STARTUP STORY</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
        <div class="row strtHeight">
          <div class="col-sm-12">
            <?php
              $value=fetchdata('StartUp-Story',4);
              foreach ($value as $value1) {
                # code...
                $a=strip_tags($value1['heading']);
                $b=strip_tags($value1['description']);
             ?>
            <div class="card mb-3 shadow-lg">
              <div class="row g-0">
                <div class="col-md-3">
                  <img src="images/<?php echo $value1['image']; ?>" class="img-fluid rounded-start w-100 h-100" alt="weekly-news">
                </div>
                <div class="col-md-9">
                  <div class="card-body pb-0">
                    <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>"><h6 class="card-title Poppins-Bold hoverRed"><?php echo $a; ?></h6></a>
                    <p class="card-text text-justify"><?php echo  substr($b, 0, 100); ?><a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed text-primary"> read more...</a></p>
                  </div>
                  <div class="card-footer bg-transparent card-text border-top-0 pb-1">
                    
                  <div class="row">
                    <small class="text-muted col-4 fs-14"><?php echo time_elapsed_string($value1['created_at']); ?> <i  class="fa fa-clock"></i></small>
                    <!-- <i class="fa fa-comment"></i> -->
                    <small  class="text-muted col-4 text-center fs-14"><a href="javascript:void(0)" class="text-secondary"></a></small>
                    <small class="text-muted col-4 text-end fs-14"><?php echo $value1['view']; ?> View <a  href="javascript:void(0)" class="text-secondary"><i class="fa fa-eye"></i></a></small>
                  </div>
                  <div class="cardCateDiv">
                  <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">STARTUP</a>
                  </div>
                </div>
                   
                </div>
              </div>
            </div>
          <?php } ?>        
          </div>
          <div class="col-sm-12 pt-3">
            <span class="float-end"><a href="category/startup-story.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
          </div>
        </div>
      </div>
      <!-- advertisment area -->
      <div class="col-sm-3 py-3 py-sm-0 ps-5 ps-md-5 pe-5 pe-md-0">
      <div class="p-3 text-center">
        <?php if($globalad[1]['ads_type'] == 'google_ad'){ if(!empty($globalad[1]['ad_code'])){ ?>
        <div>
          <a href="https://www.bikano.com/" target="_blank">
         <?php echo $globalad[1]['ad_code'] ?>
         </a>
        </div>
      <?php }}else if($globalad[1]['ads_type']=='native_ad'){ if(!empty($globalad[1]['ad_img'])){ ?>
      <div>
     
         <img src="./images/ads/<?php echo $globalad[1]['ad_img']; ?>" alt="ads1" />
     
        </div>
      <?php 
      }} 
      if($globalad[2]['ads_type']=='google_ad'){ if(!empty($globalad[2]['ad_code'])){ ?>
        <div>
      <a href="https://apisindia.com/" target="_blank">

           <?php echo $globalad[2]['ad_code']; ?>
      </a>
        </div>
      <?php }} else if($globalad[2]['ads_type']=='native_ad'){ if(!empty($globalad[2]['ad_img'])){ ?>
       <div>
     
           <img src="./images/ads/<?php echo $globalad[2]['ad_img']; ?>" alt="ads2" />
    
        </div>
      <?php }} if($globalad[3]['ads_type']=='google_ad'){ if(!empty($globalad[3]['ad_code'])){ ?>
        <div>
        <a href="https://www.mahakgroup.in/" target="_blank">
           <?php echo $globalad[3]['ad_code']; ?>
      </a>
        </div>
      <?php }} else if($globalad[3]['ads_type']=='native_ad'){ if(!empty($globalad[3]['ad_img'])){?>
      <div>
    
           <img src="./images/ads/<?php echo $globalad[3]['ad_img']; ?>" alt="ads3" />
    
        </div>
      <?php }} if($globalad[4]['ads_type']=='google_ad'){ if(!empty($globalad[4]['ad_code'])){ ?>
        <div>
    

          <?php echo $globalad[4]['ad_code']; ?>
     
        </div>
      <?php }} else if($globalad[4]['ads_type']=='native_ad'){ if(!empty($globalad[4]['ad_img'])){ ?>
           <div>
           <img src="./images/ads/<?php echo $globalad[4]['ad_img']; ?>" alt="ads4" />
        </div>
      <?php }} ?>
      </div>
      </div>
      <!-- !advertisment area -->
    </div>

<!-- start video -->
<div class="row wonderRow ">
  <div class="col-sm-12">
      <?php 
       $sql="SELECT * FROM videos_news where important=0 and is_active=0";
                $result=$pdo->query($sql);
                $data=$result->fetchAll();
                // echo "<pre>";
                // print_r($data);
                // echo "</pre><br>";
                $c=$pdo->query("SELECT COUNT(*) FROM videos_news where is_active=0");
                $count = $c->fetchColumn();
                if($count>0){
      ?>
      <h2 class="Poppins-Bold">VIDEO</h2>
        <div class="h-3 w-110 bg-red mb-4"></div>
            <div class="owl-carousel cardVido videoSlider">
              <?php 
               foreach ($data as $value) {
                   $a=strip_tags($value['heading']);
              ?>
                <div class="item cursor-pointer">
                  <div class="card">
                    <?php if(!empty($value['yt_video'])){ ?>
                    <div>
                        <?php echo $value['yt_video']; ?>
                     </div>
                   <?php } 
                    elseif (!empty($value['cus_video'])) {
                   ?>
                     <div>
                       <video class="videosize" src="images/video_news/<?php echo $value['cus_video']; ?>" controls>
                     </div>
                     <?php } ?>
                    <div class="card-body">
                      <a class="text-dark text-decoration-none Poppins-Bold" href="javascript:void(0)">
                        <h6 class="card-text hoverRed Poppins-Bold"><?php echo $a; ?>
                          </h6></a>
                      </div>

                      <div class="card-footer bg-white border-0 pb-3">
                      <p class="card-text"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value['created_at']); ?> </small></p>
                    </div>

                  </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
      </div>
<!-- end video -->

<!-- advertisment -->
  <?php if($globalad[18]['ads_type'] == 'google_ad'){ if(!empty($globalad[18]['ad_code'])){ ?>
        <div class="mx-auto my-3 my-sm-5 py-2 text-center">
          <a href="https://www.mahakgroup.in/" target="_blank">
         <?php echo $globalad[18]['ad_code'] ?>
         </a>
        </div>
      <?php }}else if($globalad[18]['ads_type']=='native_ad'){ if(!empty($globalad[18]['ad_img'])){ ?>
      <div class="mx-auto my-3 my-sm-5 py-2 text-center">
         <img src="./images/ads/<?php echo $globalad[18]['ad_img']; ?>" alt="ads10" />
        </div>
        <?php }} ?>
<!-- !advertisment -->

    <h2 class="Poppins-Bold">WONDER WOMAN</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
<div class="row wonderRow">
  <div class="col-sm-12">
    <div class="owl-carousel wndrCarohgt">
      <?php
        $value=fetchdata('Wonder-Woman',5);
        foreach ($value as $value1) {
             $a=strip_tags($value1['heading']);
       ?>
      <div class="item cursor-pointer" id="">
        <div class="card">
          <img src="images/<?php echo $value1['image']; ?>" class="card-img-top" alt="wonder">
          <div class="card-body pb-0">
            <a class="text-dark text-decoration-none Poppins-Bold" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>"><h6 class="card-text text-justify hoverRed Poppins-Bold"><?php echo $a; ?></h6></a>
            </div>
            <div class="card-footer bg-white border-0 pb-1">
            <p class="card-text fs-14"><small class="text-muted"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value1['created_at']); ?></small></p>
           
           <div class="cardCateDiv"> <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">WONDER WOMAN</a>
           </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>

  <!-- advertisment area -->
         <?php if($globalad[0]['ads_type'] == 'google_ad'){ if(!empty($globalad[0]['ad_code'])){ ?>
        <div class="mx-auto my-3 my-sm-5 py-2 text-center">
          <a href="https://bonncart.in/" target="_blank">
             <?php echo $globalad[0]['ad_code'] ?>
         </a>
        </div>
      <?php }}else if($globalad[0]['ads_type']=='native_ad'){ if(!empty($globalad[0]['ad_img'])){ ?>
      <div class="mx-auto my-3 my-sm-5 py-2 text-center">
         <img src="./images/ads/<?php echo $globalad[0]['ad_img']; ?>" alt="ads11" />
        </div>
        <?php }} ?>
   <!-- !advertisment area -->

  <div class="col-lg-6 col-md-12 col-sm-12 expHgt">
    <h2 class="Poppins-Bold mt-sm-0 mt-3">EXPERT OPINION</h1>
      <div class="h-3 w-110 bg-red mb-4"></div>
      <div class="col-sm-12 ">
        <?php
          $value=fetchdata('Expert-Opinion',1);
          foreach ($value as $value1) {
            # code...
             $a=strip_tags($value1['heading']);
             $b=strip_tags($value1['description']);
         ?>
        <div class="card mb-3 shadow-lg">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="expert">
            </div>
            <div class="col-md-8">
              <div class="card-body pb-0">
                <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                  <h6 class="card-text hoverRed Poppins-Bold"><?php echo substr($a,0,50); ?>...</h6></a>
                 <p class="card-text text-justify fs-16 pt-2"><?php echo  substr($b, 0, 80); ?><a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed text-primary"> read more...</a></p>
              </div>
                <div class="card-footer bg-transparent card-text border-top-0">
                  <div class="row fs-14">
                     <small class="text-muted col-6"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                     <!-- <i class="fa fa-share"></i> -->
                     <small class="text-muted col-6 text-end"><a href="javascript:void(0)"
                        class="text-secondary"></a></small>
                  </div>
                  <div class="cardCateDiv">
                  <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">EXPERT OPINION</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div class="col-sm-12 pt-2 imaran">
        <span class="float-end"><a href="category/expert-opinion.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
      </div>

  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 insdHgt">
    <h2 class="Poppins-Bold mt-sm-0 mt-3">INSIDE EDGE</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
      <div class="col-sm-12">
         <?php
          $value=fetchdata('Inside-Edge',1);
          foreach ($value as $value1) {
            # code...
            $a=strip_tags($value1['heading']);
            $b=strip_tags($value1['description']);
         ?>
        <div class="card mb-3 shadow-lg">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="inside">
            </div>
            <div class="col-md-8">
              <div class="card-body pb-0">
                <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                  <h6 class="card-text hoverRed Poppins-Bold"><?php echo substr($a,0,50); ?>...</h6></a>
                <p class="card-text text-justify fs-16 pt-2"><?php echo  substr($b, 0, 80); ?><a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed text-primary"> read more...</a></p>
              </div>
              
              <div class="card-footer bg-transparent card-text border-top-0">
                  <div class="row fs-14">
                     <small class="text-muted col-6"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                     <small class="text-muted col-6 text-end"> <a href="javascript:void(0)"
                        class="text-secondary"></a></small>
                        <!-- <i class="fa fa-share"></i> -->
                  </div>
                  <div class="cardCateDiv">
                  <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">INSIDE EDGE</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div class="col-sm-12  pt-0">
        <span class="float-end"><a href="category/inside-edge.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
      </div>
  </div>
  <div class="col-sm-6 col-md-8">
    <div class="row">
    <div class="col-sm-12 mrktHgt">
      <h2 class="Poppins-Bold mt-sm-5 mt-3">MARKETING CAMPAIGN</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
      <div class="row g-2">
        <?php
          $value=fetchdata('Marketing-Campaign',4);
          foreach ($value as $value1) {
            # code...
             $a=strip_tags($value1['heading']);
         ?>
         <div class="col-lg-6">
          <div class="card shadow-lg">
            <img src="images/<?php echo $value1['image'] ?>" class="card-img-top" alt="Marketing">
            <div class="card-body py-0">
              <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                <h6 class="card-text my-3 hoverRed Poppins-Bold"><?php echo $a; ?></h6></a>
               
            </div>
            <div class="card-footer border-0 bg-white pt-0">
            <p class="card-text"><small class="text-muted fs-14"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value1['created_at']); ?></small></p>
            <div class="cardCateDiv">
            <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">MARKETING CAMPAIGN</a>
            </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="col-sm-12 pt-4">
      <span class="float-end"><a href="category/marketing-campaign.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
    </div>
    <div class="col-sm-12">
      <h2 class="Poppins-Bold mt-sm-5 mt-3">PRODUCT LAUNCHES</h2>
      <div class="h-3 w-110 bg-red mb-4"></div>
    </div>
      <div class="col-sm-12 prdlauHgt">
        <?php
          $value=fetchdata('Product-Launches',4);
          foreach ($value as $value1) {
            # code...
             $a=strip_tags($value1['heading']);
            $b=strip_tags($value1['description']);
         ?>
        <div class="card mb-3 shadow-lg">
          <div class="row g-0">
            <div class="col-md-3">
              <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="product">
            </div>
            <div class="col-md-9">
              <div class="card-body pb-0">
                <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                <h6 class="card-title Poppins-Bold hoverRed"><?php echo $a; ?></h6></a>
                <p class="card-text text-justify fs-16"><?php echo  substr($b, 0, 100); ?><a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed text-primary"> read more...</a></p>
              </div>
              
              <div class="card-footer bg-transparent card-text border-top-0 pb-0 fs-14">
                <div class="row">
                  <small class="text-muted col-6"> <?php echo time_elapsed_string($value1['created_at']); ?> <i class="fa fa-clock"></i></small>
                <small class="text-muted col-6 text-end"> <a href="javascript:void(0)" class="text-secondary"></a>
              </small>
                <!-- <i class="fa fa-share"></i> -->
              </div>
              <div class="cardCateDiv">
              <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCate">PRODUCT LAUNCHES</a>
              </div>
            </div>

            </div>
          </div>
        </div>
      <?php } ?>
      </div>
      <div class="col-sm-12 pt-2">
      <span class="float-end"><a href="category/product-launches.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
      </div>
    </div>
    </div>
  <div class="col-sm-6 col-md-4">
    <div class="row">
          <div class="col-sm-12">
            <h4 class="Poppins-Bold mt-sm-5 mt-3 finanHed">COMPANY FINANCIAL UPDATE</h4>
            <div class="h-3 w-110 bg-red mb-4"></div>
          </div>
          <div class="col-sm-12 fnclHgt">
             <?php
          $value=fetchdata('Company-Financial-Updates',4);
          foreach ($value as $value1) {
            # code...
             $a=strip_tags($value1['heading']);
            $b=strip_tags($value1['description']);
         ?>
            <div class="card mb-1 shadow-lg">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/<?php echo $value1['image'] ?>" class="img-fluid rounded-start w-100 h-100" alt="financial">
                </div>
                <div class="col-md-8">
                <div class="card-body pb-0 pt-2">
                  <a class="text-dark text-decoration-none" href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>">
                  <h6 class="card-title fs-14 Poppins-Bold hoverRed mb-0"><?php echo $a; ?></h6>
                </a>

                  <!-- <p class="card-text fs-14"><?php echo  substr($b, 0, 50); ?><a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="removeunderline hoverRed"> read more...</a></p> -->
                  </div>
                  <div class="card-footer bg-transparent card-text border-top-0"><div class="row"><p class="card-text"><small class="text-muted fs-12"><i class="fa fa-clock"></i> <?php echo time_elapsed_string($value1['created_at']); ?></small></p>
                <div class="cardCateSmDiv">
                  <a href="category/news.php?cat=<?php echo $value1['id']; ?>&cat1=<?php echo $value1['category']; ?>" class="cardCateSm">FINANCIAL UPDATE</a>
                  </div>
                
                </div></div>
              </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="col-sm-12 pt-sm-3 pt-0">
            <span class="float-end"><a href="category/company-financial-updates.php" class="text-red text-decoration-none Poppins-Bold fs-16">SEE MORE</a></span>
          </div>
           
           <!-- advertisment -->
           <?php if($globalad[19]['ads_type'] == 'google_ad'){ if(!empty($globalad[19]['ad_code'])){ ?>
        <div  class="col-sm-12 ps-sm-5 ps-2 pt-4 pb-4 pbs-m-0">
        <div  class="p-2 mx-5 mx-sm-0">
        <a href="https://www.mahakgroup.in/" target="_blank">
         <?php echo $globalad[19]['ad_code'] ?>
         </a>
        </div>
        </div>
      <?php }}else if($globalad[19]['ads_type']=='native_ad'){ if(!empty($globalad[19]['ad_img'])){ ?>
      <div  class="col-sm-12 ps-sm-5 ps-2 pt-4 pb-4 pbs-m-0">
            <div  class="p-2 mx-5 mx-sm-0">
         <img src="./images/ads/<?php echo $globalad[19]['ad_img']; ?>" alt="ads1" />
        </div>
        </div>
        <?php }} ?>
        <!-- !advertisment -->
      </div>
    </div>
  </div>
</div>
<!-- start more video -->



<!-- end more video -->

      <!-- advertisment -->
 <?php if($globalad[20]['ads_type'] == 'google_ad'){ if(!empty($globalad[20]['ad_code'])){ ?>
        <div class="container">
         
            <div class="mx-sm-auto mx-5 mt-2 mt-sm-5 py-1 text-center">
           
            <a href="https://apisindia.com/" target="_blank">
         <?php echo $globalad[20]['ad_code'] ?>
         </a>
        </div>
        </div>
      <?php }}else if($globalad[20]['ads_type']=='native_ad'){ if(!empty($globalad[20]['ad_img'])){ ?>
     <div class="container">
          <div class="mx-sm-auto mx-5 mt-2 mt-sm-5 py-1 text-center">
         <img src="./images/ads/<?php echo $globalad[20]['ad_img']; ?>" alt="ads12" />
        </div>
     </div>
        <?php }} ?>
<!-- !advertsiment -->

  </div>
</section>
</div>
 <?php include("footer.php"); ?>