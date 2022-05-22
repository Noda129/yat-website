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
    <script src="boot/jquery-3.5.1.js"></script>
    <script src="boot/js/bootstrap.js"></script>
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
 
       <div class="top-left">
         <a href="#">Contact Us</a>
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
            <a class="img" href="#">
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
                   <a href="#"><i class="las la-search"></i></a> 
                 </div>
               <div class="in-search">
                <input class="in-search" type="search" placeholder="  Search for Courses" >
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
                  <a  href="login.php">Complains</a>
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
                  <a  href="pages/partners.php"> Partners & Accreditations</a>
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
