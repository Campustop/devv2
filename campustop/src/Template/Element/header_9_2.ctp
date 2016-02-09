<style type="text/css">

  #social img {
   margin-bottom:14px;
}
#password {
    padding: 10px;
   
    margin: 0 0 10px;
}
#password1 {
    padding: 10px;
   
    margin: 0 0 10px;
}

div.pass-container {
    height: 30px;
}

div.pass-bar {
    height: 11px;
    margin-top: 2px;
}
div.pass-hint {
    font-family: arial;
    font-size: 11px;
}
.text-center {
text-align:center;
}
.dropdown:hover .dropdown-menu {
    display: block;
}
.dropdown-menu::before {
    border-bottom: 21px solid;
    border-left: 17px solid transparent;
    border-right: 18px solid transparent;
    color: #ffc400;
    content: "";
    display: inline-block;
    left: 141px;
    position: inherit;
    top: -21px;
    width: 33px;
}
*::after, *::before {
    box-sizing: border-box;
}
.small-text
{
  font-size: 12px;
}
.search { position: relative; }
.search input { text-indent: 20px;}
.search .icon-email5 { 
  position: absolute;
  top: 13px;
  left: 7px;
  font-size: 15px;
}
.search .icon-lock-stroke { 
  position: absolute;
  top: 13px;
  left: 7px;
  font-size: 15px;
}
.dropdown-menu::after {
  color: #ffc400;
    border-bottom: 6px solid white;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    content: "";
    display: inline-block;
    height: 42px;
    left: 10px;
    position: absolute;
    top: -6px;
}
  .caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-bottom: 4px solid #000000;
  border-left: 4px solid transparent;
  border-top: 0 dotted;
  border-right: 4px solid transparent;
  content: "";
}
</style>

