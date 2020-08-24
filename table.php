<?php 

  $sql = 'SELECT * FROM `notes`';
  $result = mysqli_query($conn, $sql);
  $sno=0;
  while($row = mysqli_fetch_assoc($result)){
    $sno = $sno+1;
    echo "<tr>
      <th scope='row'>".$sno."</th>
      <td>".$row['title']."</td>
      <td>".$row['discription']."</td> 
      <td><button type='button' class='edit btn btn-outline-primary btn-sm' id=".$row['sno'].">Edit</button>
       <button type='button' id=d".$row['sno']." class='delete btn btn-outline-danger btn-sm'>Delete</button>  </td>
    </tr>";//action buttons
  }

  ?>