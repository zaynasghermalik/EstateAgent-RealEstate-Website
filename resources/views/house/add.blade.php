<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Houses Data Entry</title>  
    <style>
        body{
          margin-left: 25%;
          margin-right: 25%;
          margin-top: 3%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('house1.png') }}) no-repeat center center fixed;
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

    </style>
  </head>
<body>

<h1>Houses Data Input</h1>


<form action="{{route ('house.store')}}" method="post">
  @csrf
  <fieldset>
  <label for="house_no"><b>House No:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="UserInput" type="text" id="house_no" name="house_no"  placeholder="Enter House Number" size="30px"><br><br>
    
    <label for="type"><b>House Type:</b>&nbsp;&nbsp;</label>
    <select class="UserInput" id="dropdown" name="type" style="width: 76%; height: 43px;">
         <option value="Simple">
         Simple 
       </option>
       <option value="Furnished">
       Furnished
       </option>
       <option value=" Apartment">
       Apartment
       </option>
       <option value=" Farm House">
       Farm House
       </option>
       <option value=" Villa">
       Villa
       </option>
       <option value=" Flat">
       Flat
       </option>
   </select>
   <br><br>
   
    <label for="marla"><b>Marla:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input class="UserInput" type="text" id="marla" name="marla" placeholder="Enter Area Size of House" size="30px"  ><br><br>

    <label for="floors"><b>Floors:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input class="UserInput" type="text" id="floors" name="floors" placeholder="Enter Number of Floors" size="30px"  ><br><br>

    <label for="bedrooms"><b>Bed Rooms:&nbsp;&nbsp; </b> </label>
    <input class="UserInput" type="text" id="bedrooms" name="bedrooms" placeholder="Enter Number of Bed Rooms" size="30px"  ><br><br>

    <label for="price"><b>Price:</b>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class="UserInput" type="text" id="price" name="price"  placeholder="Enter Price Value(In lacs) e.g 99" size="30px"><br><br>
    <br>

    <label for="seller"><b>Seller:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select class="UserInput" id="dropdown" name="seller" style="width: 77%; height: 43px;">
      @foreach($sellers as $seller)
        <option value="{{$seller->id}}">
          {{$seller->name}}
        </option>
      @endforeach
    </select>
    <br><br>

    @if (session('status'))
    <div style="color:blue" class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ session('status') }}
    </div>
    @endif

    <input type="submit" value="Add" class="addButton"> 

  </fieldset>
</form>


</body>
</html>

