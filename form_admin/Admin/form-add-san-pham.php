<?php
include './header.php';

?>


<style>
  .Choicefile {
    display: block;
    background: #14142B;
    border: 1px solid #fff;
    color: #fff;
    width: 150px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    padding: 5px 0px;
    border-radius: 5px;
    font-weight: 500;
    align-items: center;
    justify-content: center;
  }

  .Choicefile:hover {
    text-decoration: none;
    color: white;
  }

  #uploadfile,
  .removeimg {
    display: none;
  }

  #thumbbox {
    position: relative;
    width: 100%;
    margin-bottom: 20px;
  }

  .removeimg {
    height: 25px;
    position: absolute;
    background-repeat: no-repeat;
    top: 5px;
    left: 5px;
    background-size: 25px;
    width: 25px;
    /* border: 3px solid red; */
    border-radius: 50%;

  }

  .removeimg::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    content: '';
    border: 1px solid red;
    background: red;
    text-align: center;
    display: block;
    margin-top: 11px;
    transform: rotate(45deg);
  }

  .removeimg::after {
    /* color: #FFF; */
    /* background-color: #DC403B; */
    content: '';
    background: red;
    border: 1px solid red;
    text-align: center;
    display: block;
    transform: rotate(-45deg);
    margin-top: -2px;
  }
</style>

<!-- Sidebar menu-->
<?php
include './menu.php';
?>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách sản phẩm</li>
      <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tạo mới sản phẩm</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i class="fas fa-folder-plus"></i> Thêm loại sản phẩm</a>
            </div>
          </div>
          <form method="post" action="../back-end/themSanPham.php" class="row" enctype="multipart/form-data">>

            <div class="form-group col-md-3">
              <label class="control-label">Tên sản phẩm</label>
              <input name="TenSP" required class="form-control" type="text" placeholder="nhập tên sản phẩm">
            </div>


            <div class="form-group  col-md-3">
              <label class="control-label">Số lượng</label>
              <input name="SoLuongNhap" required class="form-control" type="number" placeholder="nhập số lượng">
            </div>


            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Loại sản phẩm</label>
              <select name="MaLoaiSP" required class="form-control" id="exampleSelect1">
                
                <?php
                $sql = "SELECT `MaLoaiSP`, `TenLoai` FROM `loaisanpham` ";
                if ($connection != null) {
                  try {
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $loaisanphams = $statement->fetchAll();
                    foreach ($loaisanphams as $loaisanpham) {
                      $MaLoaiSP = $loaisanpham['MaLoaiSP'] ?? '';
                      $TenLoaiSP = $loaisanpham['TenLoai'] ?? '';

                      echo '<option value="' . $MaLoaiSP . '" >' . $TenLoaiSP . '</option>';
                    }
                  } catch (PDOException $e) {
                    echo "Cannot query database";
                  }
                }
                ?>
                <!-- <option value="" >Điện thoại</option>
                  <option>Laptop</option> -->

              </select>
            </div>

            <div class="form-group col-md-3 ">
              <label for="exampleSelect1" class="control-label">Nhà cung cấp</label>
              <select name="MaNCC" required class="form-control" id="exampleSelect1">
                
                <?php
                $sql = "SELECT `MaNCC`, `TenNCC` FROM `nhacungcap`";
                if ($connection != null) {
                  try {
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $nhacungcaps = $statement->fetchAll();
                    foreach ($nhacungcaps as $nhacungcap) {
                      $MaNCC = $nhacungcap['MaNCC'] ?? '';
                      $TenNCC = $nhacungcap['TenNCC'] ?? '';

                      echo '<option value="' . $MaNCC . '" >' . $TenNCC . '</option>';
                    }
                  } catch (PDOException $e) {
                    echo "Cannot query database";
                  }
                }
                ?>
              </select>
            </div>

            <div class="form-group col-md-3 ">
              <label for="exampleSelect1" class="control-label">Nhà sản xuất</label>
              <select name="MaNSX" required class="form-control" id="exampleSelect1">
                
                <?php
                $sql = "SELECT `MaNSX`, `TenNSX` FROM `nhasanxuat`";
                if ($connection != null) {
                  try {
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $nhasanxuats = $statement->fetchAll();
                    foreach ($nhasanxuats as $nhasanxuat) {
                      $MaNSX = $nhasanxuat['MaNSX'] ?? '';
                      $TenNSX = $nhasanxuat['TenNSX'] ?? '';

                      echo '<option value="' . $MaNSX . '" >' . $TenNSX . '</option>';
                    }
                  } catch (PDOException $e) {
                    echo "Cannot query database";
                  }
                }
                ?>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label class="control-label">Giá bán</label>
              <input name="DonGia" required class="form-control" type="number" placeholder="nhập giá bán">
            </div>
            <!-- onchange="readURL(this);" -->
            <div class="form-group col-md-12">
              <label class="control-label">Ảnh sản phẩm</label>
              <div id="myfileupload">
                <input type="file" required id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
              </div>
              <div id="thumbbox">
                <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                <a class="removeimg" href="javascript:"></a>
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Cấu hình sản phẩm</label>
              <textarea class="form-control" name="CauHinh" id="mota"></textarea>
              <script>
                CKEDITOR.replace('mota');
              </script>
            </div>

              <input class="btn btn-save" type="submit" style="margin-right: 10px;" name="submit" value="Lưu Lại">
              <a class="btn btn-cancel" href="QuanLySanPham.html">Hủy bỏ</a>
            
          </form>
        </div>


      </div>

