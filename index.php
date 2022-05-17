<!doctype html>
<html>
	<head>
		<title>Home page</title>
		<script src="js/index.js"></script>
		<link href="css/index.css" rel="stylesheet">
	</head>
	<body>
		<?php include("header.html")?>
		<div style="background: url(images/background.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: 100% 600px;height: 650px;"></div>
		<div class="pageContent">
			<section class="teamSectionMembers">
				<div class="teamTitle">Team Work</div>
				<div class="firstTeamRow">
					<div class="divSpace">
						<div class="firstDoctor" onMouseOver="memberInfoVisible('firstDr')" onMouseOut="memberInfoHidden('firstDr')">
							<img src="images/members/firstPerson.jpg">
							<div class="doctorInfo" id="firstDr">
								<span>
									Doctor hanan<br>
									IS Major
								</span>
							</div>
						</div>
					</div>
					<div class="divSpace">
						<div class="firstDoctor"  onMouseOver="memberInfoVisible('secondDr')" onMouseOut="memberInfoHidden('secondDr')">
							<img src="images/members/secondPerson.jpg">
							<div class="doctorInfo" id="secondDr">
								<span>
									Doctor Doaa<br>
									CS Major
								</span>
							</div>
						</div>
					</div>
					<div class="divSpace">
						<div class="firstDoctor"  onMouseOver="memberInfoVisible('thirdDr')" onMouseOut="memberInfoHidden('thirdDr')">
							<img src="images/members/thirdPerson.jpg">
							<div class="doctorInfo" id="thirdDr">
								<span>
									Doctor Mohamed<br>
									CS Major
								</span>
							</div>
						</div>
					</div>
					<div class="divSpace">
						<div class="firstDoctor"  onMouseOver="memberInfoVisible('fourthDr')" onMouseOut="memberInfoHidden('fourthDr')">
							<img src="images/members/fourthPerson.jpg">
							<div class="doctorInfo" id="fourthDr">
								<span>
									Doctor Ahmed<br>
									CS Major
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="secondTeamRow">
					<div class="divSpace">
						<div class="firstDoctor" onMouseOver="memberInfoVisible('fifthDr')" onMouseOut="memberInfoHidden('fifthDr')">
							<img src="images/members/fifthPerson.jpg">
							<div class="doctorInfo" id="fifthDr">
								<span>
									Doctor Salwa<br>
									CS Major
								</span>
							</div>
						</div>
					</div>
					<div class="divSpace">
						<div class="firstDoctor"  onMouseOver="memberInfoVisible('sixthDr')" onMouseOut="memberInfoHidden('sixthDr')">
							<img src="images/members/sixthPerson.jpg">
							<div class="doctorInfo" id="sixthDr">
								<span>
									Doctor Saeed<br>
									IS Major
								</span>
							</div>
						</div>
					</div>
					<div class="divSpace">
						<div class="firstDoctor"  onMouseOver="memberInfoVisible('seventhDr')" onMouseOut="memberInfoHidden('seventhDr')">
							<img src="images/members/seventhPerson.jpg">
							<div class="doctorInfo" id="seventhDr">
								<span>
									Doctor Ibrahim<br>
									IS Major
								</span>
							</div>
						</div>
					</div>
					<div class="divSpace">
						<div class="firstDoctor"  onMouseOver="memberInfoVisible('eighthDr')" onMouseOut="memberInfoHidden('eighthDr')">
							<img src="images/members/eighthPerson.jpg">
							<div class="doctorInfo" id="eighthDr">
								<span>
									Doctor Amira<br>
									CS Major
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="aboutUniSection" id="about">
				<div class="aboutTitle">ABOUT</div>
				<div class="missionOfUni">
					<div class="missionTitle"><li>Mission and Vision :</li></div>
					<div class="missonPart">
						<div class="description missionDescription">
							As a regional, state-assisted institution of higher education, the University of North Alabama pursues its Mission of engaging in teaching, research, and service in order to provide educational opportunities for students, an environment for discovery and creative accomplishment, and a variety of outreach activities meeting the professional, civic, social, cultural, and economic development needs of our region in the context of a global community.
						</div>
						<div class="uniImage uniImage1">
							<img src="images/university/uni1.jpg" height="300" width="400">
						</div>
					</div>
				</div>
				<div class="historyOfUni">
					<div class="historyTitle"><li>History and Location :</li></div>
					<div class="historyPart">
						<div class="uniImage uniImage2">
							<img src="images/university/uni2.jpg" height="300" width="400">
						</div>
						<div class="description historyDescription">
							The University of North Alabama traces its origin to LaGrange College, which was established in 1830 at LaGrange, Alabama, by the Methodist Church, and then to its successor, Wesleyan University, established in Florence in 1855. In 1872, the school was established as a State Normal School, the first of its kind in the South. Across the years, the continued growth of the institution in size, scope, and purpose is reflected by a series of name changes: Florence State Teachers College (1929), Florence State College (1957), Florence State University (1968), and the University of North Alabama (1974).
						</div>

					</div>
				</div>
				<div class="organizationOfUni">
					<div class="organizationTitle"><li>Organization :</li></div>
					<div class="organizationPart">
						<div class="description organizationDescription">
							The governing control of the University is vested in a Board of Trustees established by action of the State Legislature (HB 650, Act No. 773, September 9, 1967). The board is composed of the Governor as president ex officio, ten members—six from within the area comprising the Fourth and Fifth Congressional Districts, three from the state at large, and one additional at-large member from within or outside of the state—appointed by the Governor with the advice and consent of the State Senate.
						</div>
						<div class="uniImage uniImage3">
							<img src="images/university/uni3.jpg" height="300" width="400">
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include("footer.php");?>
	</body>
</html>