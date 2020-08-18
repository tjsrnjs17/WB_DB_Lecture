
<?php
	$con = mysqli_connect("localhost", "root", "", "setest");//데이터 베이스 연결 

if($_POST['user_id'] && $_POST['user_pw']){    //조건문 아이디, 비밀번호
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" ); // 칼럼 user id 와 user pw에 입력된값 저장하는 쿼리문 >> 성공 실패인지 나타냄
	$num = mysqli_num_rows( $resource ); //문자열 숫자로 바꿔줌 
	if($num>0) //조건문 만약 아이디와 비밀번호가 맞다면  {
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/'); //php에서 post 방식으로 php에서 user id 쿠키 값을 전송
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/'); //php에서 post방식으로 user password 쿠키 값을 결정
		echo "<meta http-equiv='refresh' content='0;url=main.html'>"; //php에서 echo 출력문을 이용해서 데이터 동시출력
		}
	else // 또는 만약 아이디와 비밀번호가 다르다면{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>"; //아이디 또는 패스워드가 잘못 되었습니다 창이뜨고 처음화면으로 돌아가기
		exit;
	}	

}
else{

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";//아이디또는 패스워드를 입력창 띄움
	exit;
}
?>
//
