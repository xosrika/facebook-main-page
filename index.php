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
			<img id="logo" src="images\logo1.png">
			<div class="group search-elems" >
				<input type="text" id="search" name="search" placeholder="Search Facebook">
				<button id="search-button"> <img  src="images\search.png" id="search-button-img"> </button>
			</div>
		</form> <!-- #left-bar -->
		<div id="right-bar">		
			<img id="bar-dropdown" src="images\dropdownheader.png">
			<img id="help" src="images\help.png">
			<span class="navbar-line"></span>
			<img id="globe" src="images\globe.png">
			<img id="messages" src="images\messenger.png">
			<img id="friend-req" src="images\friendrequest.png">
			
			<a href="index.php">Fiend Friends</a>
			<span class="navbar-line"></span>
			<a href="index.php">Home</a>
			<span class="navbar-line"></span>	
			<a href="index.php" >Giorgi</a>			
			<img id="person" src="images\person.jpg">
			
		</div> <!-- #right-bar -->

	</div> <!-- #navbar -->

	<div id="content"> 	

		<div id="left-column" class="group">

			<a href="#">
				<div id="user-content" class="group" >
					<img class="left-column-picture" src="images\person.jpg">
					<span class="left" >Giorgi Khosroshvili</span>
				</div> <!-- #user column -->
			</a>

			<a href="#">
				<div id="news-feed" class="group">
					<img class="left-column-picture" src="images\news-feed.jpeg">
					<span class="left-list-elem left"><b>News Feed</b></span>
				</div> <!-- #news feed -->
			</a>

			<a href="#">
				<div id="left-messages" class="group">
					<img class="left-column-picture" src="images\messages-left.jpg">
					<span class="left-list-elem left">Messages</span>
				</div><!-- #left messages -->
			</a>

			<span class="left-label">shortcuts</span>


			<ul>
				<a href="#">				
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\group.png"> 
							<span class="left-list-elem">OS group</span>
						</div>
					</li>
				</a>	

				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\group.png">
							<span class="left-list-elem">Frontend Stuff</span>
						</div>
					</li>
				</a>

				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\group.png"> 
							<span class="left-list-elem">Korkot Mishvele</span>
						</div>
					</li>
				</a>
			</ul> <!-- #shortcuts -->

			
			<span class="left-label">explore</span>

			<ul>				
				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\pages.jpg"> 
							<span class="left-list-elem">Pages</span>
						</div>
					</li>
				</a>	


				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\group.png">				 
							<span class="left-list-elem">Groups</span>
						</div>
					</li>
				</a>	


				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\events.png"> 
							<span class="left-list-elem">Events</span>
						</div>
					</li>
				</a>


				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\friends-list.jpg"> 
							<span class="left-list-elem">Friends List</span>	
						</div>		
					</li>
				</a>

				<a href="#">
					<li class="left-list-li">
						<div>
							<img class="left-column-picture" src="images\dropdown.png"> 
							<span class="left-list-elem left-column-more-color">See More...</span>
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
						<li class="form-header form-header-active">
							<img class="middle-column-picture" src="images\create-page.png"> 
							<b class="middle-list-elem">Create a Post</b>
						</li>
					</a>	
					
					<li class="form-header">
						<span class="border"> </span> 
					</li>

					<a href="#">
						<li class="form-header">
							<img class="middle-column-picture" src="images\album.png"> 
							<b class="middle-list-elem">Photo/Video Album</b>
						</li>
					</a>
					<li class="form-header">
						<span class="border"> </span> 
					</li>

					<a href="#">
						<li class="form-header">
							<img class="middle-column-picture" src="images\live.png"> 
							<b class="middle-list-elem">Live Video</b>
						</li>
					</a>		
				</ul>	

				<div id="main-form" class="group">
					<img id="form-img" src="images\person.jpg">

					<textarea placeholder="What's on your mind?"></textarea>				

					<hr>
					
					<a href="#">
						<span class="form-bottom group">
							<img class="middle-column-picture" src="images\camera.png"> 
							<span class="middle-list-elem" ><b>Photo/Video</b></span>
						</span>
					</a>	

					<a href="#">
						<span class="form-bottom group">
							<img class="middle-column-picture" src="images\smile.png"> 
							<span class="middle-list-elem" ><b>Emotion</b></span>
						</span>
					</a>	

					<hr>

					<button id="main-form-button">Post</button>
				</div> <!-- #main-form -->
			</form> <!-- #post-form -->

			<div id="middle-content"> 
				<div class="post group">
					<div class="group post-header post-elem">
						<img class="post-person-img" src="images\person.jpg">

						<p class="post-title-paragraph">
							<span class="post-author-name">Someone</span> 
							Posted a Photo
						</p>
						<p class="post-title-paragraph"><span class="post-date">6 hr.</span></p>
						<p class="post-text">
						Hello there!</p>	
					</div>

					<div class="post-elem">	
						<img class="post-photo" src="images\bird.jpg">
					</div>
					<div class="post-elem post-footer group">
						
						<span class="post-comment-and-shares">29 comments 82 shares</span>
						<hr>
						<div class="post-actions ">
							<span class="post-action"> Like </span>
							<span class="post-action"> Share </span>
							<span class="post-action"> Comment </span> 
						</div>
					</div>

					<div class="comments group post-elem">
						<div class="comments-header group">
							<img class='comments-header-img left' src="images\like.png">
							<span class="left">7 Likes</span>
							
							<span class="right">Seen by 20</span>
							<img class='comments-header-img right' src="images\checked.png">
						</div>
						<hr>
						<div class="comment group">
							<img class="comment-person-image" src="images\person.jpg">
							<span class="comment-text group"> 
								<span class="comment-text-author">Someone</span>	
								I Love this bird <3
							</span>
							<div class="group comment-actions">								
								<span>Like</span>
								<span class="comment-dot"></span>
								<span>Reply</span>
								<span class="comment-dot"></span>
								<span>1 hour</span>
							</div>
						</div><!--comment-->

						<div class="comment group">
							<img class="comment-person-image" src="images\popkha.jpg">
							<span class="comment-text group"> 
								<span class="comment-text-author">Irakli Popkhadze</span>	
								რა ჩიტია, რა ჩიტი.
							</span>
							<div class="group comment-actions">								
								<span>Like</span>
								<span class="comment-dot"></span>
								<span>Reply</span>
								<span class="comment-dot"></span>
								<span>30 min</span>
							</div>
						</div><!--comment-->
						<div class="comment group">
							<img class="comment-person-image" src="images\vache.jpg">
							<span class="comment-text group"> 
								<span class="comment-text-author">Vache Katsadze</span>	
								ჩიტო გვრიტო, მარგალიტო.
							</span>
							<div class="group comment-actions">								
								<span>Like</span>
								<span class="comment-dot"></span>
								<span>Reply</span>
								<span class="comment-dot"></span>
								<span>20 min</span>
							</div>
						</div><!--comment-->
						<div class="comment group">
							<img class="comment-person-image" src="images\cero.jpg">
							<span class="comment-text group"> 
								<span class="comment-text-author">Giorgi Cercvadze</span>	
								რა ჩიტი აგიტყდათ ამხელა ხალხს.
							</span>
							<div class="group comment-actions">								
								<span>Like</span>
								<span class="comment-dot"></span>
								<span>Reply</span>
								<span class="comment-dot"></span>
								<span>10 min</span>
							</div>
						</div><!--comment-->

						<div class="comment group">
							<img class="comment-person-image" src="images\person.jpg">
							<span class="comment-write group"> 
								<input type="text" class="comment-write-input" name="friend-search" placeholder="Write a comment...">
								
								<img class='comment-write-img right' src="images\gif.png">
								<img class='comment-write-img right' src="images\photo.png">
								<img class='comment-write-img right' src="images\emoji.png">
							</span>
							
						</div><!--comment-->
					</div> <!--comments-->

				</div> <!-- .post -->
				<div class="post group">
					<div class="group post-header post-elem" >
						<img class="post-person-img" src="images\mark.jpg">

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
					
					<div class="post-elem post-footer group">
						
						<span class="post-comment-and-shares">132451 comments 12313 shares</span>
						<hr>
						<div class="post-actions">
							<span class="post-action"> Like </span>
							<span class="post-action"> Share </span>
							<span class="post-action"> Comment </span> 
						</div>
					</div>						
				</div> <!-- .post -->

				<div class="post group">
					<div class="group post-header post-elem">
						<img class="post-person-img" src="images\jeffbezos.jpg">

						<p class="post-title-paragraph">
							<span class="post-author-name">Jeff Bezos</span> 
							Posted
						</p>
						<p class="post-title-paragraph"><span class="post-date">8 hr.</span></p>
						<p class="post-text">
						Check out Amazon.com</p>	
					</div>

					<div class="post-elem">
						<a href="https://www.amazon.com/" >
							<div class="post-link group">
								<img class="post-photo" src="images\amazon.jpg">
								
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
					</div>
						
					<div class="post-elem post-footer group">
						
						<span class="post-comment-and-shares">32124 comments 523213 shares</span>
						<hr>
						<div class="post-actions group">
							<span class="post-action"> Like </span>
							<span class="post-action"> Share </span>
							<span class="post-action"> Comment </span> 
						</div>
					</div>					
				</div> <!-- .post -->
			</div> <!-- #middle-content -->	
		</div> <!-- #middle-column -->

		<div id="right-column" class="group">
			
			<div class="right-div group">
				<p class="right-list-elem"><b>STORIES</b></p>
				<a href="#"> 
					<p class="right-list-elem right"> <b>
						<span class="right-list-dots"> </span>
						<span class="right-list-dots"> </span>
						<span class="right-list-dots"> </span>
					</b></p>
				</a>
				<div class="story group" >
					<img class="story-picture" src="images\vache.jpg">
					<p class="story-author">Vache Katsadze</p>
					<p class="story-time" >10 hours ago</p>
				</div>

				<div class="story group">
					<img class="story-picture" src="images\cero.jpg">
					<p class="story-author">Giorgi Cercvadze</p>
					<p class="story-time" >1 hour ago</p>
				</div>

				<div class="story group">
					<img class="story-picture"  src="images\popkha.jpg">
					<p class="story-author">Irakli Popkhadze</p>
					<p class="story-time">4 hours ago</p>
				</div>

				<div class="group">
					<img class="right-column-dropdown left" src="images\dropdown.png" >
					<p class="see-more">See more</p>
				</div>
			</div>	<!--.right-div group-->

			<div class="right-div group">

				<p class="right-list-elem">YOUR PAGES</p>
				<img class="right-column-dropdown" src="images\dropdown.png"> 

				<hr>
				<div>
					<img class="right-column-buffer" src="images\buffer.png">
					<button id="buffer-button">Buffer</button> 
					<p class="right-column-buffer-text">20+ Messages</p>
					<img class="right-column-dropdown-buffer" src="images\dropdown.png">
				</div><!-- your pages -->
				<hr>

				<p class="right-list-elem" >Create an Event for Your Page</p>
				<div class="group alone-line">
					<img class="event-picture"  src="images\calendar.png">
					<p class="right-list-sub-elem" > 
					Make it easy for people to find your event. Create it on Facebook.</p>
					<button id="event-button">Cerate Event</button> 
				</div><!-- create event -->

				<hr>

				<p class="right-list-elem" >Leatest Unread Message</p>
				<p class="right-list-elem right">8 hours ago</p>

				<div  class="group alone-line">
					<img class="event-picture" src="images\joe.png">
					<p class="right-list-sub-elem-name"> 
					Joe Estes</p>
					<p class="right-list-sub-elem" > 
					Which FB Page Templete did you use to...</p>
				</div> <!-- unread message -->

				<hr>	

				<p class="right-list-elem" >This weak</p>
			
				<div class="group alone-line">
					<p class="right-list-sub-elem post-count" >55,995</p>
					<p class="right-list-sub-elem post-count" >3,795</p>
					<p class="right-list-sub-elem post-count-name" >Post Reach</p>
					<p class="right-list-sub-elem post-count-name" >People Engaged</p>
				</div> <!-- post counts for week -->

				<hr>

				<p class="right-list-elem" >Recent Posts</p>

				<div id="recent-posts">
					<div class="group alone-line" >
						<div  class="group alone-line">
							<img class="left-post-logo" src="images\recent-post.jpg">
							<a href="#">
									<p class="right-list-sub-elem right-list-post-link">
										A Nobel prize-winning physicist identified...
									</p>
							</a>
						</div>					
						<button class="boost-button">Boost Post</button>
					</div>

					<div class="group alone-line">
						<div  class="group alone-line">
							<img class="left-post-logo" src="images\recent-post.jpg">
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
							<img class="friends-game-arrow" src="images\arrow-left.png">
							<img class="friends-game-img" src="images\flash-game-4.jpg">
							<img class="friends-game-img" src="images\flash-game-5.jpg">
							<img class="friends-game-img" src="images\flash-game-6.jpg">
							<img class="friends-game-arrow" src="images\arrow-right.png">	
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
							<img class="friends-game-arrow" src="images\arrow-left.png">
							<img class="friends-game-img" src="images\flash-game-1.jpg">
							<img class="friends-game-img" src="images\flash-game-2.jpg">
							<img class="friends-game-img" src="images\flash-game-3.jpg">
							<img class="friends-game-arrow" src="images\arrow-right.png">	
						</div><!-- #friend-games-list -->
					</div> 		
				</div> <!-- #friend-games -->
				
				<div id="friend-list">
					<div class="friend-list-elem group">
						<img class="friend-list-elem-img" src="images\joe.png">
						<span class="friend-list-elem-name">Joe Estes</span>
						<span class="friend-list-elem-time">1 min</span>
					</div>	
					<div class="friend-list-elem group">
						<img class="friend-list-elem-img" src="images\cero.jpg">
						<span class="friend-list-elem-name">Giorgi Cercvadze</span>
						<span class="friend-list-elem-online"> </span>
					</div>	

					<div class="friend-list-elem group">
						<img class="friend-list-elem-img" src="images\popkha.jpg">
						<span class="friend-list-elem-name">Irakli Popkhadze</span>
						<span class="friend-list-elem-online"> </span>
					</div>	
					<div class="friend-list-elem group">
						<img class="friend-list-elem-img" src="images\vache.jpg">
						<span class="friend-list-elem-name">Vache Katsadze</span>
						<span class="friend-list-elem-time">30 min</span>
					</div>	
					

				</div><!-- #friend-list -->		



			</div><!-- #friends-column-content -->

			<div id="friend-search" class="group">
				
				<button class="search-friend-button-glass"> 
					<img class="search-button" src="images\search.png"> 
				</button>
				
				
				<input type="text" id="friend-search-area" name="friend-search" placeholder="Search">

				<button class="search-friend-button-cog" > 
					<img class="search-button right"  src="images\cog.png"> 
				</button>				
				
			</div><!-- #friend-search -->
		</div> <!-- #friends-column -->

	</div> <!-- #content -->

  </body>
		

</html>
