<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Plots Data</title>
    <style>
        body{
          margin-left: 15%;
          margin-right: 15%;
          margin-top: 5%;
          background: url({{ URL::asset('1.png') }}) no-repeat center center fixed;
          background-size: 100%;
        }
        fieldset{
          background-color: rgb(235, 235, 235);
          padding: 30px;
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;  
        }
        table{
            border: 4px solid black; width: 100%; 
        }
        td{
            border: 3px solid black;
            padding: 8px;
            text-align: center;
        }
        th{
            border: 3px solid black;
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #00b158;
            color: white;
        }
        h1{
          color:blue; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        

        tr:nth-child(even){background-color: #f2f2f2;}

        tr:hover {background-color: #ddd;}
    </style>
</head>
<body>
    <h1>Plots Data</h1>
<fieldset>
<table>
            <tr>
                <th>Plot Number</th>
                <th>Plot Type</th>
                <th>Dimensions</th>
                <th>Price</th>
                <th>Seller Name</th>
                <th>Is Owner</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            @foreach ($plots ?? '' as $plot)
            <tr>
                <td>{{$plot->plot_no}}</td>
                <td>{{$plot->type}}</td>
                <td>{{$plot->dimensions}}</td>
                <td>{{$plot->price}} </td>
                <td>{{$plot->seller->name}}</td>
                <td>{{$plot->seller->is_owner}}</td> 
                <td>
                    <a href="{{URL::to('plot/update', $plot->id)}}" title="Edit -> {{$plot->plot_no}}"><i class="fa fa-edit"></i>Update </a>       
                </td>
                <td>
                    <a href="{{URL::to('plot/delete', $plot->id)}}" onclick="return confirm ('Are you sure to delete the plot {{$plot->plot_no}} having ID {{$plot->id}}?')" title="Delete -> {{$plot->id}}"><i class="fa fa-trash"></i>DELETE</a>
                </td>  
            </tr>
            @endforeach
</table>
</fieldset>
</body>
</html>