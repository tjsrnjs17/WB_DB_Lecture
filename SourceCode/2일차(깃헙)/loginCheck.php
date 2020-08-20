
<?php
	$con = mysqli_connect("localhost", "root", "", "setest"); //db연결

if($_POST['user_id'] && $_POST['user_pw']){//아이디와 비밀번호 모두 입력이 되었다면
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );//아이디와 비밀번호가 맞는지 확인
	$num = mysqli_num_rows( $resource );//데이터베이스에 있는 값과 입력 된 값을 비교하여 참이라면 1이상의 값 아니라면 0의 값을 가지게 된다
	if($num>0) {//앞서 얻은 num값이 0이상이라면
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/');//30일 뒤에 만료 될 쿠키 값 설정 
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/');//30일 뒤에 만료 될 쿠키 값 설정 
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";//로그인 이후의 창으로 넘어감
		}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";//아이디 또는 패스워드가 잘못 되어 로그인창으로 다시 돌려보냄
		exit; 
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";//아무것도 입력 안하고 로그인 버튼 눌렀을 때 다시 로그인 창으로 돌려보냄
	exit; 
}
?>
