<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
ss">
    <title>Sellers Data</title>
    <style>
        body{
          margin-left: 15%;
          margin-right: 15%;
          margin-top: 5%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('sel.png') }}) no-repeat center center fixed;
          background-size: 100%;
        }
        fieldset{
          background-color: rgb(211, 211, 211);
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
    <h1>Sellers Data</h1>
<fieldset>
<table>
            <tr>
                <th>Seller CNIC</th>
                <th>Seller Name</th>
                <th>Contact Number</th>
                <th>Is_Owner</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            @foreach ($sellers ?? '' as $seller)
            <tr>
                <td>{{$seller->cnic}}</td>
                <td>{{$seller->name}}</td>
                <td>{{$seller->contact_no}}</td>
                <td>{{$seller->is_owner}} </td>
                <td>
                    <a href="{{URL::to('seller/update', $seller->id)}}" title="Edit -> {{$seller->name}}"><i class="fa fa-edit"></i>Update </a>       
                </td>
                <td>
                    <a href="{{URL::to('seller/delete', $seller->id)}}" onclick="return confirm ('Are you sure to delete the seller {{$seller->name}} having ID {{$seller->id}}?')" title="Delete -> {{$seller->id}}"><i class="fa fa-trash"></i>DELETE</a>
                </td>    
            </tr>
            @endforeach

</table>
</fieldset>
</body>
</html>