<meta charset="utf-8">

<?php
if(isset($_POST["name"])){

$name=$_POST["name"];
$phone=$_POST["phone"];
$studentID=$_POST["studentID"];
$grade=$_POST["grade"];
$gender=$_POST["gender"];

//$name=$_GET["name"];
echo "你的姓名是:".$name."<br/>";
echo "你的學號是:".$studentID."<br/>";
echo "您的年級是:";
foreach ($grade as $value){
echo $value." <br/>";
}
echo "你的電話是:".$phone."<br/>";

if($gender=="male"){
    echo "您的性別是:男性<br/>";
}else{
    echo "您的性別是:女性<br/>";
}

if(isset($_POST["meat"])){
    $meat=$_POST["meat"];
    echo "葷食<br/>";
}

if(isset($_POST["vegetarian"])){
    $meat=$_POST["vegetarian"];
    echo "素食<br/>";
} 

if(isset($_POST["sing"])){
    $sing=$_POST["sing"];
    echo "唱歌";
}

if(isset($_POST["dance"])){
    $dance=$_POST["dance"];
    echo "跳舞";
}

if(isset($_POST["acting"])){
    $acting=$_POST["acting"];
    echo "演戲";
}

}else{
    echo "資料輸入錯誤!";
}
?>