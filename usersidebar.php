
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<!--<link rel="stylesheet" type="text/css" href="Sbar.css">-->
	 <style>
*{
	margin:0;
	padding: 0;
	box-sizing: border-box;
}
html, body{
	height: 100%;
}
/*h2{
	text-transform: capitalize;
	font-family: arial;
	text-align: center;
	color: #fff;
	margin-top: 10px;
	margin-bottom: 10px;
}*/

nav{

	width: 250px;
	position: absolute;/*absolute*/
	top: 8%;/*0chnage*/
	bottom: 0;
	background:#12192C;
	border-radius: 0px;
	box-shadow: 5px 7px 10px rgba(0, 0, 0, .5)
}
nav ul{
	position: relative;
	list-style-type: none;
}
nav ul li a{
	display: flex;
	align-items: center;
	font-family: arial;
	font-size: 1.30em;
	text-decoration: none;
	text-transform: capitalize;
	color:#fff ;
	padding: 10px 30px;
	height: 50px;
	transition: .5s ease;
	border-radius: 0 30px;
}
nav ul li a:hover{
	background:crimson ;
	color: #fff;
}
nav ul ul {
	position: absolute;
	left: 250px;
	width: 150px;
	top: 0;
	display: none;
	background:#12192C;
	border-radius: 5px;
	box-shadow: 2px 2px 10px rgba(0, 0, 0, 1)
}
nav ul span{
	position: absolute;
	right: 20px;
	font-size: 1.5em;
	/*transform:rotate(90deg);*/

}
nav ul .dropdown{
	position: relative;
}
nav ul .dropdown:hover ul{
	display: initial;
}


</style>
</head>
<body>
	<nav>
				
		<ul>
			<li><a href="userdashboard.php">Dashboard</a></li>
			
			<li><a href="search-product.php">Search product</a></li>
			<li><a href="#">invoices</a></li>
			
		</ul>
	</nav>
</body>
</html>