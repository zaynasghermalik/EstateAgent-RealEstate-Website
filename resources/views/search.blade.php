<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        body{
          margin-left: 15%;
          margin-right: 15%;
          margin-top: 3%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('1.png') }}) no-repeat center center fixed;
          background-size: 100%;
        }
        fieldset{
          background-color: rgb(211, 211, 211);
          padding: 60px;
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        h1{
          color:blue; text-align: center; border:5px solid red; background-color: rgb(235, 235, 235);
          border-radius: 10px;
          box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
          
        }
        label{
            height: 30px;
            width: 80%;
            font-size: 18px;
        }
        .UserInput{
            height: 30px;
            width: 75%;
            border-radius: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #eeeeee;
        }
        .addButton{
            margin-left: 80%;
            width: 20%;
            height: 40px; 
            background-color: rgb(95, 163, 27); 
            font-size: larger; 
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
            padding: 8px;
            border-radius: 5px;
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
        
    </style>
</head>
<body>
<h1>Search Plots</h1>

<form action="{{route('search.search')}}" method="post">
 
   
   @csrf 
   <fieldset>

  
  <label for="type"><b>Type</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
 
  <select class="UserInput" id="dropdown" name="type" style="width: 76%; height: 39px;">
          <option value="Comercial">
          Comercial 
        </option>
        <option value="Residential">
        Residential
        </option>
        </option>
        <option value=" Agricultural">
        Agricultural
        </option>
    </select>
 
 <br><br>
 
 
 
  <label for="Dimensions"><b>Dimensions</b>&nbsp;&nbsp;&nbsp;</label>
  <input type="text" name="Dimensions" class="UserInput" placeholder="Enter Dimensions of plot ">
  <br>
  <br>
  <label for="price"><b>Price</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" name="price" class="UserInput" placeholder="Enter price of plot ">
  <br>
  <br>
  
               
  <button  class="addButton" type="submit">SEARCH</button>
  <br>
  <br>

  </form>





  @isset($plots)

@if(count($plots) > 0)


<table>
            <tr>
                <th>Plot Number</th>
                <th>Plot Type</th>
                <th>Dimensions</th>
                <th>Price</th>
                <th>Seller Name</th>
                <th>Is Owner</th>
                <th>Contact Number</th>
            </tr>

            @foreach ($plots ?? '' as $plot)
            <tr>
                <td>{{$plot->plot_no}}</td>
                <td>{{$plot->type}}</td>
                <td>{{$plot->dimensions}}</td>
                <td>{{$plot->price}} </td>
                <td>{{$plot->seller->name}}</td>
                <td>{{$plot->seller->is_owner}}</td>
                <td>{{$plot->seller->contact_no}}</td>  
 
            </tr>
            @endforeach
            @endif

            </table>

            @endisset



            </fieldset>


</body>
</html>




