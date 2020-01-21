<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Care Tree</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="js/all.min.js"></script>

</head>
<?php include_once 'p_connection.php'; ?>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="hello">
                <img src="img/caretree.png">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#home"><i class="fas fa-home fa-fw"></i>Home</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-tree fa-fw"></i>Request for Tree</a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-angellist fa-fw"></i>We Care</a>
                </li>
                <li>
                    <a href="#rescue"><i class="fas fa-map-pin fa-fw"></i>Rescue</a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-centos fa-fw"></i>NGOs</a>
                </li>
                <li>
                    <a href="#myaccount" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user-alt fa-fw"></i>My Account</a>
                    <ul class="collapse list-unstyled" id="myaccount">
                        <li>
                            <a href="#myorders">My Orders</a>
                        </li>
                        <li>
                            <a href="#myprofile">My Profile</a>
                        </li>
                        <li>
                            <a href="#logout">Logout</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-star-of-life fa-fw"></i>Aim</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-address-card fa-fw"></i>About Us</a>
                </li>
            </ul>
<!-- 
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> -->
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">

                    <a id="sidebarCollapse" class="hidedesktop nav-c">
                        <i class="fas fa-align-left" style="height: 20px;"></i>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <span><img src="img/caretree.png" height="70px" width="150px"></span>

                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <button class="nav-c btn btn-outline-light btn-ct" href="#"> Request for Tree</button> 
                                <!-- <a class="nav-link" href="#"> Request for Tree</a> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">We Care</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#rescue">Rescue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NGOs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <span class="nav-c RqTree lalign btnr mr-auto" style="font-size: 20px;">CARE TREE</span>
                    <div class="ralign  ml-auto">

                        <!-- <button class="nav-c RqTree btn btn-sm btn-outline-warning" href="#"> Request for Tree</button>  -->

                        <a class="nav-c" href="#"><img src="img/bell.png"><!-- <i style="font-size: 20px" class="fa fa-bell head"></i> --><span class="nav-t badge badge-sm badge-light">9+</span></a>
                        <img src="img/line.png" style="height: 30px; padding-right: 10px">
                        <a class="nav-c" href="#"><img src="img/treecart.png"><!-- <i style="font-size: 20px" class="fa fa-shopping-cart head"></i> -->
                        <span class="nav-t badge badge-sm badge-light">9+</span></a>
                        <!-- <i class="fas fa-grip-lines-vertical nav-c" style="font-size: 20px"></i> -->
                        <!-- <a class="nav-c" href="#"><i class="far fa-user" style="font-size: 30px;"></i> </i></a> --><!-- <i class="fa fa-user-alt head" style="font-size: 20px"> -->
                    </div>
                </div>
            </nav>
            <form name="f_login" action="pages_php/p_signup.php" method="POST" onsubmit="return Js_f_login()" class="register-form">

                <div align="center">
                    <img src="img/logo.png" width="85px">
                </div>

        <div class="txtb">
          <input type="text" name="l_name">
          <span data-placeholder="Name"></span>
        </div>
        <div class="txtb">
          <input type="email" name="l_email">
          <span data-placeholder="Email"></span>
        </div>

        <div class="txtb">
          <input type="password" name="l_password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="password contain 1 small & 1 capital alphabet, 1 symbol and 1 number">
          <span data-placeholder="Password"></span>
        
        </div>
        <div class="error">hello</div>
        
        <div class="txtb">
          <input type="password" name="l_re_password">
          <span data-placeholder="Confirm Password"></span>
        </div>
        <div class="txtb">
          <input type="mobile" name="l_mobile">
          <span data-placeholder="Mobile"></span>
        </div>
        <div class="txtb1">
                
                    <!-- <optgroup label="Rajkot">                         -->
                        <?php
                         $sql= "select * from pin_code;"; 
                         $result=mysqli_query($conn,$sql);
                         echo "<select class='animationlist' name='l_area' onchange='Aj_pincode()'>";
                         echo "<option></option>";
                         while($row = mysqli_fetch_assoc($result))
                         {
                            echo "<option value=".$row['p_id'].">". $row['p_area'] ."</option>";
                         }
                            echo "</select>";
                    ?>
                    <!-- </optgroup> -->
                
          <span data-placeholder="Area"></span>
        </div>

        
        
        <input type="submit" name="login" class="logbtn" value="REGISTER">

        <div class="bottom-text">
          Already have an account? <a href="login.html"><b>LOGIN</b></a>
        </div>

      </form>
    
              
             <div id="cover" class="min-vh-100">
    <!--<div id="cover-caption">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <img src="img/logo.png" style="width:170px;height: 100px">
                    <div class="px-2">
                        <form action="" class="justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">Name</label>
                                <input type="text" class="form-control" placeholder="Jane Doe">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" class="form-control" placeholder="jane.doe@example.com">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Launch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div> 
            
            
        
        </div>

        
    </div>
<!-- <button onclick="topFunction()" id="myBtn" class="btn btn-outline-light btn-up" title="Go to top"><i class="fas fa-chevron-up"></i></button> -->
    <div class="overlay"></div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/new.js"></script>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>




