<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <style>
        body{
          margin-left: 25%;
          margin-right: 25%;
          margin-top: 3%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('5.png') }}) no-repeat center center fixed;
          background-size: 100%;
        }
        fieldset{
          background-color: rgb(211, 211, 211);
          padding: 20px;
          padding-left: 45px;
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
            width: 80%;
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
    </style>
</head>
<body>
@if(session()->has('message'))
    <div style="color:yellow" class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



<form action="{{ route('send.email') }}" method="post" enctype="multipart/form-data">
  @csrf
  <fieldset>
    <center><h1 class="head"><b>Email</b></h1></center><br>

    <label for="inputEmail"><b>To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input class="UserInput" type="text" id="email" name="email"  placeholder="Enter Reciever Email" size="30px"><br><br>

    <label for="inputSubject"><b>Subject:</b></label>
    <input class="UserInput" type="text" id="subject" name="subject"  placeholder="Enter Subject" size="30px"><br><br>
    
    <label for="inputMessage"><b>Body:</b></label>
    <textarea class="Content" row="5" type="text" id="content" name="content" placeholder="Enter Your Message" size="30px"></textarea><br><br>

    <label ><b>Attach File:&nbsp;</b></label>
    <input type="file" id="attach" name="attach" />

    <input type="submit" value="Send" class="addButton"> 

  </fieldset>
</form>
</body>
</html>