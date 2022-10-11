<?php 
  $link = mysqli_connect('localhost:3306' , 'root' , '');
  
  if(! $link){
    echo 'could not connect: ' . mysqli_connect_error();
    exit;
  }
   mysqli_select_db($Link , 'users');
   $SQL= "select * from users";
   $SQL="insert into users (email , password , age , phonenumber) values ('{email}' , '{password}' , {age} , {phonenumber})";
    if( $result = mysqli_query($link , $SQL)){
    echo 'query run successfully';
    
   }else{
    echo 'error : '. mysqli_error($link);
   }
    mysqli_close($link);
?>
<html>
  <head> 
    <title>register page</title>
  </head>
  <body>
    <h3> register page </h3>
    <br>
    <form action="/" method="post">
      <label for=" ">email : </label>
      <input type="email" name="email"><br>
      <label for=" ">password : </label>
      <input type="password" name="password"><br>
      <label for=" ">age : </label>
      <input type="int" name="age"><br>
      <label for=" ">phonenumber : </label>
      <input type="int" name="phonenumber"><br>
      <button type="submit">register</button>
    </form>

  
  </body>
</html>
