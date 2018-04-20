<!DOCTYPE html>

<html lang="en-US">
  <head>
	<style>
		*{
			font-family:Helvetica;
		}		
		.group:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		
		body {
			margin:0;
			background:  #E9EBEE;	
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
			background-color: #4267B2;
			float: left;
		}
		
		#logo {
			margin-left: 60px;
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
			/* margin-top: 5px;
			margin-bottom: 5px; */
			/* margin-left: 4px; */
			border-radius: 4px;
			height: 30px;
			
			border-right-color: #f2f2f2;
			border-right-width: 7px;
    }

		#search{
		
			padding-left:7px;
			float: left;
			height: 30px;
			width: 320px;
			border-radius: 0px;			
					
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
			/* width: 100%; */
			border-radius: 4px;
		}

		#messages{
			margin: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: right;
			height: 30px;
			/* width: 30px; */
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
			/* width: 30px; */
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
			margin-left: 55px;
			padding: 5px;
			width: 15%;
			float: left;
		}

		#content{
			width: 100%;
			margin-top:50px;
			
		}
		#search-button{
			background-color: #f6f7f9;
			
			height: 30px; 
			width: 50px; 
			border: none;
			color: white;
			padding: 5px;
			text-align: center;					
			cursor: pointer;			
			float: left;			
			padding-left: 10px;
			padding-right: 10px;		
		}
		#user-content{
			float: left;
			width: 100%;			
			border-radius: 4px;
			height: 30px;
			border-radius: 5px;
		}
				
		#user-content:hover{
			background: #f6f7f9;
		}
		#news-feed{
			float: left;
			width: 100%;
			background: #f6f7f9;
			border-radius: 4px;
			border-style: solid;
			border-width: 1px;
			border-color: #dddfe2;
		}

		#left-messages{
			float: left;
			width: 100%;			
			border-radius: 4px;
			height: 30px;
			border-radius: 5px;
		}

		#left-messages:hover{
			background: #f6f7f9;
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
			font-size: 12px;
			font-weight: bold;
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
			background: #f6f7f9;
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
			
			width: 100%;
			
			border-radius: 7px;
			border-style: solid;
			border-color: #dddfe2;
		}
		#post-form textarea{
			width: 85%;
			border-color: white;
			height: 45px;
			padding: 5px;
			color: grey;
			border: 0px;			
		}

		#form-img{
			height:100%;
			float: left;
			width: 50px;
			border-radius: 25px;
			
			margin-bottom: 30px;
		}

		.middle-column-picture{
			margin: 2px;
			margin-top: 5px;
			margin-bottom: 5px;
			float: left;
			height: 16px;
			width: 16px;
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

		.middle_list_elem{
			margin: 2px;
			font-size: 13px;
			float: left;
		}
		#main-form{
			padding: 5px;
			clear: both;
			border: 0px;			
			border-top: 1px;			
			border-style: solid;
			border-color: #dddfe2;
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
			border-radius: 7px;			
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
			border-radius: 15px;
			padding-left: 10px;
			padding-right: 10px;
			background: #f5f5f0;
			margin-right: 5px;
			color: grey;
			margin-bottom: 10px;
		}

		.form-bottom:hover{
			background: #e9ebee;
		}

		#main-form-button{
			background-color: #4267B2; 
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
			height:50px;
			float: left;
			width: 50px;
			border-radius: 25px;
		}

		.post-photo{
			
			width: 100%;
			
		}

		.post{
			padding: 10px;
			clear: both;
			border: 0px;
			border-radius: 4px;
			border-bottom: 1px;
			border-left: 1px;
			border-right: 1px;
			border-style: solid;
			border-color: #dddfe2;
			background: white;
			margin-top: 12px;
			margin-bottom: 12px; 
		}

		.post-action{
			width: 30%;
			color: grey;
			display: block;
			float: left;
			padding: 1.5%;
			text-align: center;
			font-size: 14px;
			
		}

		.post-action:hover{
			background: #f2f2f2;
		}

		#right-column{
			margin-left: 5px;
			margin-top: 0px;
			width: 20%;
			
			float: left;
		}

		
		.right-div{
			background: white; 
			border-color:#dddfe2; 
			border-width: 1px; 
			border-radius: 4px;
			border-style: solid;
			width: 100%;
			height: 100%;
			padding-left: 5px;
			padding-right: 5px;
			padding-bottom: 10px;
		}

		.right_list_elem{
			font-size: 13px;
			float: left;
			color: grey;
				
		}

		.right-column-picture{
			margin: 2px;
			margin-top: 10px;
			margin-bottom: 10px;
			float: right;
			height: 20px;
			width: 20px;
			border-radius: 2px;
		}

		#buffer-button{
			background-color: #f2f2f2; 
			border: none;
			color: #4267B2;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 4px 2px;
			cursor: pointer;			
			float: left;		
			border-radius: 10px;
			padding-left: 10px;
			padding-right: 10px;			
			margin-right: 7px;			
			margin-bottom: 7px; 			
		}

		.event-picture{
			height:100%;			
			width: 50px;
			border-radius: 25px;	
			float:left; 
			clear:both;		
		}

		#event-button{
			background-color: #4267B2; 
			border: none;
			color: white;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 4px 2px;
			cursor: pointer;			
			float: left;			
			padding-left: 10px;
			padding-right: 10px;			
			margin-right: 7px;			
			margin-bottom: 7px; 	
			height:24px; 
			margin-top:3px;
			margin-left:5px;		
		}

		.right_list_sub-elem{
			margin:0px; 
			overflow:auto; 
			display:block; 
			padding-top: 3px; 
			padding-left: 5px;
		}

		.post-count{
			font-size: 18px; 
			width:45%; 
			display:block; 
			float:left; 	
			text-align: center;
		}

		.boost-button{
			background-color: #4267B2; 
			border: none;
			color: white;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 4px 2px;
			cursor: pointer;			
			float: left;			
			padding-left: 5px;
			padding-right: 5px;
			margin:0px;					
			margin-bottom: 7px; 	
			height:20px; 			
			margin-left: 33px;
			font-size:11px;
		}

		.search-elems{
			float:left; 
			
			margin-top:5px; 
			margin-left:4px;
		}

		.post-link{
			margin-bottom: 10px; 
			border-style:solid; 
			border-width:1px; 
			border-color:#dddfe2; 
			background:white;
		}

		.post-link:hover{
			border-color:grey;
			 
		}

		.post-text{
			padding-top:5px; 
			margin-top:12px; 
			margin-bottom:10px; 
			font-size:15px; 
			line-height: 1.2;
		}	

		#friends-column{
			
			float:right;
			width: 15%;
			padding-right:20px;

			border-color:#dddfe2; 
			border-width: 1px; 
			border-radius: 4px;
			border-style: solid;
			
			height:100vh;
			
		}

		#friend-search{
			width:40%;
			margin-right:30px;		
			margin: 0;
			border: 0;
			border-radius:0px;
			padding: 0;
			overflow: hidden;			
			float: left;
			
		}

		.search-friend-button{
			background-color: white;		
			height: 30px; 
			width: 30px; 
			border: none;
			color: white;
			padding: 3px;
			text-align: center;					
			cursor: pointer;			
			float: left;			
			padding-left: 8px;
			padding-right: 8px;		
		}
		#right-bottom{
			position: fixed;
			background:white;	
			bottom: 0;
			width:17%;
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
			<div class="group search-elems" >
				<input type="text" id="search" name="search" placeholder="Search Facebook">
				<button id="search-button"> <img  src="search.png" style="height:20px; border:0px;"> </button>
			</div>
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
				<ul class="group" style="background: #F6F7F9; padding: 0px;">
					
					<li style="float:left; font-size:13px; color: #4b4f56;">
						<img class="middle-column-picture" src="create-page.png"> 
						<a class="middle_list_elem"><b>Create a Post</b></a>
					</li>
					<li style="float:left;">
						<spam style="height: 20px; margin: 5px; border:0px; border-right:1px; border-style:solid; border-color:#ced0d4; float:left; "> </spam> 
					</li>
					<li style="float:left; margin:0px; font-size:13px; color: #5471a8">
						<img class="middle-column-picture" src="album.png"> 
						<a class="middle_list_elem"><b>Photo/Video Album</b></a>
					</li>
				</ul>	

				<div id="main-form" class="group">
					<img id="form-img" src="person.jpg">

					<textarea placeholder="What's on your mind?"></textarea>				

					<hr>
					
					<spam class="form-bottom group">
						<img class="middle-column-picture" src="camera.png"> 
						<spam class="middle_list_elem" style="margin-top: 6px;"><b>Photo/Video</b></spam>
					</spam>

					<spam class="form-bottom group">
						<img class="middle-column-picture" src="smile.png"> 
						<spam class="middle_list_elem" style="margin-top: 6px;"><b>Emotion</b></spam>
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
						<p class="post-text">
						Hello there!</p>	
					</div>

					<div>	
						<img class="post-photo" src="bird.jpg">
					</div>
					<div>
						
						<spam style="color: grey; font-size:14px; float: right; margin: 6px;">29 comments 82 shares</spam>
						<hr>
						<spam class="post-action"> Like </spam>
						<spam class="post-action"> Share </spam>
						<spam class="post-action"> Comment </spam> 
					</div>						
				</div> <!-- .post -->
				<div class="post group">
					<div class="group" style="margin-bottom: 5px;">
						<img class="post-person-img" src="mark.jpg">

						<p style="margin: 5px; margin-left:60px;"><spam style="color: blue;">Mark Zuckerberg</spam> Posted</p>
						<p style="margin: 5px; margin-left:60px;"><spam style="color: grey; font-size:14px">8 hr.</spam></p>
						<p class="post-text">
						Facebook is an American online social media and social 
						networking service company based in Menlo Park, California. 
						Its website was launched on February 4, 2004, by Mark Zuckerberg, 
						along with fellow Harvard College students and roommates Eduardo Saverin, 
						Andrew McCollum, Dustin Moskovitz, and Chris Hughes.</p>	
					</div>
					
					<div>
						
						<spam style="color: grey; font-size:14px; float: right; margin: 6px;">132451 comments 12313 shares</spam>
						<hr>
						<spam class="post-action"> Like </spam>
						<spam class="post-action"> Share </spam>
						<spam class="post-action"> Comment </spam> 
					</div>						
				</div> <!-- .post -->

				<div class="post group">
					<div class="group" style="margin-bottom: 5px;">
						<img class="post-person-img" src="jeffbezos.jpg">

						<p style="margin: 5px; margin-left:60px;"><spam style="color: blue;">Jeff Bezos</spam> Posted</p>
						<p style="margin: 5px; margin-left:60px;"><spam style="color: grey; font-size:14px">8 hr.</spam></p>
						<p class="post-text">
						Check out Amazon.com</p>	
					</div>

					<div class="post-link group">
						<img class="post-photo" src="amazon.jpg">
						<div >
							<h2 style="margin: 10px; margin-bottom:6px;">Amazon!</h2>
							<p style="padding-left:10px; font-size:14px; margin-top:6px; margin-bottom:6px;">Biggest only shop in the world.
							Here you can buy anything from aroud the globe. We will make sure that yoju will get your product fast and safe.
							Always to help you.</p>
							<p style="padding-left:10px; font-size:13px; margin-top:6px; margin-bottom:6px; color: grey;"> AMAZON.COM </p>
						</div>	
					</div>
					
					<div>
						
						<spam style="color: grey; font-size:14px; float: right; margin: 6px;">32124 comments 523213 shares</spam>
						<hr>
						<spam class="post-action"> Like </spam>
						<spam class="post-action"> Share </spam>
						<spam class="post-action"> Comment </spam> 
					</div>						
				</div> <!-- .post -->
			</div>	
		</div> <!-- #middle-column -->

		<div id="right-column" class="group">

			<div class="right-div group">

				<p class="right_list_elem">YOUR PAGES</p>
				<img class="right-column-picture" src="dropdown.png"> 

				<hr>
				<div>
					<img class="right-column-picture" style="float:left; height:28px; width:28px; margin:0px;" src="buffer.png">
					<button id="buffer-button" style="height:24px; margin-top:3px;">Buffer</button> 
					<p style="font-size: 12px; color: grey; float: left; margin-top: 7px;">20+ Messages</p>
					<img class="right-column-picture" style="margin-top:3px;" src="dropdown.png">
				</div><!-- your pages -->
				<hr>

				<p class="right_list_elem" >Create an Event for Your Page</p>
				<div style="clear: both;" class="group">
					<img class="event-picture"  src="calendar.png">
					<p class="right_list_sub-elem" style="font-size: 12px; "> 
					Make it easy for people to find your event. Create it on Facebook.</p>
					<button id="event-button">Cerate Event</button> 
				</div><!-- create event -->

				<hr>

				<p class="right_list_elem" >Leatest Unread Message</p>
				<p class="right_list_elem" style="float: right;" >8 hours ago</p>

				<div style="clear: both;" class="group">
					<img class="event-picture" style="border-radius:0px;" src="joe.png">
					<p class="right_list_sub-elem" style="font-size: 14px;  color:grey;"> 
					Joe Estes</p>
					<p class="right_list_sub-elem" style="font-size: 12px; "> 
					Which FB Page Templete did you use to...</p>
				</div> <!-- unread message -->

				<hr>	

				<p class="right_list_elem" >This weak</p>
			
				<div class="group" style="clear:both">
					<p class="right_list_sub-elem post-count" >55,995</p>
					<p class="right_list_sub-elem post-count" >3,795</p>
					<p class="right_list_sub-elem post-count" style="color:blue; font-size:13px;">Post Reach</p>
					<p class="right_list_sub-elem post-count" style="color:blue; font-size:13px;">People Engaged</p>
				</div> <!-- post counts for week -->

				<hr>

				<p class="right_list_elem" >Recent Posts</p>
				<div class="group" style="clear:both">
					<div  class="group" style="clear:both;">
						<img style="float:left; height:26px;" src="recent-post.jpg">
						<p class="right_list_sub-elem" style="font-size: 12px; padding:0px; padding-top:3px; color:blue;">
						A Nobel prize-winning physicist identified...</p>
					</div>					
					<button class="boost-button">Boost Post</button>

				</div>
				<div class="group" style="clear:both">
					<div  class="group" style="clear:both;">
						<img style="float:left; height:26px;" src="recent-post.jpg">
						<p class="right_list_sub-elem" style="font-size: 12px; padding:0px; padding-top:3px; color:blue;">
						Buffer co-founfers Joel &amp; Leo enjoing...</p>
					</div>					
					
				</div>

			</div><!--.right-div group--> 

		</div> <!-- #right-column -->
		
		<div id="friends-column" class="group">	
			<p>adsadsads
			adsadsadsads
			adsadsadsads
			adsadsadsads
			adsadsadsaddas
			
			adsadsads</p>	

			<div id="right-bottom" class="group">
				<button class="search-friend-button"> <img  src="search.png" style="height:15px; border:0px;"> </button>
				<input type="text" id="friend-search" name="friend-search" placeholder="Search">
				<button class="search-friend-button" style="float:right; margin-right:4px;"> <img  src="cog.png" style="height:15px; border:0px;"> </button>
			</div>
		</div> <!-- #friends-column -->

	</div> <!-- #content -->

  </body>
		

</html>
