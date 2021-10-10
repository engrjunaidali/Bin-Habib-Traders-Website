<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<table class='table'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Email</th>
      <th scope='col'>Purchaser</th>
      <th scope='col'>Delivery Address</th>
      <th scope='col'>Contact Person</th>
      <th scope='col'>Size</th>
      <th scope='col'>Quantity</th>
    </tr>
  </thead>
  <tbody>

    <?php
  include "config.php";

  $sql = "select * from tblorders";
  $result = mysqli_query($con,$sql);

  $num = mysqli_num_rows($result);
  echo "<br>";

  echo "";
  if ($num>0){
    while ($row = mysqli_fetch_assoc($result)){
      echo $row['email'];

?>
    <tr>
      <th scope='row'><?php echo $row['orderID'];?></th>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['purchaser'];?></td>
      <td><?php echo $row['deliveryAddress'];?></td>
      <td><?php echo $row['contactPerson'];?></td>
      <td><?php echo $row['bottleSize'];?></td>
      <td><?php echo $row['bottleQuantity'];?></td>
    </tr>


<?php     }
  }?>  
  </tbody>
  </table>