<!-- Javascript -->

<script>
    // dynamic dropdown
function Aj_pincode() {
    

var ajl_area =document.forms["f_login"]["l_area"];
var xhttp2 = new XMLHttpRequest();
    xhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wAjl_pincode").innerHTML =this.responseText;
        }
    };
    xhttp2.open("GET", "page/pl_pincode.php?id="+ajl_area.value, true);
    xhttp2.send();

var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wAjl_city").innerHTML =this.responseText;
       }
    };
    xhttp.open("GET", "page/pl_city.php?id="+ajl_area.value, true);
    xhttp.send(); 


var xhttp3 = new XMLHttpRequest();
    xhttp3.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wAjl_state").innerHTML =this.responseText;
        }
    };
    xhttp3.open("GET", "page/pl_state.php?id="+ajl_area.value, true);
    xhttp3.send();

}
  
</script>

<script type="text/javascript">
$(function () {
    $("input[name=Password]").on("invalid", function () {
        this.setCustomValidity("Please enter at least 5 characters.");
    });
});

    function Js_f_login() 
    {
        alert('+++++++++++');
        if (!new RegExp(/^[A-Za-z\s]+$/).test(document.f_login.l_name.value))
            {
                document.getElementById("wJsl_name").innerHTML = "Name must be contain<br> characters and space";
                alert('----------');
                return false;
            }
            else
            {
                document.getElementById("wJsl_name").innerHTML = "";
                alert('----------');
            }

        
        if (!new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.f_login.l_email.value))
            {
                document.getElementById("wJsl_email").innerHTML = "Invalid emil id";
                return false;
            }
            else
            {
                document.getElementById("wJsl_email").innerHTML = "";
            }

        var jsl_password = document.f_login.l_password.value;
        var jsl_re_password = document.f_login.l_re_password.value;
        if (new RegExp(/[A-Za-z0-9_]\w{5,15}$/).test(jsl_password))
            {
                if (jsl_password != jsl_re_password)
                    {
                        document.getElementById("wJsl_password").innerHTML = "Password not match";
                        return false;
                    }
                    else
                    {
                        document.getElementById("wJsl_password").innerHTML = "";
                    }
            }
        else
        {
            document.getElementById("wJsl_password").innerHTML = "Password must be 6 to 15 <br>characters which contain <br>only characters, numeric <br>digits, underscore";
            return false;
        }

        if (!new RegExp(/^\d{10}$/).test(document.f_login.l_mobile.value))
            {
                document.getElementById("wJsl_mobile").innerHTML = "Enter valid phone number";
                return false;
            }
            else
            {
                document.getElementById("wJsl_mobile").innerHTML = "";
            }

        var jsl_house = document.f_login.l_house.value;
        if (jsl_house == "")
            {
                document.getElementById("wJsl_house").innerHTML = "Enter House Name <br>/ Block No.";
                return false;
            }
            else
            {
                document.getElementById("wJsl_house").innerHTML = "";
            }

        var jsl_street = document.f_login.l_street.value;
        if (jsl_street == "")
            {
                document.getElementById("wJsl_street").innerHTML = "Enter Street Name <br>Society Name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_street").innerHTML = "";
            }

        var jsl_land = document.f_login.l_land.value;
        if (jsl_land == "")
            {
                document.getElementById("wJsl_land").innerHTML = "Enter Main Road <br>/ Land Mark";
                return false;
            }
            else
            {
                document.getElementById("wJsl_land").innerHTML = "";
            }

        var jsl_area = document.f_login.l_area.value;
        if (jsl_area == "")
            {
                document.getElementById("wJsl_area").innerHTML = "select Area name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_area").innerHTML = "";
            }

        if (!new RegExp(/^\d{6}$/).test(document.f_login.l_pincode.value))
            {
                document.getElementById("wJsl_pincode").innerHTML = "Invalis Pincode";
                return false;
            }
            else
            {
                document.getElementById("wJsl_pincode").innerHTML = "";
            }

        if (!new RegExp(/^[A-Za-z]+$/).test(document.f_login.l_city.value))
            {
                document.getElementById("wJsl_city").innerHTML = "Invalid City name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_city").innerHTML = "";
            }
            // 
        if (!new RegExp(/^[A-Za-z]+$/).test(document.f_login.l_state.value))
            {
                document.getElementById("wJsl_state").innerHTML = "Invalid State name";
                return false;
            }
            else
            {
                document.getElementById("wJsl_state").innerHTML = "";
                
            }



            /*
        var jsl_birthdate = document.f_login.l_birthdate.value;
        if (jsl_birthdate == "")
            {
                document.getElementById("wJsl_birthdate").innerHTML = "enter value";
                return false;
            }
            else
            {
                document.getElementById("wJsl_birthdate").innerHTML = "";
            }*/


    }
</script>
<!-- / Javascript -->

<!-- php -->
<?php include_once 'p_connection.php'; ?>
<!-- / php -->


</body>

</html>