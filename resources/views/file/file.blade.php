<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
    <title>Files</title>
    <style>
        body{
          margin-left: 15%;
          margin-right: 15%;
          margin-top: 5%;
          background: url({{ URL::asset('5.png') }}) no-repeat fixed;
          background-size: 100%; 
        }
        fieldset{
            background-color: rgb(235, 235, 235);
          padding: 30px;
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
            color: yellow;
            text-align:center;
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
<fieldset>
        <div><center><h1>Files list</h1></center></div>
          
        <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>File Name</th>
                            <th>Download file</th>
                            <th>Delete file</th>
                        </tr>
                        @forelse ($files as $file)
                            <tr>
                                <td>{{ $file->title }}</td>
                                <td>{{ $file->cover }}</td>
                                <td><a href="{{ route('file.download', $file->uuid) }}">download</a></td>
                                <td><a  href="{{ route('file.delete', $file->id) }}">delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">No files found.</td>
                            </tr>
                        @endforelse
                    </table>
                    <a href="{{ route('file.create') }}" class="btn btn-primary">Add new File</a>
    </fieldset>
</body>
</html>