<?php 
  class API_SV extends Controler{
      function getApi(){
         $sv = $this->model('SinhvienModel');
         $sv_api = $sv->listSV();
         while($row = mysqli_fetch_assoc($sv_api)){
          $result[] = (object) [
              'ten' => $row['ten'],
              'namsinh' => $row['namsinh']
            ];
         }
         echo json_encode($result);
      }
  }
?>