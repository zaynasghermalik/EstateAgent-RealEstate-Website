<!DOCTYPE html>
<html>
  <head>
    <title>Seller Data Input</title>  
    <style>
        body{
          margin-left: 25%;
          margin-right: 25%;
          margin-top: 3%;
          background-color: rgb(52, 194, 199);
          background: url({{ URL::asset('sel3.png') }}) no-repeat center center fixed;
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
            width: 80%;
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

<h1 style="color:blue; text-align: center; border:5px solid red;  ";>Sellers Data Input</h1>


<form action="{{route ('seller.store')}}" method="post">
  @csrf
  <fieldset>

  <label for="cnic">Seller CNIC:</label>
    <input class="UserInput" type="text" id="cnic" name="cnic"  placeholder="Enter Seller CNIC" size="30px"><br><br>
    <label for="name">Seller Name:</label>
    <input class="UserInput" type="text" id="name" name="name"  placeholder="Enter Seller Name" size="30px"><br><br>
    <label for="contact_no">Contact No.:</label>
    <input class="UserInput" type="text" id="contact_no" name="contact_no"  placeholder="Enter Contact No of Seller" size="30px"><br><br>

    <label for="is_owner">Is_Owner:&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Yes<input type="radio" name="is_owner" value="Yes" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    No<input type="radio" name="is_owner" value="No" /><br><br>

    <input type="submit" value="Add" class="addButton"> 

  </fieldset>
</form>


</body>
</html>

