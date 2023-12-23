
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Main Page</title>
    <style>
        body{
          margin-left: 3%;
          margin-right: 3%;
          margin-top: 3%;
          background: url({{ URL::asset('5.png') }}) no-repeat fixed;
          background-size: 100%; 
        }
        fieldset{
          background-color: rgb(211, 211, 211);
          padding: 10px 10px 30px 30px;
          width: 40%;
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;  
        }
        
        h1{
          color:blue; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px; width: 40%;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        h2{
            color: #00b158;
        }
        #rollnumber{
            color: red;
        }
        #seller{
            margin-left: 18%;
        }
        a{
            font-size: larger; 
        }
        button{
            width: 40%;
            border-radius: 5px;
        }
        .button2 {
            background-color: #e6e6e6; 
            border:2px solid rgb(149, 134, 134);
            width: 15%;
            float: right;
            border-radius: 10px;
            color: black;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
        }
        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .topleft{
            color: white;
            position: absolute;
            top: 8px;
            left: 16px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<a href="http://127.0.0.1:8000/"><button class="button2" >Home</button></a>
    <a href="http://localhost/Land_pp/public/file/file"  target="_blank"><button class="button2" >Files</button></a>
    <a href="http://localhost/Land_pp/public/mail/mail"  target="_blank"><button class="button2" >Send Email</button></a>
    <h1><b>PROPERTY PRICE PREDICTOR</b></h1>
<fieldset>
    <h2 id="seller"><b>Plots</b></h2>
    <label>To Add Plots Data Click--> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <a href="http://localhost/Land_pp/public/plot/add"  target="_blank"><button>Create Plot</button></a><br><br>
    <label>To Show Plots Data Click-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <a href="http://localhost/Land_pp/public/plot/read" target="_blank" ><button>View Plots</button></a>

    <h2 id="seller"><b>Houses</b></h2>
    <label>To Add Houses Data Click--> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <a href="http://localhost/Land_pp/public/house/add"  target="_blank"><button>Create House</button></a><br><br>
    <label>To Show Houses Data Click-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <a href="http://localhost/Land_pp/public/house/read" target="_blank" ><button>View Houses</button></a>

    <h2 id="seller"><b>Sellers</b></h2>
    <label>To Add Sellers Data Click-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <a href="http://localhost/Land_pp/public/seller/add" target="_blank" ><button>Create Seller</button></a><br><br>
    <label>To Show Sellers Data Click-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <a href="http://localhost/Land_pp/public/seller/read"  target="_blank"><button>View Sellers</button></a>

</fieldset><br>

    <a href="{{ route('admin.logout') }}"><button class="button2" >Logout</button></a>
    <label class="topleft">Logged in as:{{ $LoggedAdminInfo['name'] }}</label>
    <a href="{{ route('admin.register') }}"  target="_blank"><button class="button2" >Create Admin</button></a>
    
</body>
</html>