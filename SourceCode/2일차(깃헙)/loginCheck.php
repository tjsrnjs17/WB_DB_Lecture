
<?php
	$con = mysqli_connect("localhost", "root", "", "setest");//DB연결("접속주소","접속계정","암호","DB명")

if($_POST['user_id'] && $_POST['user_pw']){//아이디값과 패스워드값이 존재하면
	$resource = mysqli_query( $con,"SELECT * FROM user WHERE id = '".$_POST['user_id']."' and pw = '".$_POST['user_pw']."'" );//id와 pw를 넣고 체크해주는 쿼리문 실행
	$num = mysqli_num_rows( $resource );//조회된 행의 수
	if($num>0) {//조회된 행의 수가 0보다 크면
		setcookie('user_id',$_POST['user_id'],time()+(86400*30),'/');//user_id에 id 값을 넣고 86400*30초 후에 만료됨
		setcookie('user_pw',$_POST['user_pw'],time()+(86400*30),'/');//user_pw에 pw 값을 넣고 86400*30초 후에 만료됨
		echo "<meta http-equiv='refresh' content='0;url=main.html'>";//0초뒤 main.html로 이동하기
		}
	else{//
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";//잘못되었다는 창 띄우고 전 페이지로 돌아가기
		exit;//실행 종료
	}	

}
else{//아이디값과 패스워드값이 존재하지 않으면

echo "<script>alert('아이디 또는 패스워드를 입력하세요.');history.back();</script>";//입력하라는 창 띄우고 전 페이지로 돌아가기
	exit;//실행 종료
}
?>
