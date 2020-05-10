<!DOCTYPE html>
<html>
<head>
  <title>'Devpro Kỹ thuật phân trang'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/giaodien.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- <?php
  $connect = mysqli_connect('localhost','root','','blogs');
  mysqli_set_charset($connect,"utf8");
  ?>

  <?php
    $page=1;//khởi tạo trang ban đầu
    $limit=4;//số bản ghi trên 1 trang (2 bản ghi trên 1 trang)
    

    $arrs_list = mysqli_query($connect,"
      select id from posts
      ");
    $total_record = mysqli_num_rows($arrs_list);//tính tổng số bản ghi có trong bảng khoahoc
    
    $total_page=ceil($total_record/$limit);//tính tổng số trang sẽ chia

    //xem trang có vượt giới hạn không:
    if(isset($_GET["page"]))
      $page=$_GET["page"];//nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
    if($page<1) $page=1; //nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
    if($page>$total_page) $page=$total_page;//nếu trang hiện tại vượt quá số trang được chia thì sẽ bằng trang cuối cùng

    //tính start (vị trí bản ghi sẽ bắt đầu lấy):
    $start=($page-1)*$limit;
    
    //lấy ra danh sách và gán vào biến $arrs:
    // $query = "SELECT * FROM uuser limit $start,$limit";

//Thực thi câu lệnh truy vấn:
    // $result = $connect->query($query);
    // $users = array();
    // while ($rows = mysqli_fetch_assoc()) {
    //   $users[] = $rows;
    // } 
    // $arrs = mysqli_query($connect,$query);
    $posts = mysqli_query($connect,"
      select * from posts limit $start,$limit
    ");

    ?> -->


    <!-- <div class="container">
      <div class="row">
        <div class="col-md-6 div col-md-offset-3">
          <div class="alert alert-danger">
            'Các khóa học mà Devpro.edu.vn đào tạo'
          </div>
          
          <?php foreach($posts as $post){ ?>
            <div class="alert alert-success">
              <?php echo $post["title"]; ?>
            </div>
          <?php } ?>
        </div>


        <div class="col-md-6 div col-md-offset-3">
          <ul class="pagination">
            <?php for($i=1;$i<=$total_page;$i++){ ?>
              <li <?php if($page == $i) echo "class='active'"; ?> ><a href="phantrang.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div> -->
  </body>
  </html> 