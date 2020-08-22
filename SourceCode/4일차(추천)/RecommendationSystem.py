#!C:\Program Files (x86)\Programming\VS_folder\VS SDK\Python37_64\python.exe
#print("Content-Type: text/html\n")
#print ("Hello Python Web Browser!! This is cool!!")
import pymysql
import re
import operator

def numEX(result):#숫자만 추출해서 리스트로 리턴
    resultS = str(result)
    resultD = re.findall("\d+",resultS)
    return resultD


con = pymysql.connect(user="exroot",password="",host="",db='wbflix', charset='utf8')#서버 연결 정보
cursor = con.cursor()#서버 연결


#사용자가 본 영화 목록 불러오기
resultTuple=()
sql = "SELECT viewed FROM user WHERE id='유선권'";
cursor.execute(sql)
result = cursor.fetchall()
#print(numEX(result))
for i in numEX(result):
    sql = "SELECT * FROM movie_data WHERE idx ="+i;
    cursor.execute(sql)
    result = cursor.fetchall()
    resultTuple+=result#하나의 튜플로
    resultStr=str(resultTuple)#count 함수 쓰기위해
#print(resultStr)


#사용자가 본 영화 목록에서 가장 많이본 장르 찾기
Genre={'드라마':0,'SF':0,'공포':0,'스릴러':0,'공포':0,'스릴러':0,'액션':0,'음악':0,'애니메이션':0,'슈퍼히어로':0,'코미디':0}
for i in Genre.keys():
    Genre[i]= resultStr.count(i)
MaxGenre=max(Genre.items(), key=operator.itemgetter(1))[0]
#print(MaxGenre)





##<장르를 바탕으로한 추천 시스템>##
sql = "SELECT * FROM movie_data WHERE Genre =" + "'" + MaxGenre+ "'" +" AND Score >=3.0";
cursor.execute(sql) 
result = cursor.fetchall()

for i in result:
    print(i,end="\n")






##########################################################################


#사용자가 본 영화 목록에서 가장 많이본 국가의 영화
Country={'한국':0,'일본':0,'중국':0,'미국':0,'유럽':0,'홍콩':0,'인도':0}
for i in Country.keys():
    Country[i]= resultStr.count(i)
MaxCountry=max(Country.items(), key=operator.itemgetter(1))[0]
#print(MaxGenre)



    
#모든 영화 목록  불러오기
sql = "SELECT * FROM movie_data"; #쿼리문
cursor.execute(sql) # 쿼리문 실행
result = cursor.fetchall()# 한꺼번에 출력
#print(result)


#Score(평점)이 4.2보다 큰 영화 목록 불러오기
a= "Score"
sql = "SELECT * FROM movie_data WHERE "+a+" >4.2";
cursor.execute(sql)
result = cursor.fetchall()
#print(result)


#장르가 액션이고 평점이 4이상인 영화 목록 불러오기
sql = "SELECT * FROM movie_data WHERE Genre ='액션' AND Score >=4.0 ";
cursor.execute(sql)
result = cursor.fetchall()
#print(result)



#장르가 드라마고 평점이 4이상이고 한국영화거나 미국영화인 목록 불러오기
sql = "SELECT * FROM movie_data WHERE Genre ='드라마' AND Score >=4.0 AND (Country = '한국' OR Country = '미국')";
cursor.execute(sql)
result = cursor.fetchall()
#print(result)



con.commit() 
con.close()#서버 연결 종료


