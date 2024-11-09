<?php include_once("../connection.php"); 
session_start();
?>
<?php
if(isset($_SESSION['adm']))
{
  header("location:index.php");
}
?>
<?php
if(isset($_POST['btn1']))
{
  extract($_POST);
  $q2="select * from `admin` where `adminid`='$adminid' and `password`='$password'";
  $e2=mysqli_query($conn,$q2);
  if(mysqli_num_rows($e2)==0)
  {
    $msg="invalid credentials";
  }
  else
  {
    $_SESSION['adm']=$adminid;
      header("location:dashboard.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel :: Login</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

     <style>
         body {
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('assets/dist/img/login.jpg');
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
         }
         section {
            padding: 90px 0 73px;
            position: relative;
        }
        .GoBack a .fa {
            background: #fff;
            padding: 7px;
            border-radius: 5px;
            font-size: 28px;
            position: fixed;
            top: 16px;
            color: #961ca2;
        }
         .LoginBody {
            position: relative;
            top: 50px;
            right: 50px;
            /* background-image:url(assets/images/login/login-bg.png); */
            height: 100%;
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            overflow: hidden;
            z-index: 9999999;
            background-color: rgb(255 255 255 / 100%);
            padding: 38px;
            border-radius: 20px;
            box-shadow: 0px 0px 15px 0px rgb(255 255 255 / 100%);
        }
        .Login-Header h3 {
            color:#2196f3;
            font-weight: 600;
            letter-spacing: .8px;
            font-size: 33px;
            margin-top: 30px;
            margin-bottom: 15px;
            text-transform: capitalize;
            font-family: 'Josefin Sans';
        }
        .Login-Header h5 {
            color: #3f51b5;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.3px;
            margin-bottom: 42px;
            margin-top: 10px;
            font-family: 'Josefin Sans';
        }
        .Form-Group{
            display: flex;
            margin-bottom: 20px;
        }
        .Form-Group .fa {
            margin-top: 0px;
            font-size: 23px;
            color: #2196f3;
            margin-right: 10px;
            width: 20px;
            position: relative;
            bottom: -20px;
        }
        .Form-Group .form-control {
            border: none;
            border-radius: 0px;
            border-bottom: 2px solid #ddd;
            padding-left: 1px;
            box-shadow: none;
            padding-bottom: 0px;
            font-size: 17px;
            transition: .5s;
            background: transparent;
            color: #333;
            font-family: 'Poppins', sans-serif;
            height: 48px;
        }
        .Form-Group .form-control::placeholder{
            color:#333;
        }    
        .Form-Group .form-control:focus{
            border-bottom: 2px solid #2196f3;
        }    
        .LinkSwitch p {
            font-size: 15px;
            color: #9e9e9e;
            margin-bottom: 32px;
        }
        .LinkSwitch p a {
            color: #961ca2;
            font-weight: 700;
        }
        .OrText hr {
            margin-top: 0px;
            position: relative;
            top: -13px;
            border-top: 1px solid #eeeeeeab;
        }
        .fa-facebook {
            background: #304d8a;
            color: white;
        }
        .OrText span {
            background: #5e2dd8;
            padding: 3px 4px;
            position: relative;
            z-index: 999;
            border: 1px solid #fff;
            border-radius: 27px;
            font-size: 16px;
            color: #fff;
            text-transform: lowercase;
        }
        .Submit-Btnn {
            text-align: right;
            margin-top: 46px;
            margin-bottom: 7px;
        }
       .Submit-Btnn .btn {
            background: #2196f3;
            padding: 17px 50px 14px;
            border-radius: 10px;
            color: #fff;
            box-shadow: none;
            text-transform: uppercase;
            letter-spacing: .3px;
            font-size: 17px;
            transition: .5s;
            cursor: pointer;
            width: 100%;
        }
        .Submit-Btnn .btn:hover{
            background: #1781d5;
            color: #fff;
        }

        @media (min-width:200px) and (max-width:575.98px){
            .LoginBody {
                position: relative;
                top: 15px;
                left: 0px;
            }    
        }
     </style>

</head>
<body>
    

    <section class="LOgin_Sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-12 ml-auto">
                    <!-- <div class="GoBack">
                        <a href="index.php" title="Back to home">
                            <i class="fa fa-home"></i>
                        </a>
                    </div> -->
            <div class="LoginBody" id="form1">
              <div class="Login-Header">
                <h3>Welcome Back!!</h3>
                <h5>ADMIN LOGIN NOW</h5>
              </div>
              <div class="LoginForm">
                 <form autocomplete="off" action="" method="POST">  
                 <div class="Form-Group">
                  <i class="fa fa-user"></i>
                  <input type="text" class="form-control"  name="adminid"  placeholder="User name"  autocomplete="off">
                 </div>
                 <div class="Form-Group">
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
                 </div>
                 <div class="Submit-Btnn"> 
                  <button class="btn" name="btn1">Login </button>
                 </div>
                 </form>   
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
</body>
</html>