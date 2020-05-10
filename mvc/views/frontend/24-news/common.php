<?php 

$servername ='localhost';
$username ='root';
$pass='';
$dbname = 'blogs';

//Tạo kết nối csdl:
$conn = new mysqli($servername,$username,$pass,$dbname);
mysqli_query($conn,"SET NAMES 'UTF8'");


//Phân trang:


    $page=1;//khởi tạo trang ban đầu
    $limit=4;//số bản ghi trên 1 trang (2 bản ghi trên 1 trang)
    

    $arrs_list = mysqli_query($conn,"
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
    
    $posts = mysqli_query($conn,"
    	select * from posts limit $start,$limit
    	");

    
    	?>