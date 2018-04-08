<!DOCTYPE html>
<style type="text/css">
@charset "utf-8"; 
*{
	margin: 0;
	padding: 0;
	outline: none;
}

html {height: 100%;}


/* Тело____________________________________________________________________________Тело --> */


body {
width: 100%;
height: 100%;
color: #363636;
background-color: #FFE7D1;
font-family: "Segoe UI", Arial, sans-serif;
font-size: 1em;
line-height: 135%;
float: left;
}


/* Ссылки________________________________________________________________________Ссылки --> */


a {
color: #F94141;
text-decoration: none;
-webkit-transition: all.6s ease;	
-moz-transition: all.6s ease;	
-o-transition: all.6s ease;	
-ms-transition: all.6s ease;	
transition: all.6s ease;	
}

a:hover{
color: #9834FC;
text-decoration: none;
-webkit-transition: all.6s ease;	
-moz-transition: all.6s ease;	
-o-transition: all.6s ease;	
-ms-transition: all.6s ease;	
transition: all.6s ease;	
}


/* Заголовок__________________________________________________________________Заголовок --> */


header {
margin-bottom: 50px;
float: left;
width: 94%;
padding: 3%;
background-color: #907BE6;
border-bottom: 8px solid #DC9259;
}

header #logo{
font-size: 3.5em;
width: 50%;
float: left;	
}

header #logo #first{color: #FF0000;}
header #logo #second{color: #00FF00;}
header #logo #third{color: #0000FF;}
header #logo #thof{color: #FFFF00;}

header #menu{
font-size: 2em;
width: 18%;
float: left;
}

header #menu #a_menu{
background-color: #FFE7D1;
border-radius: 10px;
padding: 7px;		
}

header #contacts #a_contacts{
background-color: #FFE7D1;
border-radius: 10px;
padding: 10px;		
}

header #contacts{
font-size: 2em;
width: 28%;
margin-top: 20px;
float: right;
text-align: right;	
}


/* Футер__________________________________________________________________________Футер --> */


footer{
float: left;
width: 94%;
padding: 3%;
background-color: #907BE6;
border-top: 8px solid #DC9259;
margin-top: 15px;
}

footer #org{
font-size: 1.5em;
width: 60%;
float: left;
text-align: left;
}

footer #right{
font-size: 1em;
width: 40%;
float: right;
text-align: right;
}


/* Текст сайта______________________________________________________________Текст сайта --> */

#text{
margin-left: 25px;
}




ul {
    /* Убираю маркеры у списка*/
    list-style: none;
    /* Делаю элементы блочными. */
    display: block;
    /* Убираю отступы. */
    margin:0px;
    /* Убираю еще отступы! */
    padding:0px;
}
ul:after {
    /* Делаю элементы блочными. */
    display: block;
    /* Убираю выравнивание. */
    float: none;
    content: ' ';
    clear: both;
}
ul.mmenuu > li {
    /* Задаю выравнивание и позиционирование. */
    float: left;
    /* Считаем координаты относительно исходного места*/
    position: relative;
}
ul.mmenuu > li > a {
    /* Делаю элементы блочными: */
    display: block;
    /* Задаю белый цвет. */
    background-color: rgbs(0);
    /* Задаю отступ 10px. */
    padding: 20px;
	border-radius: 10px;
    /* Убираю форматирование*/
    text-decoration: none;
    /* Задаю цвет. */
    background-color: #FFE7D1;
}
ul.mmenuu > li > a:hover {
    /* Задаю цвет при наведении. */
    background-color: #fac696;
}
ul.ssubmenuu {
    position: absolute;
    width: 300px;
    top: 57px;
    left:0px;
    /* Делаю субменю скрытыми. */
    display: none;
    /* Цвет — белый. */
	background-color: rgbs(0);
}
ul.ssubmenuu > li {
    /* Блочное расположение элементов*/
    display: block;
}
ul.ssubmenuu > li > a {
    /* Делаю элементы блочными. */
    display: block;
    /* Убираю форматирование*/
    text-decoration: none;
    /* Задаю отступ. */
    padding: 20px;
	border-radius:30px;
    /* Задаю цвет. */
    color: #363636;
    /* Еще цвет. */
    background-color: #fac696;
	line-height: 140%;
}
ul.ssubmenuu > li > a:hover {
    /* Цвет бэкграунда при наведении. */
    background-color: #fca553;
    /* Задаю подчеркивание*/
    text-decoration: none;
}
ul.mmenuu > li:hover > ul.ssubmenuu {
    /* Делаю элементы блочными. */
    display: block;
}
</style>


<!-- HTML_____________________________________________________________________________HTML -->


<html>
<head>
<meta charset="utf-8">
<title>Школа для самых маленьких</title>
</head>

<body>


<header>
<div id="logo">
<span id="first">Ш</span>кола <span id="second">д</span>ля <span id="third">с</span>амых <span id="thof">м</span>аленьких
</div>

<div id="menu">
<!--<a href="/menu.php" id="a_menu">Меню</a>-->
<ul class="mmenuu">
    <li><a href=#>Меню</a>
        <ul class="ssubmenuu">
            <li><a href=#>На главную</a></li>
			<li><a href=#>Расписание занятий</a></li>
			<li><a href=#>Галерея</a></li>
			<li><a href=#>Прайс лист</a></li>
			<li><a href=#>Информация о преподователе</a></li>
        </ul>
    </li>
</ul>
</div>

<div id="contacts">
<a href="/conacts.php" id="a_contacts">Контакты</a>
</div>
</header>
<div id="text">

Типо текст.............</br>
sgsfgs</br></br>
dsfsdfs</br></br>
sdfsdfs</br></br>
dsfsddfs</br></br>
sdfsdfsd</br></br>
hdfgdf</br></br>
sdgsgsf</br></br>
hshsagh</br></br>
shshsfs</br></br>
shfsfhsfh</br></br>
sfhsf</br></br>
shfsfhsfhshfshf</br></br>
shell_execf</br></br>
sans-serifs</br></br>
fgdsfgdfg</br></br>
fff</br></br>
fbsql_affected_rowsfff</br></br>
fbsql_affected_rowssg</br></br>
ffffff</br></br>
fgsfg</br></br>
fbsql_affected_rows</br></br>
fbsql_affected_rows</br></br>
sgsgs</br></br>
sgsgssgsg</br></br>
sgsgs</br></br>
sgsgsgsggs</br></br>
sggsszazv</br></br>
zzzv</br></br>
zvzv</br></br>
zvzvv</br></br>

</div>

<footer>

<div id="right">
Все права защищены &copy; <?php echo date ('Y')?>
</div>

<div id="org">
Организация...........
</div>

</footer>


</body>

</html>