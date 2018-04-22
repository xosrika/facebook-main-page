<!DOCTYPE html>

<html lang="en-US">
  <head>
  	<link rel="stylesheet" href="styles.css">
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
			<a text-align="center" href="index.php" style="display: block;" class="bla">Alfred</a>			
			<img id="person" src="person.jpg">
			
		</div> <!-- #right-bar -->

	</div> <!-- #navbar -->

	<div id="content"> 	

		<div id="left-column" class="group">

			<a href="#">
				<div id="user-content" class="group" style="margin-bottom: 10px">
					<img class="left-column-picture" src="person.jpg">
					<span style="float: left;">Alfred Lua</span>
				</div> <!-- #user column -->
			</a>

			<a href="#">
				<div id="news-feed" class="group">
					<img class="left-column-picture" src="news-feed.jpeg">
					<span style="float: left;" class="left-list-elem"><b>News Feed</b></span>
				</div> <!-- #news feed -->
			</a>

			<a href="#">
				<div id="left-messages" class="group">
					<img class="left-column-picture" src="messages-left.jpg">
					<span style="float: left;" class="left-list-elem">Messages</span>
				</div><!-- #left messages -->
			</a>

			<span class="left-label">shortcuts</span>


			<ul>
				<a href="#">				
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="group.png"> 
							<span class="left-list-elem">OS group</span>
						</div>
					</li>
				</a>	

				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="group.png">
							<span class="left-list-elem">Frontend Stuff</span>
						</div>
					</li>
				</a>

				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="group.png"> 
							<span class="left-list-elem">Korkot Mishvele</span>
						</div>
					</li>
				</a>
			</ul> <!-- #shortcuts -->

			
			<span class="left-label">explore</span>

			<ul>				
				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="pages.jpg"> 
							<span class="left-list-elem">Pages</span>
						</div>
					</li>
				</a>	


				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="group.png">				 
							<span class="left-list-elem">Groups</span>
						</div>
					</li>
				</a>	


				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="events.png"> 
							<span class="left-list-elem">Events</span>
						</div>
					</li>
				</a>


				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="friends-list.jpg"> 
							<span class="left-list-elem">Friends List</span>	
						</div>		
					</li>
				</a>

				<a href="#">
					<li style="clear: both;">
						<div>
							<img class="left-column-picture" src="dropdown.png"> 
							<span style="color: blue;" class="left-list-elem">See More...</span>
						</div>
					</li>
				</a>
			</ul> <!-- #explore -->

			<span class="left-label">create</span>

			
			<div id="create" class="group">
				<a href="#">Ad</a>
				<span class="dot"> </span>
				<a href="#">Page</a>
				<span class="dot"> </span>
				<a href="#">Group</a>
				<span class="dot"> </span>
				<a href="#">Event</a>
			</div> <!-- #create -->


		</div> <!-- #left-column -->

		<div id="middle-column" class="group">
			<form id="post-form" class="group">
				<ul class="group">	
					<a href="#">				
						<li class="form-header"style="color: #4b4f56;">
							<img class="middle-column-picture" src="create-page.png"> 
							<b class="middle-list-elem">Create a Post</b>
						</li>
					</a>	
					
					<li style="float:left;">
						<span class="border"> </span> 
					</li>

					<a href="#">
						<li class="form-header"style="color: #5471a8">
							<img class="middle-column-picture" src="album.png"> 
							<b class="middle-list-elem">Photo/Video Album</b>
						</li>
					</a>	
				</ul>	

				<div id="main-form" class="group">
					<img id="form-img" src="person.jpg">

					<textarea placeholder="What's on your mind?"></textarea>				

					<hr>
					
					<a href="#">
						<span class="form-bottom group">
							<img class="middle-column-picture" src="camera.png"> 
							<span class="middle-list-elem" style="margin-top: 6px;"><b>Photo/Video</b></span>
						</span>
					</a>	

					<a href="#">
						<span class="form-bottom group">
							<img class="middle-column-picture" src="smile.png"> 
							<span class="middle-list-elem" style="margin-top: 6px;"><b>Emotion</b></span>
						</span>
					</a>	

					<hr>

					<button id="main-form-button">Post</button>
				</div> <!-- #main-form -->
			</form> <!-- #post-form -->

			<div id="middle-content"> 
				<div class="post group">
					<div class="group" style="margin-bottom: 5px;">
						<img class="post-person-img" src="person.jpg">

						<p class="post-title-paragraph">
							<span class="post-author-name">Someone</span> 
							Posted a Photo
						</p>
						<p class="post-title-paragraph"><span class="post-date">6 hr.</span></p>
						<p class="post-text">
						Hello there!</p>	
					</div>

					<div>	
						<img class="post-photo" src="bird.jpg">
					</div>
					<div>
						
						<span class="post-comment-and-shares">29 comments 82 shares</span>
						<hr>
						<span class="post-action"> Like </span>
						<span class="post-action"> Share </span>
						<span class="post-action"> Comment </span> 
					</div>						
				</div> <!-- .post -->
				<div class="post group">
					<div class="group" style="margin-bottom: 5px;">
						<img class="post-person-img" src="mark.jpg">

						<p class="post-title-paragraph">
							<span class="post-author-name">Mark Zuckerberg</span> 
							Posted
						</p>
						<p class="post-title-paragraph"><span class="post-date">8 hr.</span></p>
						<p class="post-text">
							Facebook is an American online social media and social 
							networking service company based in Menlo Park, California. 
							Its website was launched on February 4, 2004, by Mark Zuckerberg, 
							along with fellow Harvard College students and roommates Eduardo Saverin, 
							Andrew McCollum, Dustin Moskovitz, and Chris Hughes.
						</p>	
					</div>
					
					<div>
						
						<span class="post-comment-and-shares">132451 comments 12313 shares</span>
						<hr>
						<span class="post-action"> Like </span>
						<span class="post-action"> Share </span>
						<span class="post-action"> Comment </span> 
					</div>						
				</div> <!-- .post -->

				<div class="post group">
					<div class="group" style="margin-bottom: 5px;">
						<img class="post-person-img" src="jeffbezos.jpg">

						<p class="post-title-paragraph">
							<span class="post-author-name">Jeff Bezos</span> 
							Posted
						</p>
						<p class="post-title-paragraph"><span class="post-date">8 hr.</span></p>
						<p class="post-text">
						Check out Amazon.com</p>	
					</div>

					<a href="https://www.amazon.com/">
						<div class="post-link group">
							<img class="post-photo" src="amazon.jpg">
							
							<div >
								<h2 class="post-link-title">Amazon!</h2>
								<p class="post-link-text">
									Biggest only shop in the world.
									Here you can buy anything from aroud the globe. We will make 
									sure that yoju will get your product fast and safe.
									Always to help you.
								</p>
								<p class="post-link-address"> AMAZON.COM </p>
							</div>	
							
						</div>
					</a>
						
					<div>
						
						<span class="post-comment-and-shares">32124 comments 523213 shares</span>
						<hr>
						<span class="post-action"> Like </span>
						<span class="post-action"> Share </span>
						<span class="post-action"> Comment </span> 
					</div><!-- .post-lick -->						
				</div> <!-- .post -->
			</div> <!-- #middle-content -->	
		</div> <!-- #middle-column -->

		<div id="right-column" class="group">

			<div class="right-div group">

				<p class="right-list-elem">YOUR PAGES</p>
				<img class="right-column-dropdown" src="dropdown.png"> 

				<hr>
				<div>
					<img class="right-column-buffer" src="buffer.png">
					<button id="buffer-button">Buffer</button> 
					<p class="right-column-buffer-text">20+ Messages</p>
					<img class="right-column-dropdown" style="margin-top:3px;" src="dropdown.png">
				</div><!-- your pages -->
				<hr>

				<p class="right-list-elem" >Create an Event for Your Page</p>
				<div style="clear: both;" class="group">
					<img class="event-picture"  src="calendar.png">
					<p class="right-list-sub-elem" > 
					Make it easy for people to find your event. Create it on Facebook.</p>
					<button id="event-button">Cerate Event</button> 
				</div><!-- create event -->

				<hr>

				<p class="right-list-elem" >Leatest Unread Message</p>
				<p class="right-list-elem" style="float: right;" >8 hours ago</p>

				<div style="clear: both;" class="group">
					<img class="event-picture" style="border-radius:0px;" src="joe.png">
					<p class="right-list-sub-elem" style="font-size: 14px; color:grey;"> 
					Joe Estes</p>
					<p class="right-list-sub-elem" > 
					Which FB Page Templete did you use to...</p>
				</div> <!-- unread message -->

				<hr>	

				<p class="right-list-elem" >This weak</p>
			
				<div class="group" style="clear:both">
					<p class="right-list-sub-elem post-count" >55,995</p>
					<p class="right-list-sub-elem post-count" >3,795</p>
					<p class="right-list-sub-elem post-count-name" >Post Reach</p>
					<p class="right-list-sub-elem post-count-name" >People Engaged</p>
				</div> <!-- post counts for week -->

				<hr>

				<p class="right-list-elem" >Recent Posts</p>

				<div id="recent-posts">
					<div class="group" style="clear:both">
						<div  class="group" style="clear:both;">
							<img class="left-post-logo" src="recent-post.jpg">
							<a href="#">
									<p class="right-list-sub-elem right-list-post-link">
										A Nobel prize-winning physicist identified...
									</p>
							</a>
						</div>					
						<button class="boost-button">Boost Post</button>
					</div>

					<div class="group" style="clear:both">
						<div  class="group" style="clear:both;">
							<img class="left-post-logo" src="recent-post.jpg">
							<a href="#">
								<p class="right-list-sub-elem right-list-post-link">
									Buffer co-founfers Joel &amp; Leo enjoing...
								</p>
							</a>	
						</div>						
					</div>
				</div> <!-- #recent-posts --> 	

			</div><!--.right-div group--> 

		</div> <!-- #right-column -->
		
		<div id="friends-column" class="group">	
			
			<div id="friends-column-content">
				<div class="friends-games group">
					<div>
						<span class="friend-column-label">
							flash games
						</span>	
						<span class="friend-column-label-little">
							more
						</span>	
						<div class="friends-games-list group">
							<img class="friends-game-arrow" src="arrow-left.png">
							<img class="friends-game-img" src="flash-game-1.jpg">
							<img class="friends-game-img" src="flash-game-1.jpg">
							<img class="friends-game-img" src="flash-game-1.jpg">
							<img class="friends-game-arrow" src="arrow-right.png">	
						</div><!-- #friend-games-list -->
					</div>		
					<hr>
					<div>
						<span class="friend-column-label">
							recomended games
						</span>	
						<span class="friend-column-label-little">
							more
						</span>	
						<div class="friends-games-list group">
							<img class="friends-game-arrow" src="arrow-left.png">
							<img class="friends-game-img" src="flash-game-1.jpg">
							<img class="friends-game-img" src="flash-game-1.jpg">
							<img class="friends-game-img" src="flash-game-1.jpg">
							<img class="friends-game-arrow" src="arrow-right.png">	
						</div><!-- #friend-games-list -->
					</div> 		
				</div> <!-- #friend-games -->
				
				<div id="friend-list">
					<div class="friend-list-elem">
						<img class="friend-list-elem-img" src="joe.png">
						<span class="friend-list-elem-name">Joe Estes</span>
						<span class="friend-list-elem-time">2 min</span>
					</div>	


				</div><!-- #friend-list -->		



			</div><!-- #friends-column-content -->




			<div id="friend-search" class="group">
				
				<button class="search-friend-button"> 
					<img class="search-button" src="search.png"> 
				</button>
				
				
				<input type="text" id="friend-search" name="friend-search" placeholder="Search" style="width:50px;">

				<button class="search-friend-button" style="float:right; margin-right:12px;"> 
					<img class="search-button" style="float:right" src="cog.png"> 
				</button>				
				
			</div><!-- #friend-search -->
		</div> <!-- #friends-column -->

	</div> <!-- #content -->

  </body>
		

</html>
