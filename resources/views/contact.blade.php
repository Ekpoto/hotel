@include('layouts.nav')

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/hotel5.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Don't be shy</span>
							<h1>Get In Touch</h1> <hr>
							<pre> for more info please fill in our form</pre>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>


	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" id="name" class="form-control" placeholder="Your firstname">
							</div>

						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">No 3 James Igbe Close, <br>Olodi Apapa Lagos</li>
							<li class="phone"><a href="tel://1234567920">08160894221</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">idomatthew@gmail.com</a></li>
							<li class="url"><a href="https://ekpotoblog.blogspot.com.ng/">Blog</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.footer')
	</body>
</html>

