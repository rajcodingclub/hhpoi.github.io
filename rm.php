
      <?php
      $con=mysqli_connect('localhost','root','','rm')
      if(isset($_POST['sb']))
      {
         $userid=$_POST['us'];
         $password=&$_POST['ps']
         $query="INSERT INTO register(USER ID,PASSWORD) VALUES ('$userid','$password')";
         $run=mysqli_query($con,$query)
      }
      ?>