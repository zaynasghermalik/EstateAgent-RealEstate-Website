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
    <title>Houses Data</title>
    <style>
        body{
          margin-left: 15%;
          margin-right: 15%;
          margin-top: 5%;
          background: url({{ URL::asset('house2.png') }}) no-repeat center center fixed;
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
    <h1>Houses Data</h1>
<fieldset>
<table>
            <tr>
                <th>House Number</th>
                <th>House Type</th>
                <th>Area(Marla)</th>
                <th>Floors</th>
                <th>Bed Rooms</th>
                <th>Price</th>
                <th>Seller Name</th>
                <th>Is Owner</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            @foreach ($houses ?? '' as $house)
            <tr>
                <td>{{$house->house_no}}</td>
                <td>{{$house->type}}</td>
                <td>{{$house->marla}}</td>
                <td>{{$house->floors}}</td>
                <td>{{$house->bedrooms}}</td>
                <td>{{$house->price}} </td>
                <td>{{$house->seller->name}}</td>
                <td>{{$house->seller->is_owner}}</td> 
                <td>
                    <a href="{{URL::to('house/update', $house->id)}}" title="Edit -> {{$house->house_no}}"><i class="fa fa-edit"></i>Update </a>       
                </td>
                <td>
                    <a href="{{URL::to('house/delete', $house->id)}}" onclick="return confirm ('Are you sure to delete the house {{$house->house_no}} having ID {{$house->id}}?')" title="Delete -> {{$house->id}}"><i class="fa fa-trash"></i>DELETE</a>
                </td>  
            </tr>
            @endforeach
</table>
</fieldset>
</body>
</html>