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

		#right-bar{
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
		#right-bar a{
			margin: 2px;
			margin-right: 20px;
			margin-top: 12px;
			margin-bottom: 12px;
			float: right;
			height: 16px;
			width: 50px;
			
			text-align: center;
			color: white; 
		}

		#left-column{
			margin-left: 95px;
			padding: 5px;
			width: 15%;
			float: left;
		}

		#content{
			width: 100%;
			margin-top:50px;
			
		}

		#user-content{
			float: left;
			width: 100%;			
			border-radius: 4px;
			height: 30px;
			border-radius: 5px;
		}
				
		#user-content:hover{
			background: white;
		}
		#news-feed{
			float: left;
			width: 100%;
			background: white;
			border-radius: 4px;
		}

		#left-messages{
			float: left;
			width: 100%;			
			border-radius: 4px;
			height: 30px;
			border-radius: 5px;
		}

		#left-messages:hover{
			background: white;
		}

		.left-column-picture{
			margin: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: left;
			height: 20px;
			width: 20px;
			border-radius: 2px;
		}

		#left-column spam{
			margin: 2px;
			margin-right: 2px;
			margin-top: 7px;
			margin-bottom: 7px;
			float: left;
			height: 14px;	
			width: 80%;		
			text-align: left;	
				
		}
		
		#left-column ul{
			padding: 0px;
			margin: 0px;
			border: 0px; 
			list-style: none;
		}
		
		
		.left-label{
			color: #A9A9A9;
			margin-top: 20px !important;
			clear: both;
			float: left;
			font-size: 14px;
		}

		ul{
			list-style-type: none;
			margin: 0px;
			padding: 0px;
			border: 0px;
		}

		#create{
			clear: both; 
		}
		#create li{
			font-size: 3px;			
			color: blue;
			float: left;
			list-style-type: circle;
		}
		#create li:first-child {
			list-style-type: none;
		}
		#create li a{
			font-size: 13px;
			float: left;
		}		
		
		.left_list_elem{
			font-size: 14px;
			float: left;
		}

		#left-column ul li div{
			height: 30px;
			border-radius: 5px;
		}
		#left-column ul li div:hover{
			background: white;
		}

		#middle-column{
			
			margin-left: 5px;
			margin-top: 0px;
			width: 40%;
			
			float: left;
		}

		#post-form{
			background: white;
			border: 1px;
			border-color: #f2f2f2;
			width: 100%;
			border-radius: 4px;
		}
		#post-form textarea{
			width: 85%;
			border-color: white;
			height: 105px;
			padding: 5px;
			color: grey;
			border: 0px;			
		}

		#form-img{
			height:100%;
			float: left;
			width: 50px;
			border-radius: 25px;
			
			margin-bottom: 60px;
		}

		.middle-column-picture{
			margin: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: left;
			height: 20px;
			width: 20px;
			border-radius: 2px;
		}

	
		#middle-column a{
			margin: 2px;
			margin-right: 2px;
			margin-top: 7px;
			margin-bottom: 7px;
			float: left;
			height: 14px;			
			text-align: center;					
		}	
		#main-form{
			padding: 5px;
			clear: both;
			border: 0px;
			border-radius: 4px;
			border-bottom: 1px;
			border-left: 1px;
			border-right: 1px;
			border-style: solid;
			border-color: #b3b3b3;
		}
		
		#post-form li{
			padding: 4px;
			border: 0px;
			border-right: 1px;
			border-color: #b3c6ff;
			color: #0040ff; 		
		}

		#post-form ul{
			padding: 2px;
			border: 1px;
			border-radius: 4px;
			border-style: solid;
			border-color: #b3b3b3;
		}		
		hr { 
			display: block;
			margin-top: 0.5em;
			margin-bottom: 0.5em;
			margin-left: auto;
			margin-right: auto;
			border-style: inset;
			border-width: 1px;
			clear: both;
		} 
		.form-bottom{
					
			float: left;
			border-radius: 10px;
			padding-left: 10px;
			background: #f5f5f0;
			margin-right: 5px;
			color: grey;
			margin-bottom: 10px;
		}

		.form-bottom spam{
			display: block;
			width: 160px;
			margin-top: 6px; 
			margin-bottom: 6px; 
		}

		#main-form-button{
			background-color: blue; 
			border: none;
			color: white;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 4px 2px;
			cursor: pointer;			
			float: right;		
			border-radius: 3px;
			padding-left: 10px;
			padding-right: 10px;			
			margin-right: 5px;			
			margin-bottom: 5px; 			
		}

		.post-person-img{
			height:100%;
			float: left;
			width: 50px;
			border-radius: 25px;
		}

		.post-photo{
			
			width: 100%;
			
		}

		.post{
			padding: 5px;
			clear: both;
			border: 0px;
			border-radius: 4px;
			border-bottom: 1px;
			border-left: 1px;
			border-right: 1px;
			border-style: solid;
			border-color: #b3b3b3;
			background: white;
			margin-top: 12px;
			margin-bottom: 12px; 
		}

		.post-action{
			width: 33%;
			color: grey;
			display: block;
			float: left;
			text-align: center;
		}

		.post-action:hover{
			background: #f2f2f2;
		}
		
	</style>
    <meta charset="utf-8">
		<meta name="author" content="Giorgi Khosroshvili">
		<meta name="description" content="This is the home page of facebook">
    <title>Facebook</title>
  </head>
  <body>
	<div id="navbar" class="group">
		<form id="left-bar" action="index.php">
			<img id="logo" src="logo1.png">
			<input type="text" id="search" name="search" placeholder="Search Facebook">
			<button id="search">search </img> </button>
		</form> <!-- #left-bar -->
		<div id="right-bar">		
		
			<img id="globe" src="globe.png">
			<img id="messages" src="messages.png">
			<img id="friend-req" src="friends.jpg">
			<a text-align="center">Home</a>	
			<a text-align="center" href="index.php">Alfred</a>			
			<img id="person" src="person.jpg">
			
		</div> <!-- #right-bar -->

	</div> <!-- #navbar -->

	<div id="content"> 	

		<div id="left-column" class="group">

			
			<div id="user-content" class="group" style="margin-bottom: 10px">
				<img class="left-column-picture" src="person.jpg">
				<spam style="float: left;">Alfred Lua</spam>
			</div> <!-- #user column -->

			<div id="news-feed">
				<img class="left-column-picture" src="news-feed.jpeg">
				<spam style="float: left;" class="left_list_elem"><b>News Feed</b></spam>
			</div> <!-- #news feed -->

			<div id="left-messages">
				<img class="left-column-picture" src="messages-left.jpg">
				<spam style="float: left;" class="left_list_elem">Messages</spam>
			</div><!-- #left messages -->

			<spam class="left-label">SHORTCUTS</spam>


			<ul>				
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="group.png"> 
						<spam class="left_list_elem">OS group</spam>
					</div>
				</li>
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="group.png">
						<spam class="left_list_elem">Frontend Stuff</spam>
					</div>
				</li>
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="group.png"> 
						<spam class="left_list_elem">Korkot Mishvele</spam>
					</div>
				</li>
			</ul> <!-- #shortcuts -->

			
			<spam class="left-label">EXPLORE</spam>

			<ul>				
				
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="pages.jpg"> 
						<spam class="left_list_elem">Pages</spam>
					</div>
				</li>
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="group.png">				 
						<spam class="left_list_elem">Groups</spam>
					</div>
				</li>
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="events.png"> 
						<spam class="left_list_elem">Events</spam>
					</div>
				</li>
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="friends-list.jpg"> 
						<spam class="left_list_elem">Friends List</spam>	
					</div>		
				</li>
				<li style="clear: both;">
					<div>
						<img class="left-column-picture" src="dropdown.png"> 
						<spam style="color: blue;" class="left_list_elem">See More...</spam>
					</div>
				</li>
			</ul> <!-- #explore -->

			<spam class="left-label">CREATE</spam>

			<ul id="create" class="group">				
				
				<li class="group"> <a>Ad</a></li>
				<li class="group"> <a>Page</a></li>
				<li class="group"> <a>Group</a></li>
				<li class="group"> <a>Event</a></li>
				
			</ul> <!-- #create -->


		</div> <!-- #left-column -->

		<div id="middle-column" class="group">
			<form id="post-form" class="group">
				<ul class="group" style="background: #f5f5f0;">
					
					<li style="float:left; background: white;">
						<img class="middle-column-picture" src="create-page.png"> 
						<a class="middle_list_elem">Create a Post</a>
					</li>
					<li style="float:left;">
						<img class="middle-column-picture" src="album.png"> 
						<a class="middle_list_elem">Photo/Video Album</a>
					</li>
				</ul>	

				<div id="main-form" class="group">
					<img id="form-img" src="person.jpg">

					<textarea>What's on your mind?</textarea>				

					<hr>
					
					<spam class="form-bottom"><img class="middle-column-picture" src="camera.png"> 
						<spam class="middle_list_elem">Photo/Video</spam>
					</spam>

					<spam class="form-bottom"><img class="middle-column-picture" src="smile.png"> 
						<spam class="middle_list_elem">Emotion</spam>
					</spam>

					<hr>

					<button id="main-form-button">Post</button>
				</div> <!-- #main-form -->
			</form> <!-- #post-form -->

			<div>
				<div class="post group">
					<div class="group" style="margin-bottom: 5px;">
						<img class="post-person-img" src="person.jpg">

						<p style="margin: 5px; margin-left:60px;"><spam style="color: blue;">Someone</spam> Posted a Photo</p>
						<p style="margin: 5px; margin-left:60px;"><spam style="color: grey; font-size:14px">6 hr.</spam></p>	
					</div>

					<img class="post-photo" src="bird.jpg">

					<div>
						
						<spam style="color: grey; font-size:16px; float: right; margin: 6px;">29 comments 82 shares</spam>
						<hr>
						<spam text-align="center" class="post-action"> Like </spam>
						<spam text-align="center" class="post-action"> Share </spam>
						<spam text-align="center" class="post-action"> Comment </spam> 
					</div>
							
				</div>


			</div>	



		</div> <!-- #middle-column -->

		<div id="right-column" class="group">

		</div> <!-- #right-column -->
		
		<div id="friends-column" class="group">

		</div> <!-- #friends-column -->

	</div> <!-- #content -->

  </body>
		

</html>
