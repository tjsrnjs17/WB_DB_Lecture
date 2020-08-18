
<?php
	$con = mysqli_connect("localhost", "root", "", "setest");

if($_POST['user_id'] && $_POST['user_pw']){//id와 pw모두 입력되었을 때
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );//id와 pw가 맞는지 확인
	$num = mysqli_num_rows( $resource );//총 몇개의 행을 가졌는지 반환
	if($num>0) {//받은 num값이 0 이상이면
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/');//30일뒤에 만료될 쿠키값 설정
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/');//30일뒤에 만료될 쿠키값 설정
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";//다음화면으로 넘어감
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";//입력한 것이 잘못되었을 때
		exit;
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";//입력한 것이 없어서 로그인 요구
	exit;
}
?>
