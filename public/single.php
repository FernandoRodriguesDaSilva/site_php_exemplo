<!-- Segurança de login na página -->
<?php
session_start();
if (!isset($_SESSION["user_portal"])) {
	header("location:login.php");
}?>

<?php include_once "incluir/header.php";?>
<!-- banner -->
<div class="banner">
	<div class="bnr2">
	</div>
</div>
<!---->
<div class="blog">
	<div class="container">
		<div class="col-md-8 blog-left" >
			<div class="blog-info">
				<div class="blog-info-text">
					<div class="blog-img">
						<img src="images/img12.jpg" alt=""/>
					</div>
					<p class="snglp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor If you are going to use a passage of Lorem Ipsum,
						you need to be sure there isn't anything embarrassing hidden in the middle of text.
						There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
					you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
						in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
					you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				</div>
				<div class="comment-icons">
					<ul>
						<li><span></span><a href="#">Lorem ipsum dolor sit</a> </li>
						<li><span class="clndr"></span>MARCH 1, 2013</li>
						<li><span class="admin"></span> <a href="#">Admin</a></li>
						<li><span class="cmnts"></span> <a href="#">5 comments</a></li>
						<li><a href="#" class="like">15</a></li>
					</ul>
				</div>
				<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/icon1.png" alt=""/>
							</a>
							<h5><a href="#">Admin</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>MARCH 21, 2013</li>
								<li><a href="single.html">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/icon1.png" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et.</p>
									<ul>
										<li>MARCH 21, 2014</li>
										<li><a href="single.html">Reply</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/icon1.png" alt=""/>
							</a>
							<h5><a href="#">Admin</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>MARCH 21, 2013</li>
								<li><a href="single.html">Reply</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="coment-form">
				<h4>Leave your comment</h4>
				<form>
					<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" value="Subject " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
					<input type="text" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
					<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
					<input type="submit" value="SUBMIT" >
				</form>
			</div>
		</div>
		<div class="col-md-4 single-page-right">
			<div class="category blog-ctgry">
				<h4>Top Games</h4>
				<div class="list-group">
					<a href="single.html" class="list-group-item">Cras justo odio</a>
					<a href="single.html" class="list-group-item">Dapibus ac facilisis in</a>
					<a href="single.html" class="list-group-item">Morbi leo risus</a>
					<a href="single.html" class="list-group-item">Porta ac consectetur ac</a>
					<a href="single.html" class="list-group-item">Vestibulum at eros</a>
					<a href="single.html" class="list-group-item">Cras justo odio</a>
					<a href="single.html" class="list-group-item">Cras justo odio</a>
					<a href="single.html" class="list-group-item">Cras justo odio</a>
				</div>
			</div>
			<div class="recent-posts">
				<h4>Recent posts</h4>
				<div class="recent-posts-info">
					<div class="posts-left sngl-img">
						<a href="single.html"> <img src="images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
					</div>
					<div class="posts-right">
						<label>March 5, 2015</label>
						<h5><a href="single.html">Finibus Bonorum</a></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
						<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="recent-posts-info">
					<div class="posts-left sngl-img">
						<a href="single.html"> <img src="images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
					</div>
					<div class="posts-right">
						<label>March 1, 2015</label>
						<h5><a href="single.html">Finibus Bonorum</a></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
						<a href="single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- footer -->
<?php include_once "incluir/footer.php";?>