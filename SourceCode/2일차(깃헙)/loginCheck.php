
<?php
	$con = mysqli_connect("localhost", "root", "", "setest");

if($_POST['user_id'] && $_POST['user_pw']){
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );
	$num = mysqli_num_rows( $resource );
	if($num>0) {
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/');
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/');
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
		exit;
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";
	exit;
}
?>
//
