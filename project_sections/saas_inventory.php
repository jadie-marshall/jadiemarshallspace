		<div class="project" id="saas">
			<div class="container">
				<h2>SaaS Sailing Inventory System</h2>
				<h3>Course: Software Engineering</h3>
				<div class="slidewrapper">
					<div class="flexslider long">
						<!--Flexslider created by WooCommerce -->
						<ul class="slides">
							<li>
								<img src="pics/adminView.png" title="Inventory Admin View" alt="inventory system portal showing admin view" />
							</li>
							<li>
								<img src="pics/memberView.png" title="Inventory Member View" alt="Inventory system portal showing member view" />
							</li>
							<li>
								<img src="pics/itemDetail.png" title="Inventory Item Detail" alt="Inventory system portal showing item detail" />
							</li>
							<li>
								<img src="pics/signInUp.png" title="Inventory Sign In and Sign Up Views" alt="Inventory system portal showing sign in and sign up views" />
							</li>
						</ul>
					</div>
				</div>

				<h3><button class="accordion">Project Description</button></h3>
				<div class="panel">
					<p>&emsp;For this course, teams were challenged to find a client in the Bryan/College Station area, either a non-profit or organization. My team identified the Texas A&M Sailing
						Team as a potential client. The Sailing Team had been relying upon a paper inventory system up to that point in time. The previous summer, the team's storage shed at Lake Bryan
						had been broken into, which prompted a need to do a full inventory of the available equipment. Along with the larger items that were stolen or broken, the team found that many
						small items that were checked out to individuals were missing (things such as oars and life jackets that were less likely to be stolen than the more expensive items). As a result
						of these inventory discrepancies, the team was interested in moving to a new inventory system that would be easier to track inventory and who has checked out items than the paper system.
						<br><br>&emsp;The backend of this project was built in Ruby on Rails. This consisted of the inventory database itself and the admin vs member access rules. The frontend was a
						web portal written using HTML, CSS, JavaScript, and PHP. The project was deployed to Heroku using their Git-linked deployment terminal- based toolkit.
						<br><br>&emsp;Our key features were: keeping track of inventory items and their status, adding, removing, and editing items to the database, sort the table on the web portal
						side, having an Admin and Member views (so that Sailing team sponsors and officers were able to have more control over the inventory system than regular members), reporting
						broken or missing items, and an email Admin notification system. â€ƒ Our biggest struggle was in the email notification system. We were using an API for this purpose, but during
						our testing, our automated test cases caused the API source to put a hold on the account for "suspicious activity". This was resolved, after contact with the API dev team.
						<br><br>&emsp;We restricted user signup to only allowing a new user to sign up as a member. Admin users have access to user management and can promote and demote users between
						Admin and Member status. This does introduce a potential security issue in that there is no safeguard against a "troll" account demoting all Admin users but themselves.
						This security flaw was stressed to our client, making clear that adding any Admin users should be done with extreme caution and the Admin "team" verifying that new account's
						information with the person they are promoting. Future work on this project would focus on patching this security hole first.
						<br><br>&emsp;The team utilized GitHub for source management. As team members contributed to the development of features, we would each create a fork off the main project for
						each feature added. Testing and development were done on virtual machines, team members using a mix of Cloud9, AWS, and Windows Hyper-V virtual machines running Ubuntu.
						Automated testing was run on each commit and merge, so that no new addition introduced bugs to previously functional code. We used Agile and Scrum methodologies for sprints
						in this project, being able to deploy new features as soon as they could be tested. We used RSpec and Cucumber to run BDD tests, as well as running functionality tests by
						interacting with the software in production and development environments. RSpec is a BDD testing tool written specifically for Ruby and Ruby on Rails. Cucumber allows the
						writing of test cases to be more in "real English" for feedback, which makes it extremely helpful to see if the features we implemented fulfilled the stated needs of that feature.
					</p>
					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>

				</div>

				<h3><button class="accordion">Languages and Skills</button></h3>
				<div class="panel">
					<ul>
						<li>Ruby on Rails</li>
						<li>SQL</li>
						<li>HTML</li>
						<li>CSS</li>
						<li>JavaScript</li>
						<li>Software as a System (SaaS)</li>
						<li>RSpec</li>
						<li>Cucumber</li>
						<li>Git/GitHub</li>
						<li>Heroku</li>
						<li>Agile Methodology</li>
						<li>Scrum Teams</li>
						<li>Iterative Development</li>
						<li>Behavioral Driven Development (BDD)Testing</li>
					</ul>

					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>
				</div>

			</div>
		</div> <!--End of SAAS Project-->
