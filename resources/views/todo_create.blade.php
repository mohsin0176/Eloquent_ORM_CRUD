<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<a href="todo_show">Back</a><br><br>
<table id="customers">
<form method="post" action="todo_submit">

  <table id="customers">

    <tr>
    <td>Name</td>
    <td><input type="textname" name="name" required=""></td>
    </tr>
    <tr>
    <td></td> 
    <td><input type="submit" name="submit"></td> 
    </tr>
  </table>
  
</form>       
    
</body>
</html>