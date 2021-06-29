<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="insert.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>Roll No :</td>
    <td><input type="text" name="rollno" required></td>
   </tr>
   <tr>
   <td>Date :</td>
    <td><input type="text" name="Date" required></td>
   </tr> 
   <tr>
    <td>Attendence :</td>
    <td>
     <input type="radio" name="Attendence" value="p" required>Present
     <input type="radio" name="Attendence" value="a" required>Absent
    </td>
   </tr>
   <tr>        
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>