</main>


<!--
  MODAL Loại sản phẩm
-->
<div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="row">
          <div class="form-group  col-md-12">
            <span class="thong-tin-loai-san-pham">
              <h5>Thêm mới loại sản phẩm</h5>
            </span>
          </div>
          <form action="../back-end/themLoaiSP.php" method="get">
          <div class="form-group col-md-12">
            <label class="control-label">Nhập tên loại sản phẩm mới</label>
            <input class="form-control" name="TenLoai" type="text" required>
          </div>
          <div class="form-group col-md-12">
            <label class="control-label">Bí danh</label>
            <input class="form-control" name="BiDanh" type="text" required>
          </div>
          
          <div class="form-group col-md-12">
            <label class="control-label">Loại sản phẩm hiện đang có</label>
            <ul style="padding-left: 20px;">
            
            <?php
                $sql = "SELECT `MaLoaiSP`, `TenLoai` FROM `loaisanpham` ";
                if ($connection != null) {
                  try {
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                    $loaisanphams = $statement->fetchAll();
                    foreach ($loaisanphams as $loaisanpham) {
                      $MaLoaiSP = $loaisanpham['MaLoaiSP'] ?? '';
                      $TenLoaiSP = $loaisanpham['TenLoai'] ?? '';

                      echo '<li>'.$TenLoaiSP.'</li>';
                    }
                  } catch (PDOException $e) {
                    echo "Cannot query database";
                  }
                }
                ?>

            </ul>
          </div>
        </div>
        <div style="float: right; margin-bottom: 5px;">
          <input type="submit" class="btn btn-save" value="Lưu lại">
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
        </div>
        </form>
        <BR>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!--
MODAL
-->








<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins/pace.min.js"></script>
<script>
  const inpFile = document.getElementById("inpFile");
  const loadFile = document.getElementById("loadFile");
  const previewContainer = document.getElementById("imagePreview");
  const previewImage = previewContainer.querySelector(".image-preview__image");
  const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
  inpFile.addEventListener("change", function() {
    const file = this.files[0];
    if (file) {
      const reader = new FileReader();
      previewDefaultText.style.display = "none";
      previewImage.style.display = "block";
      reader.addEventListener("load", function() {
        previewImage.setAttribute("src", this.result);
      });
      reader.readAsDataURL(file);
    }
  });
</script>
</body>

</html>