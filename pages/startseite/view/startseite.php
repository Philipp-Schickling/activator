<?php

	include CONTROLLER_STARTSEITE;

?>

<!DOCTYPE html>
<html>
	<head>
	
	<title> <?php echo ucfirst( $pageTitle ); ?> </title>
	<?php include PAGE_TEMPLATE_METADATA ?>

	<link rel="stylesheet" type="text/css" href="<?php echo RESET_CSS ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo GENERAL_CSS ?>">

	<script type="text/javascript" src="<?php echo JQUERY ?>"></script>
	<script type="text/javascript" src="<?php echo MASONRY ?>"></script>

	</head>
<body>

<header>
<div class="wNav">
	<nav>
		<a href="login">Login</a>
		<a href="startseite">Startseite</a>
		<a href="">Link 3</a>
		<a href="">Neues Projekt</a>
	</nav>
</div>

</header>

<!-- ########################## -->
<!-- .wGeneral contains everything -->
<!-- ########################## -->

<section class="wGeneral">


	<!-- ############ -->
	<!-- main content (.wMain) -->
	<!-- ############ -->

		<section>

			<div class="wMain">



				<!-- 

					HEADLINE

				 -->
				<div class="wHeadline">
					<h1><?php echo __tr( "MARKIERTE PROJEKTE" ) ?></h1>
				</div>

				<!-- 

					WRAPPER FOR ALL CARDS

				 -->

				<div class="wCards">

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>

					<!-- 

						CARD EXAMPLE

					 -->

					<div class="card">
						<div class="wiCard">
						
						<!-- PART 1 – picture, title, category -->

							<!-- teaser picture -->
							<div class="tsCard"></div>

							<!-- title and specials -->
							<div class="cardTitle">Projekt 1</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							<!-- category -->
							<div class="cgCard">Gestaltung</div>

							<!-- likeline -->
							<div class="wLikeLine">
									
								<div class="likelineGreen"></div>
								<div class="likelineRed"></div>

							</div>

						<!-- END OF (PART 1) -->
	
							<!-- ###### -->
	
						<!-- PART 2 members -->

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>
							
							<div class="wMember">

								<div class="mPicture"></div>
								<span class="mComment">Warte auf Feedback..</span>
								<div class="feedbackDot"></div>

							</div>

							<!-- remaining members -->
							
							<div class="wMember wOtherMembers">

									<div class="mPicture"></div>
									<div class="mPicture"></div>
									<div class="mPicture"></div>

							</div>

						</div>
					</div>


				</div> <!-- END OF wrapper for all cards (.wCards) -->
			</div> <!-- END OF main content (.wMain) -->

		</section> <!-- END OF section (.wMain) -->




	<!-- ####### -->
	<!-- sidebar -->
	<!-- ####### -->

		<section>
			<div class="wSidebar">




			<!-- 

				SIDEBAR EXAMPLE

			 -->

				<div class="wCards">
					<div class="card">
						<div class="wiCard">

							<div class="cardTitle"><?php echo __tr("Aktuell relevant") ?></div>

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

						</div>
					</div>
				</div>



			<!-- 

				SIDEBAR EXAMPLE

			 -->

				<div class="wCards">
					<div class="card">
						<div class="wiCard">

							<div class="cardTitle"><?php echo __tr("Aktuell relevant") ?></div>

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

						</div>
					</div>
				</div>



			<!-- 

				SIDEBAR EXAMPLE

			 -->

				<div class="wCards">
					<div class="card">
						<div class="wiCard">

							<div class="cardTitle"><?php echo __tr("Aktuell relevant") ?></div>

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

							<!-- sidebar comment -->
							<div class="wMember">
								
								<div class="mComment">Leserreisen</div>

								<!-- specials -->
								<div class="wSpecials">
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
									<div class="special"></div>
								</div>

							</div>
							

						</div>
					</div>
				</div>




			</div>
		</section> <!-- END OF section (sidebar) -->


</section> <!-- END OF .wGeneral -->

	<footer></footer>

<script type="text/javascript">

/*

	activate masonry

*/

var msnry = new Masonry( '.wCards', {

	itemSelector: '.card'

});



/*

	whole screen resolution

*/

var screenWidth = screen.width;
var screenHeight = screen.height;

// height of sidebar
var sidebar = $(".wSidebar");
var sidebarHeight = sidebar.height();
var sidebarOffsetTop = sidebar.offset().top;

/*

	alternate sidebar position fixed and absolute regarding to screen height –> prevent sidebar from being cut

*/

function toggleSidebarPosition() {

	if( this.innerHeight < sidebarHeight + sidebarOffsetTop  ) {

		var top = sidebar.offset().top;
		sidebar.css( "position", "absolute" );
		sidebar.css( "top", top );
		sidebar.animate({

			top: sidebarOffsetTop

		});

	} else {

		sidebar.css( "position", "fixed" );

	}

}


$( window ).on( "load", function(){

	toggleSidebarPosition();

});

$( window ).on( "resize", function(){

	toggleSidebarPosition();

});


</script>

</body>
</html>

