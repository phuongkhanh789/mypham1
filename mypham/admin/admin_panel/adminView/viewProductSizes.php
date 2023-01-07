
<div >
  <h2>Quản lý số lượng</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Tên sản phẩm</th>
        <th class="text-center">Size</th>
        <th class="text-center">Số lượng</th>
        <th class="text-center" colspan="2">Hành động</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from product_size_variation v, product p, sizes s WHERE p.product_id=v.product_id AND v.size_id=s.size_id ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["product_name"]?></td>
      <td><?=$row["size_name"]?></td>      
      <td><?=$row["quantity_in_stock"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="variationEditForm('<?=$row['variation_id']?>')">Sửa</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="variationDelete('<?=$row['variation_id']?>')">Xoá</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Thêm sản phẩm
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm sản phẩm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addVariationController.php" method="POST">
            
            <div class="form-group">
              <label>Tên sản phẩm :</label>
              <select name="product" >
                <option disabled selected>Chọn sản phẩm</option>
                <?php

                  $sql="SELECT * from product";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['product_id']."'>".$row['product_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Size:</label>
              <select name="size" >
                <option disabled selected>Chọn size</option>
                <?php

                  $sql="SELECT * from sizes";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['size_id']."'>".$row['size_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="qty">Số lượng :</label>
              <input type="number" class="form-control" name="qty" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Thêm</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   