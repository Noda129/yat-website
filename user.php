<?php
session_start();
if ( isset($_SESSION['user']) ){
    $user = $_SESSION['user'];
}
else{
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Yat Learning Centers</title>
    <link rel="icon" href="image/logo3.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src ="boot/jquery-3.5.1.js"></script>
    <script src ="js/jquery.counterup.min.js"></script>
    <script src ="js/countup.min.js" type="text/javascript"></script>
    <script src ="boot/js/bootstrap.js"></script>
    <script src ="js/jquery.waypoints.min.js"></script>
    <script src ="OwlCarousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="OwlCarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="fonts/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <!-----------header section------------------------->
<header>
    <div class="header-top">
 
       <div class="top-left userpage">
         <a href="#">Contact Us</a>
         <div class="user"> <span>welcome<span> <?php echo $user;?></div>
        </div>

<!------------start top right-------->
       <div class="top-right">
        <div class="link">
          <a href="http://www.facebook.com/pages/YAT-Learning-Centers/163119337036828"   target="_blank">
           
            <i class="fab fa-facebook-f"></i>
       
          </a>
   
          <a href="https://twitter.com/#!/YATlearning"  target="_blank"> 
        
            <i class="	fab fa-twitter"></i>
        
          </a>
          
          <a href="https://www.instagram.com/yat_learning_centers/"  target="_blank">
            
            <i class="	fab fa-instagram"></i> 
     
          </a>
          <a href="http://www.linkedin.com/company/1240262?trk=tyah"  target="_blank">
         
            <i class="	fab fa-linkedin-in"></i>
      
          </a>
        </div>     
       <div class="cart">
            <i class="icon fa fa-shopping-cart"></i>
            <div class="mes">
              <div class="alrt">
                Shopping cart is currently empty
              </div>
            </div>
       </div>
        <div class="login">
          <a href="logout.php">Logout</a>
        </div>
    </div>
<!------end top-right  -------------->
 </div>
<!----------end header top section---------->
 <div id="scroll">
      <nav class="header-nav">
          <div class="logo">
            <a class="img" href="user.php">
                <img src="image/logo.png" alt="Yat learning Center">
            </a>
          </div>
          
        <div class="header-links">
          <div class="drop-menu">
            <div class="cour-title">
                <a class="nav-link hvr-underline-from-left" href="#" >
                     <i class="fas fa-th"></i> courses
                    </a>
                
             <div class="courses-menu" >
               <ul>
                 <div class="des">
                 <li class="drop-down">
                   <a  href="#" >3ddesign</a>
                   <div class="circle">
                   <a href="#"><i class="las la-angle-right"></i></a>
                  </div>
                  <div class="design">
                    <a  href="#"> 3ds Max </a>
                    <a  href="#"> AutoCAD</a>
                    <a  href="#"> Maya</a>
                    <a  href="#"> MotionBuilder</a>
                    <a  href="#"> Mudbox</a>
                    <a  href="#"> Swift 3D</a>
                  </div>
                </li>
                </div>
                
                <div class="accounting">
                <li class="drop-down">
                   <a  href="#">accounting</a>
                   <div class="circle">
                   <a href="#"> <i class="las la-angle-right"></i></a>
                   </div>
                   <div class="acco">
                    <a href="#">Accounting Skills</a>
                      <a href="#">Office Accounting</a>
                      <a href="#">QuikBooks</a>
                      <a href="#">YPDA</a>
                  </div>
                  
                  </li>
                </div>
                <div class="business">
                  <li class="drop-down">
                    <a  href="#">business</a>
                    <div class="circle">
                    <a href="#"><i class="las la-angle-right"></i></a>
                    </div>
                    <div class="bus">
                      <a  href="#">Business Skills</a>
                      <a  href="#">Digital Marketing Diploma</a>
                      <a  href="#">HR Diploma</a>
                      <a  href="#">HRBP</a>
                      <a  href="#">HRMP</a>
                      <a  href="#">IBDL Business</a>
                      <a  href="#">PASD</a>
                      <a  href="#">PBSD</a>
                      <a  href="#">PCSD</a>
                      <a  href="#">PM Skills</a>
                      <a  href="#">PSSD</a>
                      <a  href="#">Teaching Skills</a>
                    </div>
                  </li>
                </div>
                <div class="enginnering">
                  <li class="drop-down">
                   <a  href="#">enginnering</a>
                   <div class="circle">
                   <a href="#"><i class="las la-angle-right"></i></a>
                   </div>
                   <div class="eng">
                    <a href="#">3ds Max</a>
                    <a href="#">AutoCAD</a>
                    <a href="#">MATLAB</a>
                    <a href="#">Revit</a>
                    <a href="#">SAFE7</a>
                    <a href="#">SAP2000</a>
                    <a href="#">STAAD</a>
                    <a href="#">YPDC</a>
                   </div>
                  </li>
                </div>
                <div class="english">
                  <li class="drop-down">
                  <a  href="#">english</a>
                  <div class="circle">
                  <a href="#"><i class="las la-angle-right"></i></a>
                  </div>
                  <div class="engl">
                    <a href="#">ACT YOUR ENGLISH</a>
                    <a href="#">Conversational English</a>
                    <a href="#">Conversational English Diploma</a>
                    <a href="#">General English</a>
                    <a href="#">General English Diploma</a>
                    <a href="#">Kids English</a>
                    <a href="#">TOEFL Exam</a>
                  </div>
                </li>
               </div>
               <div class="graghics">
                <li class="drop-down">
                 <a  href="#">graghics</a>
                 <div class="circle">
                 <a href="#"><i class="las la-angle-right"></i></a>
                 </div>
                 <div class="gragh">
                  <a href="#">CorelDRAW</a>
                  <a href="#">Graphics Skills</a>
                  <a href="#">Illustrator</a>
                  <a href="#">InDesign</a>
                  <a href="#">Photoshop</a>
                  <a href="#">QuarkXPress</a>
                  <a href="#">YCDK</a>
                  <a href="#">YPDG</a>
                 </div>
                </li>
               </div>
               <div class ="multimedia">
                <li class="drop-down">
                  <a  href="#">multimedia</a>
                  <div class="circle">
                  <a href="#"><i class="las la-angle-right"></i></a>
                  </div>
                  <div class ="mult">
                    <a href="#"> 3ds Max </a>
                    <a href="#">Combustion</a>
                    <a href="#">Final Cut</a>
                    <a href="#">Maya</a>
                    <a href="#">Motion Graphics Diploma</a>
                    <a href="#">MotionBuilder</a>
                    <a href="#">Mudbox</a>
                    <a href="#">Pro Editor + Colorist Diploma</a>
                    <a href="#">Sound Forge</a>
                    <a href="#">Swift 3D</a>
                    <a href="#">VFX Compositing Diploma</a>
                    <a href="#">YPDV</a>
                  </div>
                </li>
               </div>
               <div class = "network">
                <li class="drop-down">
                <a  href="#">network administration</a>
                <div class="circle">
                <a href="#"> <i class="las la-angle-right"></i></a>
                </div>
                <div class="net">
                  <a href="#">CEH</a>
                  <a href="#">CCNA</a>
                  <a href="#">CND</a>
                  <a href="#">ECSA</a>
                  <a href="#">Exchange Server</a>
                  <a href="#">HCIA-AI Training</a>
                  <a href="#">HCIA-Cloud Computing Training</a>
                  <a href="#">MCITP: Exchange Server</a>
                  <a href="#">MCITP: Windows</a>
                  <a href="#">MCSA: Windows Server</a>
                  <a href="#">MCSE: Server Infrastructure</a>
                  <a href="#">MCTS: Exchange Server</a>
                  <a href="#">MCTS: System Center Operations Manager</a>
                  <a href="#">MCTS: Windows</a>
                  <a href="#">MCTS: Windows Server</a>
                  <a href="#">Microsoft System Center</a>
                </div>
               </li>
             </div>
             <div class="office">
              <li class="drop-down">
                <a  href="#">office </a>
                <div class="circle">
                <a href="#"><i class="las la-angle-right"></i></a>
                </div>
                <div class="off">
                  <a href="#">Access</a>
                  <a href="#">Excel</a>
                  <a href="#">IC3</a>
                  <a href="#">ICDL</a>
                  <a href="#">Infopath</a>
                  <a href="#">MOS</a>
                  <a href="#">MS Project</a>
                  <a href="#">Outlook</a>
                  <a href="#">PowerPoint</a>
                  <a href="#">Publisher</a>
                  <a href="#">Visio</a>
                  <a href="#">Word</a>
                  <a href="#">YPDA</a>
                </div>
              </li>
             </div> 
             <div class="software">
              <li class="drop-down">
                 <a  href="#">software development</a>
                 <div class="circle">
                 <a href="#"><i class="las la-angle-right"></i></a>
                 </div>
                 <div class="soft">
                  <a href="#">ADO</a>
                  <a href="#">AMADD</a>
                  <a href="#">Android</a>
                  <a href="#">ASP</a>
                  <a href="#">C++</a>
                  <a href="#">ECSP.Net</a>
                  <a href="#">Embedded Systems</a>
                  <a href="#">HCIA-AI Training</a>
                  <a href="#">HTML</a>
                  <a href="#">IMADD</a>
                  <a href="#">Java</a>
                  <a href="#">JavaScript</a>
                  <a href="#">MCPD: Visual Studio</a>
                  <a href="#">MCTS: Visual Studio</a>
                  <a href="#">OCA_Java</a>
                 </div>
              </li>
             </div>
             <div class = "web">
              <li class="drop-down">
                  <a  href="#">web</a>
                  <div class="circle">
                  <a href="#"><i class="las la-angle-right"></i></a>
                  </div>
                  <div class ="we">
                    <a href="#">ASP</a>
                    <a href="#">CIW Skills</a>
                    <a href="#">CSS</a>
                    <a href="#">Dynamic Server Pages</a>
                    <a href="#">E-Commerce</a>
                    <a href="#">HTML</a>
                    <a href="#">Java</a>
                    <a href="#">JavaScript</a>
                    <a href="#">MCTS:.NET</a>
                    <a href="#">MySQL</a>
                    <a href="#">PERL</a>
                    <a href="#">PHP</a>
                    <a href="#">Swift 3D</a>
                    <a href="#">SWISHm</a>
                   </div>
                   </li>
               </div>
                 </ul> 
           </div>
         </div>
     </div>
            <div class="form1">
                <form action =""  method="POST">
                  
                 <div class="font-search">
                   <a href="#"><i class=" las la-search"></i></a> 
                 </div>
               <div class="in-search">
                <input class="in-search" type="search" placeholder="      Search for Courses" >
                </div>
                 <div class="advanced">
                    <a href="#">
                    Advanced
                    </a>
                  </div>
                  </form>
                 </div>
              <div class="drop-menu">
                <div class="cat-title">
                  <a class="nav-link hvr-underline-from-left" href="#" >
                   categories
                  </a>
               
                  <div class="categ-menu" >
                  
                      <a href="#"> 3d Design </a>
                      <a href="#"> Accounting</a>
                      <a href="#"> Business</a>
                       <a href="#"> Database</a>
                       <a href="#"> Engineering</a>
                       <a href="#"> English</a>
                       <a href="#"> Graphics</a>
                       <a href="#"> Multimedia</a>
                       <a href="#"> Network Administration</a>
                       <a href="#"> Office</a>
                       <a href="#"> Project Management</a>
                       <a href="#"> Security</a>
                        <a href="#">Software Development</a>
                       <a href="#"> Technical Support</a>
                       <a href="#">  Virtualization</a>
                       <a href="#"> Web</a>
                  </div>
                </div>
             </div>
               <div class="drop-menu">
                <div class="pro-title">
                    <a class="nav-link hvr-underline-from-left" >
                      providers
                    </a>
                 
                 <div class="pro-menu" >
                 
               
                  <a  href="#"> adobe</a>
                  <a  href="#">apple</a>
                  <a  href="#"> autodesk</a>
                   <a  href="#"> cisco</a>
                   <a  href="#">  cIW</a>
                   <a  href="#"> CompTIA</a>
                   <a  href="#">   Corel</a>
                   <a  href="#"> EC-Council</a>
                   <a  href="#"> ECDL Foundation</a>
                   <a  href="#">  Huawei</a>
                   <a  href="#">  IBDL</a>
                   <a  href="#">  Microsoft</a>
                   <a  href="#">  Oracle</a>
                   <a  href="#"> VMware</a>
                   <a  href="#"> YAT</a>
                 </div>
                </div>
              </div>
              <div class="drop-menu">
                <div class="sol-title">
                    <a class="nav-link hvr-underline-from-left" href="#">
                     solution
                    </a>
              
                <div class="sol-menu" >
                

                  <a  href="#">Corporate Solutions</a>
                  <a  href="#">ELearning Solutions</a>
                  <a  href="#">Learning Content Solutions</a>
                  <a  href="#">Learning Methods</a>
                  <a  href="#">Learning Projects</a>
                </div>
                </div>
              </div>
                <div class="drop-menu">
                    <div class="sup-title">
                    <a class="nav-link  hvr-underline-from-left" href="#" >
                     support
                    </a>
                
                <div class="supp-menu" >
                 
                 
                  <a  href="inquiry.php">Inquiries</a>
                  <a  href="#">Complains</a>
                  <a  href="#">FAQ</a>
                  <a  href="#">Contact Us</a>
                </div>
               </div>
             </div>
                <div class="drop-menu">
                  <div class="about-title">
                    <a class="nav-link hvr-underline-from-left" href="#" >
                     about
                    </a>
                
                <div class="about-menu" >
                 
                 
                  <a  href="#"> Company Profile</a>
                  <a  href="partners.php"> Partners & Accreditations</a>
                  <a  href="#">Sample Of Our Clients</a> 
                  <a  href="#">Facilities</a>
                  <a  href="#"> Photo Gallery</a>
                  <a  href="#"> News</a>
                  <a  href="#"> Careers @ YAT</a>
                </div>
              </div>
            </div>
                <div class="form2">
              
               <div class="userlog">
                   <img src="image/best.jpg">
                   <div class="useractive"></div>
               </div>

               </div>
        
       </nav>
  </div>
      
</header>
<!-----------------------end header---------------------->

<!----------------------------start of carousel---------------------------------------->
 <div class="section">
<div class="main-slide ">

  <div id="carouselExampleCaptions" class="carousel slide height-100 " data-ride="carousel">
   
      <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
     </ol>
    <div class="carousel-inner height-100 ">
     
     <div class="carousel-item  height-100 active ">
        <div class="overlay image1 height-100">
    
        </div>
        <div class="carousel-caption d-none d-md-block">
          <div class="heading">
            <h1>أحجز مكانك بخصم 60% لفترة محدودة </h1>
            </div>
            <div class="paragraph">
            <p>
              مع كورسات يات أون لاين بخصم 60%دلوقتي فرصتك تستغل الوقت اللي عندك وتحوله لمهارت جديدة تنفعك وتجعلك مستعد لمستقبل أفضل
            </p>
            </div>
            <div class="butt">
            <span>
              <a class="btn btn-outline-success my-2 my-sm-0" href="#" role="button">احجز مكانك الأن</a>
            </span>
            </div>
          </div>
         
      </div>
      <div class="carousel-item height-100 ">
        <div class="overlay image2 height-100">
      
        </div>
        <div class="carousel-caption d-none d-md-block">
          <div class="heading">
            <h1>
              اتعلم الأنجليزي وبخصم 60% لفترة محدودة
              </h1>
          </div>
          <div class="paragraph">
            <p>
              دلوقتي تقدر أنت كمان تغير من حياتك وتخلي العالم يسمعك مع يات هتتعلم انجليزي صح وتستمتع في نفس الوقت ؟؟ لأنك هتلاقي أفضل الطرق اللي تجعلك تعيش الأنجليزي وتمارسه في كل لحظة بتقضيها معانا   
            </p>
          </div>
          <div class="butt">
            <span>
              <a class="btn btn-outline-success my-2 my-sm-0" href="#" role="button">details</a>
            </span>
          </div>
          </div>
      </div>
      
      <div class="carousel-item height-100  ">
        <div class="overlay image3 height-100">
      
       </div>
        <div class="carousel-caption d-none d-md-block">
          <div class="heading">
          <h1>"مبادرة "تمكين الشباب للعمل المهني الحر</h1>
          </div>
          <div class="paragraph">
          <p>
           : دلوقتي فرصتك لبدء مستقبل جديد مع منحة مجانية 100% مقدمة من وزارة الأتصالات واختار أحد المجالات
            مطور صفحات الويب             
              مصمم جرافيكس
          مطور تطبيقات الموبيل 
  
          </p>
        </div>
        <div class="butt">
          <span>
            <a class="btn btn-outline-success my-2 my-sm-0" href="#" role="button">details</a>
          </span>
          </div>
        </div>
      </div>
     
     <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <div class="next">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     </div>
      <span class="sr-only">Previous</span>
     </a>
 
    
     <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <div class="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
     </div>
      <span class="sr-only">Next</span>
     </a>
    
    </div>
   </div>
</div>
</div>

<!-----------------------------end of carousel-------------------------------------------------->
<div class="section">
<div  class="sec-1">
  <div class="first">
    <div class="magic">
    <i class="la la-magic"></i>
     </div>
     
    <div class="txt-title">
    Business & Management
    </div>
    <div class="text-p">
      The best Business & Management courses
    </div>
    <div class="link1">
    <a href="#">List Courses</a>
  </div>
 </div>
 <div class="second">
  <div class="language">
  <i class="la la-language"></i>
  </div>
  <div class="txt-title">
    Design & Media
  </div>
    <div class="text-p">
      The best Design & Media courses
    </div>
    <div class="link2">
    <a href="#">List Courses</a>
  </div>
 </div>
 <div class="third">
  <div class="lightbulb">
  <!----<i class="la la-lightbulb-o"></i>--->
  <i class="las la-lightbulb"></i>
  </div>
  <div class="txt-title">
   
    Information Technologies IT
  </div>
 
    <div class="text-p">
      The best information Technology courses
    </div>
    <div class="link3">
    <a href="#">List Courses</a>
  </div>
 </div>
 <div class="fourth">
  <div class="laptop">
  <i class="la la-laptop"></i>
  </div>
  <div class="txt-title">
    Language
  </div>
    <div class="text-p">
      The best Language courses
    </div>
    <div class="link4">
    <a href="#">List Courses</a>
  </div>
  </div> 
</div>
</div>
<!---------end of section one-------------------->
<!--------------------start categories section2------------------->
<div class="section">
  <div class="topcat">
    <div class="cat-head">
      <span>categories</span>
      <h2>Top Categories</h2>
       <!----title line------->
       <div class= "ftran1">
        <div class="small1"></div>
      </div>
    </div>
    <div class="cat-foot">
      <div class="category1">
      <img src="image/categ/design.jpg">
        <div class="cat-text">
          <div class="cat-text-title">3d Design</div>
          <div class="cat-text-cou">20 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category2">
      <img src="image/categ/accounting.jpg">
        <div class="cat-text">
          <div class="cat-text-title">Accounting</div>
          <div class="cat-text-cou">7 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category3">
      <img src="image/categ/Business.jpg">
        <div class="cat-text">
          <div class="cat-text-title">Business</div>
          <div class="cat-text-cou">68 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category4">
      <img src="image/categ/engineering.jpg">
        <div class="cat-text">
          <div class="cat-text-title">Engineering</div>
          <div class="cat-text-cou">13 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category5">
      <img src="image/categ/english.jpg">
        <div class="cat-text">
          <div class="cat-text-title">English</div>
          <div class="cat-text-cou">36 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category6">
      <img src="image/categ/graphic.jpg">
        <div class="cat-text">
          <div class="cat-text-title">Graphics</div>
          <div class="cat-text-cou">14 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category7">
      <img src="image/categ/multi.jpg">
        <div class="cat-text">
          <div class="cat-text-title">Multimedia</div>
          <div class="cat-text-cou">25 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="category8">
      <img src="image/categ/web.jpg">
        <div class="cat-text">
          <div class="cat-text-title">Network Administration</div>
          <div class="cat-text-cou">49 courses</div>
          <div class="cat-text-butt">
            <a href="#">explore now</a>
          </div>
        </div>

      </div>
      <div class="button-category">
        <a class="btn btn-outline-success my-2 my-sm-0" href="#">browse all categories</a>
      </div>
    </div>
  </div>
</div>
<!---------------section Most Selling Courses--------------->
<div class="section">
  <div class="topsell">
    <div class="selling-head">
      <span>choose your desired courses</span>
      <h2>Most Selling Courses</h2>
       <!----title line------->
       <div class= "ftran1">
        <div class="small1"></div>
      </div>
       </div>
    <div class="selling-body">
      <div class="selling1">
        <div class="sell-title">
          <a href="#">Excel 2016 Advanced</a>
        </div>
          <div class="sell-hour">
            <div>Advanced</div>
            <div class="hour"><i class="lar la-clock"></i>21 hours</div>
          </div>
          <div class="sell-price">
            <div class="price">1100</div>
            <a href="#">Enroll</a>
          </div>
        </div>
        <div class="selling2">
          <div class="sell-title">
            <a href="#">Excel 2016 Core</a>
          </div>
            <div class="sell-hour">
              <div>Core</div>
              <div class="hour"><i class="lar la-clock"></i>18 hours</div>
            </div>
            <div class="sell-price">
              <div class="price">900</div>
              <a href="#">Enroll</a>
            </div>
          </div>
          <div class="selling3">
            <div class="sell-title">
              <a href="#">Autodesk 3ds Max Design 2019 Fundamentals</a>
            </div>
              <div class="sell-hour">
                <div>Core</div>
                <div class="hour"><i class="lar la-clock"></i>42 hours</div>
              </div>
              <div class="sell-price">
                <div class="price">2100 </div>
                <a href="#">Enroll</a>
              </div>
            </div>
            <div class="selling4">
              <div class="sell-title">
                <a href="#">Android Mobile Applications Development Diploma </a>
              </div>
                <div class="sell-hour">
                  <div>Standard</div>
                  <div class="hour"><i class="lar la-clock"></i>75 hours</div>
                </div>
                <div class="sell-price">
                 <div class="price"> <span>4400</span>  1750 </div>
                  <a href="#">Enroll</a>
                </div>
              </div>
          <div class="selling5">
             <div class="sell-title">
            <a href="#">YAT Professional Diploma in Graphics Design CC</a>
             </div>
              <div class="sell-hour">
              <div>Standard</div>
               <div class="hour"><i class="lar la-clock"></i>84 hours</div>
             </div>
            <div class="sell-price">
               <div class="price"> <span>4400</span>  1750 </div>
               <a href="#">Enroll</a>
            </div>
          </div>
          <div class="selling6">
              <div class="sell-title">
     <a href="#">Mastering Excel 2016</a>
      </div>
     <div class="sell-hour">
    <div>Mastering</div>
     <div class="hour"><i class="lar la-clock"></i>45 hours</div>
     </div>
   <div class="sell-price">
   <div class="price"> <span>2000</span>  800 </div>
  <a href="#">Enroll</a>
     </div>
      </div>
    <div class="selling7">
       <div class="sell-title">
    <a href="#">Master MOS 2016: Master Microsoft Office Specialist Certification 2016</a>
       </div>
   <div class="sell-hour">
     <div>Professional</div>
     <div class="hour"><i class="lar la-clock"></i>93 hours</div>
      </div>
     <div class="sell-price">
        <div class="price"> <span>1300</span>  3300 </div>
       <a href="#">Enroll</a>
    </div>
  </div>      
   <div class="selling8">
 <div class="sell-title">
      <a href="#">Mastering Autodesk 3ds Max 2019</a>
  </div>
  <div class="sell-hour">
      <div>Mastering</div>
   <div class="hour"><i class="lar la-clock"></i>81 hours</div>
     </div>
    <div class="sell-price">
   <div class="price"> <span></span>  4400 </div>
   <a href="#">Enroll</a>
    </div>
   </div>
   <div class="selling9">
    <div class="sell-title">
   <a href="#">Mastering Python Programming Fundamentals</a>
   </div>
<div class="sell-hour">
     <div>Mastering</div>
    <div class="hour"><i class="lar la-clock"></i>42 hours</div>
    </div>
  <div class="sell-price">
       <div class="price"> <span>3500</span>  1400 </div>
      <a href="#">Enroll</a>
    </div>
 </div>
       <div class="selling10">
       <div class="sell-title">
      <a href="#">YAT Professional Digital Marketing Diploma</a>
       </div>
     <div class="sell-hour">
   <div>Standard</div>
 <div class="hour"><i class="lar la-clock"></i>36 hours</div>
   </div>
   <div class="sell-price">
    <div class="price"> <span>7500</span>  3000 </div>
    <a href="#">Enroll</a>
     </div>
   </div>                    
   <div class="selling11">
   <div class="sell-title">
   <a href="#">Professional in Human Resources – International (PHRi)</a>
      </div>
      <div class="sell-hour">
  <div>professional</div>
   <div class="hour"><i class="lar la-clock"></i>36 hours</div>
           </div>
       <div class="sell-price">
   <div class="price"> <span>6000</span>  2400 </div>
  <a href="#">Enroll</a>
            </div>
 </div>
       <div class="selling12">
   <div class="sell-title">
        <a href="#">Mastering Java Programming</a>
     </div>
  <div class="sell-hour">
   <div>Mastering</div>
    <div class="hour"><i class="lar la-clock"></i>42 hours</div>
    </div>
      <div class="sell-price">
     <div class="price"> <span>3000</span>  1200 </div>
   <a href="#">Enroll</a>
      </div>
      </div>
     <div class="selling13">
          <div class="sell-title">
          <a href="#">ICDL V5: International Computer Driving License Version 5.0</a>
       </div>
           <div class="sell-hour">
             <div>professional</div>
          <div class="hour"><i class="lar la-clock"></i>72 hours</div>
           </div>
          <div class="sell-price">
           <div class="price"> <span>2600</span>  1050 </div>
          <a href="#">Enroll</a>
           </div>
          </div>
         <div class="selling14">
         <div class="sell-title">
           <a href="#">MCSA: Windows Server 2016</a>
               </div>
               <div class="sell-hour">
               <div>professional</div>
              <div class="hour"><i class="lar la-clock"></i>132 hours</div>
             </div>
              <div class="sell-price">
              <div class="price"> <span>8000</span>  3200 </div>
              <a href="#">Enroll</a>
              </div>
               </div>
               <div class="selling14">
               <div class="sell-title">
              <a href="#">CCNA: Cisco Certified Network Associate Routing and Switching</a>
              </div>
               <div class="sell-hour">
               <div>professional</div>
              <div class="hour"><i class="lar la-clock"></i>84 hours</div>
                </div>
                    <div class="sell-price">
                     <div class="price"> <span>3900</span>  1550 </div>
                   <a href="#">Enroll</a>
              </div>
           </div>
       </div>
       <div class="button-category">
        <a class="btn btn-outline-success my-2 my-sm-0" href="#">browse all Most Selling Courses </a>
      </div>
   
  </div>
</div>

<!---------------------end section Most Selling Courses----->
<!------------START section Why Study with YAT?------------->
<div class="section">
  <div class="topwhy">
    <div class="why-head">
      <span>why choose us</span>
      <h2>Why Study with YAT?</h2>
       <!----title line------->
       <div class= "ftran1">
        <div class="small1"></div>
      </div>
       </div>
    <div class="why-body">
      <div class="why-reason1">
        <div class="why-img">
          <img src="image/best.jpg" class="" >
        </div>
          <div class="why-text">
            <div>أفضل محاضرين متخصصين ومعتمدين</div>
            <div>The best specialized and certified instructors</div>
          </div>
        </div>
    
    <div class="why-reason2">
      <div class="why-img">
        <img src="image/get.png" class="" >
      </div>
        <div class="why-text">
          <div>الحصول على شهادة المورد المعتمدة دوليا</div>
          <div>Obtaining an internationally accredited supplier certificate</div>
        </div>
      </div>
  
  <div class="why-reason3">
    <div class="why-img">
      <img src="image/cert.jpg" class="" >
    </div>
      <div class="why-text">
        <div>الحصول على شهادة يات بخبرة 25 عام</div>
        <div>Get a YAT certificate with 25 years of experience</div>
      </div>
    </div>

 <div class="why-reason4">
  <div class="why-img">
    <img src="image/pract.png" class="" >
  </div>
    <div class="why-text">
      <div>تطبيق عملي خلال وبعد المحاضرة</div>
      <div>Practical application during and after the lecture</div>
    </div>
  </div>

  <div class="why-reason5">
  <div class="why-img">
    <img src="image/get.png" class="" >
  </div>
    <div class="why-text">
      <div>توافر أكثر من طريقة دفع من المنزل</div>
      <div>More than one home payment method is available</div>
    </div>
  </div>

    <div class="why-reason6">
  <div class="why-img">
    <img src="image/study.jpg" class="" >
   </div>
    <div class="why-text">
      <div>دراسة تفاعلية بتواصل لحظي مع المحاضر</div>
      <div>Interactive study with real-time communication with the instructore </div>
    </div>
  </div>
  <div class="why-reason7">
    <div class="why-img">
      <img src="image/book.jpg" class="" >
     </div>
      <div class="why-text">
        <div>كتاب الكتروني مع الدورة كمرجع</div>
        <div>An electronic book with the course as a reference</div>
      </div>
    </div>
    <div class="why-reason8">
      <div class="why-img">
        <img src="image/book.jpg" class="" >
       </div>
        <div class="why-text">
          <div>منهج تدريبي موثق ومعتمد دوليا</div>
          <div>An internationally documented and approved training curriculum</div>
        </div>
      </div>
      <div class="why-reason9">
        <div class="why-img">
          <img src="image/study.jpg" class="" >
         </div>
          <div class="why-text">
            <div>منهج تدريبي موثق ومعتمد دوليا</div>
            <div></div>
          </div>
        </div>
      </div>
  </div>
</div>
<!------------end section why study with yat------------>
<!----------start section numbers--------------->
<div class="section">
  <div class="numbers">
    <div class="number1">
      <span id="count1" class="counter" >500,000</span><span>+</span>
      <p> satisfied trainees </p>
    </div>
    <div class="number2">
      <span class="counter" >1,000,000</span><span>+</span>
      <p>attended courses</p>
    </div>
    <div class="number3">
      <span class="counter">3,000</span><span>+</span>
      <p>corporate clients</p>
    </div>
    <div class="number4">
      <span class="counter" >25</span><span>+</span>
      <p>years of experience </p>
    </div>

  </div>
</div>  
<!------------start section partners------------------->
<div class="section">
  <div class="toppart">
    <div class="part-head">
      <span>our partners</span>
      <h2>our partners</h2>
       <!----title line------->
       <div class= "ftran1">
        <div class="small1"></div>
      </div>
    </div>
  <div class="part-body">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <a href="#">
            <img src="image/partner/mic.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/ora.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/com.png">
          </a>
          </div>
          <div class="item imgheigh">
            <a href="#">
            <img  src="image/partner/ciw.png">
          </a>
          </div>
          <div class="item imgheigh">
            <a href="#">
            <img  src="image/partner/cis.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/aut.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/ado.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/cor.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/icdl.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/cou.png">
          </a>
          </div>
          <div class="item">
            <a href="#">
            <img src="image/partner/pro.png">
          </a>
          </div>
          <div class=" item imgheigh">
            <a href="#">
            <img src="image/partner/per.png">
          </a>
          </div>
          <div class="item imgheigh">
            <a href="#">
            <img   src="image/partner/auth.png">
          </a>
          </div>
      </div>
    </div>
 </div>
</div>
<!----------------------------footer-------------------->
<footer>
  <div class="section">
      <div class="foot-top">
        <div class="foot-content">
        <div class="divfoot">
         <h3> Learning Categories</h3>
          <!----title line------->
         <div class= "ftran">
          <div class="small"></div>
        </div>
         <ul>    
          <li> <i class="fas fa-circle"></i><a href ="#">3d Design</a></li> 
            <li><i class="fas fa-circle"></i><a href ="#">Accounting</a></li>
            <li> <i class="fas fa-circle"></i><a href ="#">Business</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Database</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Engineering</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">English</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Graphics</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Multimedia</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Network Administration</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Office</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Project Management</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Security</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Software Development</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Technical Support</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Virtualization</a></li>
            <li><i class="fas fa-circle"></i><a href ="#">Web</a></li>
        </ul> 
      
        </div>
        <div class="divfoot">
          <h3>Learning Providers</h3>
           <!----title line------->
          <div class= "ftran">
           <div class="small"></div>
         </div>
          <ul>    
             <li> <i class="fas fa-circle"></i><a href ="#">Adobe</a></li> 
             <li><i class="fas fa-circle"></i><a href ="#">Apple</a></li>
             <li> <i class="fas fa-circle"></i><a href ="#">Autodesk</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Cisco</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">CIW</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">CompTIA</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Corel</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">EC-Council</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">ECDL Foundation</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Huawei</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">IBDL</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Microsoft</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Oracle</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">VMware</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">YAT</a></li>
         </ul>  
         </div>
         <div class="divfoot">
          <h3>Learning Solutions</h3>
          <div class= "ftran">
           <div class="small"></div>
         </div>
          <ul>    
             <li> <i class="fas fa-circle"></i><a href ="#">Corporate Solutions</a></li> 
             <li> <i class="fas fa-circle"></i><a href ="#">ELearning Solutions</a></li>
             <li> <i class="fas fa-circle"></i><a href ="#">Learning Content Solutions</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Learning Methods</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Learning Projects </a></li>
             
         </ul>  
         </div>
         <div class="divfoot">
          <h3>Support</h3>
        <!----title line------->
          <div class= "ftran">
           <div class="small"></div>
         </div>
          <ul>    
             <li><i class="fas fa-circle"></i> <a href ="inquiry.php">Inquiries</a></li> 
             <li><i class="fas fa-circle"></i><a href ="login.php"> Complains</a></li>
             <li><i class="fas fa-circle"></i> <a href ="#">FAQ</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Contact Us </a></li>
         </ul>  
         </div>
         <div class="divfoot">
          <h3>About YAT</h3>
           <!----title line------->
          <div class= "ftran">
           <div class="small"></div>
         </div>
          <ul>    
             <li><i class="fas fa-circle"></i> <a href ="#">Company Profile</a></li> 
             <li><i class="fas fa-circle"></i><a href ="partners.php"> Partners & Accreditations</a></li>
             <li><i class="fas fa-circle"></i> <a href ="#">Clients Sample</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Facilities</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Photo Gallery </a></li>
             <li><i class="fas fa-circle"></i><a href ="#">News</a></li>
             <li><i class="fas fa-circle"></i><a href ="#">Careers @ YAT </a></li>
         </ul>  
         </div>
      </div>
     </div> 
   <!--------------------footer bottom----------------->
    <div class="foot-bottom">
      <div class="content">
        <div class="footlogo">
          <img src="image/logo2.png" alt="Yat Logo">
        </div>
       <div class="foot-text">
        <span>
          All contents copyright 2020 YAT, Inc. All rights reserved 
          </span>
          <div class="text-link">
          <a href="#">Terms & Conditions</a>
          <a href="#">Privacy Statement</a>
        </div>
       </div>
       <div class="foot-links">
        <a href="http://www.facebook.com/pages/YAT-Learning-Centers/163119337036828"   target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/#!/YATlearning"  target="_blank"> 
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/yat_learning_centers/"  target="_blank">
          <i class="fab fa-instagram"></i> 
        </a>
        <a href="http://www.linkedin.com/company/1240262?trk=tyah"  target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
       </div>

       <div class="up" id="goup">
         <a href="#"><i class="las la-angle-up"></i></a>
       </div>
    </div>
  </div>
</div>
</footer>

    <script src="js/script.js"></script>
    <script type="text/javascript">
    $('.counter').counterUp();

  
    </script>
</body>
</html>