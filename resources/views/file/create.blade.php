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
          padding: 50px;
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
          color:blue; width:40%; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
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



<form action="{{ route('file.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <fieldset>
    <center><h1 class="head"><b>Upload File</b></h1></center><br>

    <label for="inputTitle"><b>Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input class="UserInput" type="text" id="title" name="title"  placeholder="Enter File Title" size="30px"><br><br>

    
    
    <label ><b>Attach File:&nbsp;</b></label>
    <input type="file" id="cover" name="cover" />

    <input type="submit" value="Upload File" class="addButton"> 

  </fieldset>
</form>
</body>
</html>