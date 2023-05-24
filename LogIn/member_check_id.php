<?php
   $con = mysqli_connect("localhost", "user1", "12345", "sample");

   $id = $_GET["id"];

   $query = "select * from members where id='$id'";
   $result = mysqli_query($con, $query);
   $count = mysqli_num_rows($result);

   if ($count)
   { ?>
   <script>
      alert('이미 존재하는 ID입니다.');
      window.close(); 
      </script>
   <?php
   }
   else
   {  ?>
      <script>
      alert('사용가능한 ID입니다.');
      window.close(); 
      </script>
<?php
   }
   mysqli_close($con);
?>