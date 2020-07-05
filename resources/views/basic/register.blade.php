<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
   <h2>Buat Account Baru!</h2>
   <h4>Sign Up Form</h4>

   <!--membuat form-->
   <form action="{{ route('register.store') }}" method="POST" autocomplete="off">
    @csrf

      <label for="first_name">First name:</label><br><br>
      <input type="text" placeholder="First Name" id="first_name" name="name"><br><br>
   
      <label for id="last_name">Last name :</label><br><br>
      <input type="text" placeholder="Last Name" id="last_name:" name="last_name"><br><br>

      <label>Gender :</label><br><br>
      <input type="radio" name="jenis_kelamin" value="0" checked>Male<br>
      <input type="radio" name="jenis_kelamin" value="1">Female<br>
      <input type="radio" name="jenis_kelamin" value="2">Other<br><br>

      <label>Nationality : </label><br><br>
      <select>
         <option value="0">Indonesia</option>
         <option value="1">Malaysia</option>
         <option value="2">Singapore</option>
         <option value="3">Belanda</option>
         <option value="4">America</option>
      </select>
      <br><br>

      <label>Language Spoken :</label><br><br>
      <input type="checkbox" name="bahasa" value ="0" checked> Bahasa Indonesia<br>
      <input type="checkbox" name="bahasa" value ="1" > English<br>
      <input type="checkbox" name="bahasa" value ="2" > Other<br>
      <br>

      <label for="bio">Bio: </label><br><br>
      <textarea cols="50" rows = "10" id="bio"></textarea><br>

      <input type="submit" value="Sign Up">

   </form>


</body>
</html>