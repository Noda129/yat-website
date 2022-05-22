<?PHP 
session_start();
?>
<?php
include "conect.php";
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
    <link rel="stylesheet" href="css/style-log.css">
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
          <a href="login.php"  >Login</a>
        </div>
    </div>
<!------end top-right  -------------->
 </div>
<!----------end header top section---------->
 <div id="scroll">
      <nav class="header-nav">
          <div class="logo">
            <a class="img" href="mainyat.php">
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
                 
               
                  <a  href="#">adobe</a>
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
                 
                 
                  <a  href="#">Inquiries</a>
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
                  <a  href="#"> Partners & Accreditations</a>
                  <a  href="#">Sample Of Our Clients</a> 
                  <a  href="#">Facilities</a>
                  <a  href="#"> Photo Gallery</a>
                  <a  href="#"> News</a>
                  <a  href="#"> Careers @ YAT</a>
                </div>
              </div>
            </div>
                <div class="form2">
              
                <a class="btn  btn-outline-success my-2 my-sm-0" href="register.php">
                 register
                </a>
               </div>
        
       </nav>
  </div>
      
</header>
<!-----------------------end header---------------------->

<!------------------section1-------------->
<div class="section">
  <div class="back">
    <div class="log-title">Add Inquiry</div>
  </div>
</div>
<!------------------end  section1------------>
<div class="section">
  <div class="main-inquiry">
      <form action="" method="POST">
        <div class="inq-title">
            <label class="label-text">
             Title
              <span class="astris">*</span>
            </label>
            <div class="inputtitle">
            <div class="beg"></div>
            <input type="text" name="title" placeholder="Enter Title For Your Inquiry" autocomplete="off">
           </div>
        </div>
          <div class="user">
           <label class="label-text">
            Name 
           <span class="astris">*</span>
           </label>
           <div class="inputname">
            <div class="la la-user input-icon"></div>
          <input type="text" name="username" placeholder="Enter Your Name" autocomplete="off">
          </div>
          </div>
        <div class="inq-email">
        <label class="label-text">
          Email 
          <span class="astris">*</span>
        </label>
      
        <div class="inputemail">
          <div class="la la-envelope input-icon"></div>
        <input type="email" name="mail" placeholder=" Enter Your Email Address" autocomplete="off">
       </div>
      </div>
      <div class="inq-phone">
      <div class="inq-num">
        <label class="label-text">
        Tel
        <span class="astris">*</span>
        </label>
        <div class="inputtel">
         <div class="la la-phone input-icon"></div>
       <input type="number" name="tphone" placeholder="Phone number" >
       </div>
       </div>
       <div class="inq-num">
       <label class="label-text">
       Mobile
       <span class="astris">*</span>
       </label>
       <div class="inputtel">
        <div class="la la-phone input-icon"></div>
      <input type="number" name="mphone" placeholder="Phone number" >
      </div>
      </div>
    </div>
      <div class="inq-des">  
      <label class="label-text">
        Description
        <span class="astris">*</span>
      </label>
      
      <textarea name="textarea" ></textarea>
      </div>
      <div class="bott">
       <div class="btn-box">
        <input type="submit" value="Submit">
       </div>
      </div>
    </form>
    <?php
    if( $_SERVER['REQUEST_METHOD'] == "POST"){
          $inqtitle = trim($_POST['title']);
          $username = trim($_POST['username']);
          $email = trim($_POST['mail']);
          $telenum = trim($_POST['tphone']);
          $mobilenum = trim($_POST['mphone']); 
          $inqdescrp = trim($_POST['textarea']);       
           $sql = $conn ->prepare("INSERT INTO inquiry(inq_title,inq_user_name,inq_user_email,inq_user_tel,inq_user_mobile,inq_description)
            VALUES (?,?,?,?,?,?)");
           $sql->execute([ $inqtitle,$username,$email, $telenum,$mobilenum,$inqdescrp]);
          
          if( empty($_POST['title'])||empty($_POST['username'])||empty($_POST['mail'])||empty($_POST['tphone'])|| empty($_POST['mphone'])||empty($_POST['textarea'])){
            echo "<script>alert('Enter Your Inquiry Data To Send');
             </script>";
          }
      
         }
     ?>
  </div>
</div>
<!------------------------------------------end log section--------------->
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
             <li><i class="fas fa-circle"></i> <a href ="#">Inquiries</a></li> 
             <li><i class="fas fa-circle"></i><a href ="#"> Complains</a></li>
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
             <li><i class="fas fa-circle"></i><a href ="#"> Partners & Accreditations</a></li>
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
</body>
</html>