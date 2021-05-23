<?php 
  class SinhvienModel extends Database{
      public  function GetSv(){
          return "Kien";
      }
      // các phương thức lấy,tải dữ liệu từ database
      public function listSV(){
        $sql =  "SELECT * FROM sinhvien";
        return mysqli_query($this->conn,$sql);
      }
  }
  // model muốn sử dụng các chức năng khác -> viết class đó và cho model extend lớp đo, extend nhiều lớp
?>