<header id="sticker" class="sticky-navigation">
      <!-- Sticky Menu -->
            <div class="sticky-menu relative">
        <!-- navbar -->
        <div class="navbar navbar-default navbar-bg-light" role="navigation">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="navbar-header">
                <!-- Button For Responsive toggle -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span></button> 
                <!-- Logo -->
                 
                <a class="navbar-brand" href="<?= SITEURL; ?>home">
                  <img class="site_logo" alt="Site Logo" src="<?= SITEURL; ?>webroot/img/logo_big.jpg" />
                </a></div>
                <!-- Navbar Collapse -->
                <div class="navbar-collapse collapse">
                  <!-- nav -->
                   <ul class="nav navbar-nav">
                    <!-- Home  Mega Menu -->
                  <li class="mega-menu">
                      <a href="<?= SITEURL; ?>home#who-we-are">About</a>
                    </li>
                    <!-- Mega Menu Ends -->
                    <!-- Pages Mega Menu -->
                    <li class="mega-menu">
                      <a href="<?= SITEURL; ?>home#process">How it Works</a>
                    </li>
                    <!-- Pages Menu Ends -->
                    <!-- Portfolio Menu -->
                    <li class="mega-menu">
                      <a href="<?= SITEURL; ?>notelist">Notes</a>
                    </li>
                    <li class="mega-menu">
                      <a href="#">Market</a>
                    </li>
                    <li class="mega-menu">
                      <a href="#">Forum</a>
                    </li>
                    <li class="mega-menu">
                      <a href="<?= SITEURL; ?>contact">Contact</a>
                    </li>
                    <?php if($user['user_id']=="")
                                {?>
                    <li class="dropdown " id="menuLogin">
                       <a class="dropdown-toggle" href="#loginmenu" data-toggle="dropdown" id="loginmenu">Login</a>
                          <div class="dropdown-menu" style="padding:17px;min-width: 300px;max-width: 400px;left: -180%;" >
                                
                               
                                  <?php // echo $this->Form->create('user',['name'=>'loginform','id'=>'loginform','controller' => 'home','action' => 'login'] ); ?>
                               <form id="loginform" action="" method="post" name="loginform" role="form">
                                           
                                            <h3 class="title" style="font-size:12px bold;text-align:center">Login</br>
                                            <div id="loginerrormessage" class='alert alert-warning' style="display:none">
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                              <label style="font-size:12px bold;text-align:center"> Invalid username or password, try again .</label>
                                            </div>
                                            <span class="small-text"> You already have an account ? Great !Login Here</span> </h3>
                                         
                                          
                                                <div class="input-email search">
                                                  <span class="fa icon-email5"></span>
                                                  <input placeholder="Email" type="text" class="form-control" id="username" name="username" style="min-height:0px" value="<?php if($cookie['username']!=""){ echo $cookie['username'];}?>">
                                                </div>
                                                <div class="input-email search">
                                                      
                                                      <span class="fa icon-lock-stroke"></span>
                                                      <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" style="min-height:0px" value="<?php if($cookie['password']!=""){ echo $cookie['password']; }?>" />
                                                </div>
                                                <div class="input-checkbox">
                                                            <input type="checkbox" id="optradio"  name="remember" class="required" value="1" />
                                                           <span class="small-text">Remember me</span>
                                                </div>
                                                <div class="clearfix"></div>

                                                <input type="button" id="optradio"  name="remember" class="myButton hvr-grow small-text" value="Login" />
                                                <div  class="text-center">
                                                    <span class="pull-left small-text text-center" style="margin-top:15px; text-align:center;">
                                                    Forgot Password? Its Ok! <a href="#" class="text-color"><u> RECOVER HERE </u></a>
                                                  </span> 
                                                </div>
                                     
                                    </form>
                                    <div id="social" style="margin-top:80px">
                                            <img class="" src="<?=SITEURL; ?>webroot/img/facebook.jpg" alt="" >
                                            <img class="" src="<?=SITEURL; ?>webroot/img/google.jpg" alt="">
                                            <img class="" src="<?=SITEURL; ?>webroot/img/linkedin.jpg" alt="">
                                    </div>  
                                    <span class="small-text"  style="margin-top:15px; text-align:center;">
                                        Don't have an account! <a href="<?= SITEURL; ?>register" class="text-color"><u> REGISTER NOW </u></a>
                                    </span>   
                               </div>
                    </li>
                    <li class="hidden-767">
                      <a href="<?= SITEURL; ?>register" class="text-color"><button class="sample btn mybutton custom large b" data-h="36" data-s="100" data-l="50" ,="" data-p="10" style="background-color: #ffc400;">Register Now</button></a>
                    </li>
                    <?php }
                    else
                    {?>

                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                               <?php 
                                  $userpic = $this->request->session()->read('userpic1');
                                 /// pr($this->request->session()->read('Auth.User.name'));

                                  if (isset($userpic)) {
                                    ?>
                                  <img src="<?= SITEURL; ?>webroot/img/uploads/profilepic/<?=$userpic ?>" width="70px" height="30px"alt="" style="border-radius: 50%;border:1px;  border-color: red;">
                                  <?php
                                    } else {
                                      ?>
                                  <img src="<?= SITEURL; ?>webroot/img/profile_image.jpg" width="70px" height="30px"alt="" style="border-radius: 50%;border:1px;  border-color: red;" >
                                  <?php
                                  }
                                   
                                  ?>
                          </a>


                          <ul class="dropdown-menu dropdown-user">
                           <li><a href="<?= SITEURL; ?>profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                              </li>
                              
                              <li class="divider"></li>
                              <li><a href="<?php echo $this->Url->build(['controller' => 'Home', 'action' => 'logout']); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                              </li>
                          </ul>
                          <!-- /.dropdown-user -->
                      </li class="mega-menu">
                      <li><span style="font-size:12px"><?php echo $user['fname']." ".$user['lname']?></span></li>
                   <?php  }
                    ?>
                  </ul>
                  <!-- Right nav -->
                  <!-- Header Contact Content -->
                  <div class="bg-white hide-show-content no-display header-contact-content">
                    <p class="vertically-absolute-middle">Call Us 
                    <strong>+0 (123) 456 78 90</strong></p>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Contact Content -->
                  <!-- Header Search Content -->
                  <div class="bg-white hide-show-content no-display header-search-content">
                    <form role="search" class="navbar-form vertically-absolute-middle">
                      <div class="form-group">
                        <input type="text" placeholder="Enter your text &amp; Search Here" class="form-control" id="s" name="s" value="" />
                      </div>
                    </form>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Search Content -->
                  <!-- Header Share Content -->
                  <div class="bg-white hide-show-content no-display header-share-content">
                    <div class="vertically-absolute-middle social-icon gray-bg icons-circle i-3x">
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a> 
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a> 
                    <a href="#">
                      <i class="fa fa-pinterest"></i>
                    </a> 
                    <a href="#">
                      <i class="fa fa-google"></i>
                    </a> 
                    <a href="#">
                      <i class="fa fa-linkedin"></i>
                    </a></div>
                    <button class="close">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- Header Share Content -->
                </div>
                <!-- /.navbar-collapse -->
              </div>
              <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- navbar -->
      </div>
       <!-- Sticky Menu -->
    </header>

 <script type="text/javascript">
    $(document).ready(function(){
 
    $('#loginform').on('click', function() 
    {  
        

              var form = $('#loginform');
            
              $.ajax({
               type:"POST",
               url:"<?php echo SITEURL.'home/login';?>",
               data:  form.serialize(),
               success: function(data)
               {
                    if(data=="yes")
                    {
                      window.location="<?php echo SITEURL.'home';?>"

                    }
                    else
                    {
                      
                      $('#loginerrormessage').show();
                     $('.form-control').val('');
                     
                    }
                 
               }
              });
    });
});
</script>