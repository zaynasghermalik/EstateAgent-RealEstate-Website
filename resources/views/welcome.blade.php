<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>  
    <style>
        body{
          margin-left: 3%;
          margin-right: 3%;
          margin-top: 3%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('house6.png') }}) no-repeat center center fixed;
          background-size: 100%;
        }
        fieldset{
            text-align: center;
          width: 20%;
          background-color: rgb(211, 211, 211);
          padding: 60px;
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        h1{
          width: 70%;
          color:blue; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
          
        }
        label{
            height: 30px;
            width: 80%;
            font-size: 18px;
        }
        a{
          color: white;
        }
        .button {
          background-color: #4CAF50; /* Green */
          border: none;
          width:80%;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
        }
        .button2 {
            background-color: #e6e6e6; 
            border:2px solid rgb(149, 134, 134);
            width: 13%;
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

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

    </style>
  </head>
<body>
  <a href="{{ route('user.login') }}"><button class="button2" >User Login</button></a>
  <a href="{{ route('user.register') }}" ><button class="button2" >Register</button></a>
  <h1>Property Management System</h1>

  <br><br>
  <h2 style="color:yellow; margin-left:9%; font-size:200%;">Welcome to Real Estate</h2>
  <p style="color:white; margin-left:1%; margin-right:55%; font-size:150%;">If you are searching for a property and want to checkout market prices of lands/houses in different place...then you are on a right platform. Real Estate price predictor estimates the approximate market price for you.</p>

  <p style="color:yellow; margin-left:1%; margin-right:30%; font-size:150%;">Please Login or Register to get Start......!</p>

  <br><br>
  <p style="color:yellow; margin-left:1%; margin-right:30%; font-size:150%;">Login as an Admin to Manage all Data.</p> 
  <a href="{{ route('admin.login') }}"><button class="button2" style="float: left; margin-left:5%; width:200px;" >Admin Login</button></a>
  <a href="{{ route('admin.register') }}"><button class="button2" style="float: left; margin-left:5%; width:200px;" >Admin Register</button></a>
</body>
</html>

