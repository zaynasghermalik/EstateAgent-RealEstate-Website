<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body{
          margin-left: 25%;
          margin-right: 3%;
          margin-top: 3%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('5.png') }}) no-repeat center center fixed;
          background-size: 100%;
        }
        fieldset{
          background-color: rgb(233, 232, 232);
          padding: 20px;
          padding-left: 45px;
          width:60%;
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        h1{
          color:blue; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
          
        }
        .head{
          color:blue; width:30%; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        label{
            height: 30px;
            width: 80%;
            font-size: 18px;
        }
        .Content{
            height: 200px;
            width: 93%;
            border-radius: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #eeeeee;

        }
        .UserInput{
            height: 30px;
            width: 70%;
            border-radius: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #eeeeee;
        }
        .addButton{
            margin-left: 74%;
            width: 20%;
            height: 40px; 
            background-color: rgb(95, 163, 27); 
            font-size: larger; 
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
            padding: 8px;
            border-radius: 5px;
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
    </style>
</head>
<body>
<a href="http://127.0.0.1:8000/"><button class="button2" >Home</button></a>
<form action="{{ route('user.check') }}" method="post">
    @csrf
  <fieldset>
    @if(Session::get('fail'))
       <div style="color: red;" class="alert alert-danger">
          Note:: {{ Session::get('fail') }}
       </div>
    @endif
    <center><h1 class="head"><b>User Login</b></h1></center><br>

    <label for="email"><b>Email Address:</b></label>
    <input class="UserInput" type="text" id="email" name="email"  placeholder="Enter your Email" value="{{ old('email') }}" size="30px"><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('email'){{ $message }} @enderror</span><br><br>
    
    <label for="password"><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input class="UserInput" type="password" id="password" name="password"  placeholder="Enter Password" size="30px"><br>
    <span style="margin-left: 20%; color: red;" class="text-danger">@error('password'){{ $message }} @enderror</span><br><br>
    
    <input type="submit" value="Log In" class="addButton"> 
    <br>
    <a href="{{ route('user.register') }}">I don't have an account, create new</a>
  </fieldset>
</form>
</body>
</html>