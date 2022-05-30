<?php

session_start();
include("../config/db.php");
    
$limit = 3;

if(isset($_POST['page_num'])){
    $page = $_POST['page_num'];
}else{
    $page = 0;
}

$result = $conn->query("SELECT * FROM `contact` LIMIT {$page},$limit");

if(mysqli_num_rows($result) > 0){
  $output = "";
  $output .= "<tbody>";
    while($row = mysqli_fetch_assoc($result)) {
      $last_id = $row["id"];
      $output .= "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["phone"]}</td></tr>";
    }     
      $output .= "</tbody>
                  <tbody id='pagination'>
                    <tr>
                      <td colspan='2'>
                        <button id='ajaxbtn' data-id='{$last_id}'>Load More</button>
                      </td>
                    </tr>
                  </tbody>";
    echo $output;              

}else{
  echo "";
}

mysqli_close($conn);