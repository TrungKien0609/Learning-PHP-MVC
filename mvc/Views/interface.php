<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <style>
         div{
             padding: 20px;
         }
         div.header,div.footer{
            background-color: yellow;
            height: 30px;
         }
         div.content{
             height: 50px;
         }
    </style>
</head>

<body>
    <div class="header">
    </div>
    <div class="content">
         <?php 
        //  require_once "./mvc/Views/pages/".$thamso['page'].".php";
          while($row = mysqli_fetch_assoc($thamso["list"])){
             echo $row['ten'];
          }
         ?>
    </div>
    <div class="footer">
    </div>
</body>

</html>