
<?php
	$con = mysqli_connect("localhost", "root", "", "setest");//db연결

if($_POST['user_id'] && $_POST['user_pw']){//아이디와 비밀번호가 둘다 입력되었을때
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );//올바른 아이디,비밀번호인지 확인
	$num = mysqli_num_rows( $resource );//참이면 $num을 1, 거짓이면 0으로 설정
	if($num>0) {
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/');//30일뒤에 만료될 아이디쿠키값 설정
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/');//30일뒤에 만료될 비밀번호쿠키값 설정
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";//로그인 성공시 사이트에 이동
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";//db에 있는 아이디, 패스워드와 다를때
		exit;
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";//아이디나 비밀번호를 입력하지 않았을때
	exit;
}
?>
