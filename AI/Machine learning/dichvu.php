<DOCTYPE html>
<html>
<head>
<link href="CSS/dichvu.css" rel="stylesheet" type="text/css" media="screen,print" />

</head>
<title>Dịch vụ</title>
    <meta charset="utf-8">

<body>
<div id="main">

<ul>

      <li class="dropdown">
          <a href="homepage.php" class="dropbtn">Home</a>
              <div class="dropdown-content">
                  <a href="room.php">Phòng</a>
                  <a href="service.php">Dịch vụ</a>
            </div>
     </li>

      <li class="dropdown">
          <a href="#" class="dropbtn">Menu</a>
              <div class="dropdown-content">
                  <a href="food.php">Đồ ăn</a>
                  <a href="drink.php">Đồ uống</a>
                  <a href="entertainment.php">Giải trí-Thư giãn</a>
              </div>
     </li>

      <li class="dropdown">
          <li style="float:right;" class="dropdown"> <a class="dropbtn" value ="<?php echo $username;?> "><?php echo $username;?></a>
             <div class="dropdown-content">
                <a href="thongtinkhachhang.php">Thông tin</a>
                <a href="logout.php">Thoát</a>
              </div>
         </li>
      </li>


</ul>

    <div id = "left">

          <form action="timkiemdv.php" method="POST" >
                <input type="text" name="search" placeholder="Tìm kiếm...">
                <input type="submit" name="ok" value="Tìm kiếm">
          </form>

    </div>
<?php
           $host        = "localhost=127.0.0.1";
           $dbname      = "dbname=qlks";
           $credentials = "user=postgres password=ilovesoda";
           $db = pg_connect( "$localhost $dbname $credentials"  );
               if(!$db)
                   {
                      echo "Error : Unable to open database\n";
                   }//ket noi database
            $sql = "SELECT madv, tendv, loaidv, (dongia||'đ') as dongia FROM dichvu order by madv asc ";
            $result = pg_query($db, $sql);
            if(!$result)
                {
                     die('Query error: [' . $db->error . ']');
                }
        ?>

<center><h2>Menu</h2></center>
          <div style="overflow-x:auto;">
              <center>
                  <table  width="600" border="2">
                      <tr>
                          <th>STT</th>
                          <th>Mã dịch vụ</th>
                          <th>Tên dịch vụ</th>
                          <th>Loại dịch vụ</th>
                          <th>Đơn giá</th>
                      </tr>

                      <tbody>
                          <?php 
                          
                              $b = 0 ;
                              
                              while ($row = pg_fetch_array($result)) :
                              $b = $b + 1 ; ?>
                              <tr>

                                  <td><?php echo "".$b."" ?></td>
                                  <td><?php echo $row['madv']; ?></td>
                                  <td><?php echo $row['tendv']; ?></td>
                                  <td><?php echo $row['loaidv'];?></td>
                                  <td><?php echo $row['dongia']; ?></td>
                            
                              </tr>
                          <?php endwhile; ?>
                      </tbody>
                  </table>
              </center>

          </div>

</div>

</body>
</html>