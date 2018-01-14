<form action="homework2.php" method="post" enctype="multipart/form-data">
     檔案名稱:
     <input type="file" name="file" id="file"><br>
     height:
     <input type="text" name="a">m<br>
     weight:
     <input type="text" name="b">kg<br>
     <input type="submit" name="submit" value="上傳檔案">
</form>
<?php  
extract($_POST);
if($a==""||$b==""){
    echo "請輸入資料"."<br>";
}
else{
    echo "BMI=".$b/$a/$a;
}
if($_FILES["file"]["error"]==4){
    echo "empty";}
    elseif(strstr($_FILES["file"]["type"],"image")==false){
        echo "錯誤的資料型別";}
    else{
        $filename = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
        echo '<img src="upload/'.$filename.'"/>';
    }
?>