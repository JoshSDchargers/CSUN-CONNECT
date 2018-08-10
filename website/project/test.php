
<?php
$localhost="localhost";
$username="root";
$password="lakers3224";
$database="post";


  $con=mysqli_connect("localhost","root","lakers3224","post");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM login_comment");

    while($row = mysqli_fetch_array($result)) {

if ($row['category'] == 'Rants'){

echo "<table class='table-fill'>";
echo "<thead>";
echo"<tr>";
echo"<th class='red_th' colspan='2'><center>";
echo $row['header'];  
echo "</center></th>";
echo "</tr>";
echo"</thead>";
echo "<tbody class='table-hover text_align'>";
echo "<tr class='table-fill2'>";
echo "<td class='text-left' colspan= '2'><p>Description: ";
echo $row['comment'];
echo "</p></td>";
echo"</tr>";
echo"<tr class='table-fill3'>";
echo "<td class='text-left td_cat'><p>Category:"; 
echo $row['category'];
echo "</p></td>";
echo "<td class='text-left td_cat'><p>";
echo "Email:"; 
echo $row['email'];
echo "</p></td></tr>";
echo "<tfoot>";
echo "<tr>";
echo"<th class='red_tfoot' colspan='2'>Date:</th>";
echo "</tr>";
echo "</tfoot>";
echo"</tbody>";
echo "</table>";

echo "<br><br>";
echo "</div>";
echo "</body>";
}
}

    mysqli_close($con);
?>
</html>
