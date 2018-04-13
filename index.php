<!DOCTYPE html>

<html lang="en-US">
  <head>
	<style>
		.group:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		
		body {
			margin:0;
			background:  #e6f2ff;	
		}
		#logo{
			float: left;
		}	

		#navbar{			
			position: fixed;
			top: 0;
			width: 100%;			
			margin: 0;
			border: 0;
			padding: 0;
			overflow: hidden;
			background-color: steelblue;
			float: left;
		}
		#form{
			float: left;
		}

		#logo {
			margin-left: 100px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: left;
			height: 30px;
			width: 30px;
			border-radius: 4px;
		}
		input[type=text], select {
			width: 25%;
			padding: 0;
			margin: 0;
			border: 0;
			float: left;
			margin-top: 5px;
			margin-bottom: 5px;
			margin-left: 4px;
			border-radius: 4px;
			height: 30px;
			
			border-right-color: #f2f2f2;
			border-right-width: 7px;
    }

		#search{
		
			margin-top: 5px;
			margin-bottom: 5px;
			float: left;
			height: 30px;
			border-radius: 4px;			
			color: #f2f2f2;
			
		}

		#news{
			float: right;
		}

		#friend-req{
			margin: 2px;			
			margin-top: 5px;
			margin-bottom: 5px;
			float: right;
			height: 30px;
			width: 30px;
			border-radius: 4px;
		}

		#messages{
			margin: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: right;
			height: 30px;
			width: 30px;
			border-radius: 4px;
		}
		#person{
			margin: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: right;
			height: 30px;
			width: 30px;
			border-radius: 4px;
		}
		#globe{
			margin: 2px;
			margin-right: 200px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: right;
			height: 30px;
			width: 30px;
			border-radius: 4px;
		}
		#news.a{
			margin: 2px;
			margin-right: 200px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: right;
			height: 30px;
			width: 30px;
			border-radius: 4px;
			text-align: center;
		}
			
	</style>
    <meta charset="utf-8">
		<meta name="author" content="Giorgi Khosroshvili">
		<meta name="description" content="This is the home page of facebook">
    <title>Facebook</title>
  </head>
  <body>
	<div id="navbar" class="group">
		<form id="foom" action="/index.php">
			<img id="logo" src="logo1.png">
			<input type="text" id="search" name="search" placeholder="Search Facebook">
			<button id="search">search </img> </button>
		</form>
		<div id="news">
			
		
		
			<img id="globe" src="globe.png">
			<img id="messages" src="messages.png">
			<img id="friend-req" src="friends.jpg">
			<a>Home</a>	
			<a>Alfred</a>
			
			<img id="person" src="person.jpg">
			
		</div>

	</div> <!-- #navbar -->

	<div id="left-column" class="group">

	</div> <!-- #left-column -->

	<div id="middle-column" class="group">

	</div> <!-- #middle-column -->

	<div id="right-column" class="group">

	</div> <!-- #right-column -->
	
	<div id="friends-column" class="group">

	</div> <!-- #friends-column -->

  </body>
		

</html>
