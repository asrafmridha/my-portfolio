
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- -------------SWIPER CSS-------------- -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
		<title>Asraf's Portfolio</title>
		<!-- ------------UNICONS------------ -->
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
	</head>
	<body>
		<!-- HEADER -->
		<header class="header" id="header">
			<nav class="nav container">
				<a href="#" class="nav_logo">Mahedi</a>
				<div class="nav_menu" id="nav_menu">
					<ul class="nav_list grid">
						<li class="nav_item">
							<a href="#home" class="nav_link active-link">
								<i class="uil uil-estate nav_icon"></i> Home
							</a>
						</li>
						<li class="nav_item">
							<a href="#about" class="nav_link">
								<i class="uil uil-user-circle nav_icon"></i> About
							</a>
						</li>
						<li class="nav_item">
							<a href="#skills" class="nav_link">
								<i class="uil uil-file-alt nav_icon"></i> Skills
							</a>
						</li>
						<li class="nav_item">
							<a href="#services" class="nav_link">
								<i class="uil uil-bag nav_icon"></i> Services
							</a>
						</li>
						<li class="nav_item">
							<a href="#portfolio" class="nav_link">
								<i class="uil uil-scenery nav_icon"></i> Portfolio
							</a>
						</li>
						<li class="nav_item">
							<a href="#contact" class="nav_link">
								<i class="uil uil-message nav_icon"></i> Contactme
							</a>
						</li>
					</ul>
					<i class="uil uil-times nav_close" id="nav_close"></i>
				</div>
				<div class="nav_btns">
					<!-- Theme change button -->
					<i class="uil uil-moon change-theme" id="theme-button"></i>

					<div class="nav_toggle" id="nav_toggle">
						<i class="uil uil-apps "></i>
					</div>
				</div>
			</nav>
		</header>
		<!-------------- MAIN ---------------->
		<main class="main">
			<!---------- HOME --------------->
			<section class="home section" id="home">
				<div class="home_container container grid">
					<div class="home_content grid">
						<div class="home_social">
							<a href="{{ generalsettings()->linkedin_link }}" target="_blank" class="home_social-icon">
								<i class="uil uil-linkedin-alt"></i>
							</a>
							<a href="{{ generalsettings()->fb_link }}" target="_blank" class="home_social-icon">
								<i class="uil uil-facebook-f"></i>
							</a>
							<a href="{{ generalsettings()->github_link }}" target="_blank" class="home_social-icon">
								<i class="uil uil-github-alt"></i>
							</a>
						</div>
						<div class="home_img">
							<svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<mask id="mask0" mask-type="alpha">
									<path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
									130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
									97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
									0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
								</mask>
								<g mask="url(#mask0)">
									<path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
										165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
										129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
										-0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
									<image class="home_blob-img" x='15' y='18'  href="{{ asset('storage/'.generalsettings()->first_image) }}"/></image>
								</g>
							</svg>
						</div>
						<div class="home_data">
							<h1 class="home_title">Hi, I'm {{ generalsettings()->name }}</h1>
							<h3 class="home_subtitle">{{ generalsettings()->designation }}</h3>
							<p class="home_description">{{ generalsettings()->about_description }}</p>
							<a href="#contact" class="button button-flex">
								{{ generalsettings()->contact_button }}<i class="uil uil-message button-icon"></i>
							</a>
						</div>
					</div>
					<div class="home_scroll">
						<a href="#about" class="home_scroll-button button-flex">
							<i class="uil uil-mouse-alt home_scroll-mouse"></i>
							<span class="home_scroll-name">Scroll down</span>
							<i class="uil uil-arrow-down home_scroll-arrow"></i>
						</a>
					</div>
				</div>
			</section>
			<!------------ ABOUT --------------->
			<section class="about section" id="about">
				<h2 class="section_title">About Me</h2>
				<span class="section_subtitle">My introduction</span>
				<div class="about_container container grid">
					<img src="{{ asset('storage/'.generalsettings()->second_image) }}" alt="" class="about_img">
					<div class="about_data">
						<p class="about_description">Web developer, with extensive knowledge and years of experience, working in web technologies and UI/UX design, delivering quality work.</p>
						<div class="about_info">
							<div>
								<span class="about_info-title">01+</span>
								<span class="about_info-name">Years <br> experience</span>
							</div>
							<div>
								<span class="about_info-title">05+</span>
								<span class="about_info-name">Completed <br> projects</span>
							</div>
							<div>
								<span class="about_info-title">02+</span>
								<span class="about_info-name">Companies <br> worked</span>
							</div>
						</div>
						<div class="about_buttons">
							<a href="assets/pdf/Mahedi-cv.pdf" class="button button-flex">
								Download CV<i class="uil uil-download-alt button_icon"></i>
							</a>
						</div>
					</div>
				</div>
			</section>

			<!-- ---------------SKILLS-------------- -->
			<section class="skills section" id="skills">
				<h2 class="section_title">Skills</h2>
				<span class="section_subtitle">My technical level</span>
				<div class="skills_container container grid">
<!-- 					<div> -->
						<!-- ----Skill 1----- -->
						<div class="skills_content skills_open">
							<div class="skills_header">
								<i class="uil uil-brackets-curly skills_icon"></i>
								<div>
									<h1 class="skills_title">Fronted Developer</h1>
									<span class="skills_subtitle">More than 2 years</span>
								</div>
								<i class="uil uil-angle-down skills_arrow"></i>
							</div>
							<div class="skills_list grid">
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">HTML</h3>
										<span class="skills_number">90%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_html"></span></div>
								</div>
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">CSS</h3>
										<span class="skills_number">80%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_css" style="width: 80%"></span></div>
								</div>
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">JavaScript</h3>
										<span class="skills_number">75%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_js"></span></div>
								</div>
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">Vue</h3>
										<span class="skills_number">70%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_vue"></span></div>
								</div>
							</div>	
						</div>

						<!-- ------Skill 2------- -->
						<div class="skills_content skills_close">
							<div class="skills_header">
								<i class="uil uil-server skills_icon"></i>
								<div>
									<h1 class="skills_title">Backend Developer</h1>
									<span class="skills_subtitle">More than 2 years</span>
								</div>
								<i class="uil uil-angle-down skills_arrow"></i>
							</div>
							<div class="skills_list grid">
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">PHP</h3>
										<span class="skills_number">80%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_php"></span></div>
								</div>
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">Laravel</h3>
										<span class="skills_number">70%</span>
									</div>
									<div class="skills_bar">
										<span class="skills_percentage skills_laravel"></span>
									</div>
								</div>
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">MySQL</h3>
										<span class="skills_number">80%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_mysql"></span></div>
								</div>
								<div class="skills_data">
									<div class="skills_titles">
										<h3 class="skills_name">GIT</h3>
										<span class="skills_number">80%</span>
									</div>
									<div class="skills_bar"><span class="skills_percentage skills_git"></span></div>
								</div>
							</div>
						</div>
					<!-- </div> -->
				</div>
			</section>
			<!-- -----------Qualification----------- -->
			<section class="qualification section">
				<h2 class="section_title">Qualification</h2>
				<span class="section_subtitle">My personal journey</span>
				<div class="qualification_container container">
					<div class="qualification_tabs">
						<div class="qualification_button button-flex qualification_active" data-target="#education">
							<i class="uil uil-graduation-cap qualification_icon"></i>
							Education
						</div>
						<div class="qualification_button button-flex" data-target="#work">
							<i class="uil uil-briefcase-alt qualification_icon"></i>
							Work
						</div>
					</div>
					<div class="qualification_sections">
						<!-- =========Qualification content 1========== -->
						<div class="qualification_content qualification_active" data-content id="education">
							<!-- =====Qualification 1========= -->
							<div class="qualification_data">
								<div>
									<h3 class="qualification_title">BSc. in Computer Science and Engineering</h3>
									<span class="qualification_subtitle">Sylhet Engineering College</span>
									<div class="qualification_calender">
										<i class="uil uil-calendar-alt"></i>
										2015-2018
									</div>
								</div>
								<div>
									<span class="qualification_rounder"></span>
									<span class="qualification_line"></span>
								</div>
							</div>
							<!-- =====Qualification 2========= -->
							<div class="qualification_data">
								<div></div>
								<div>
									<span class="qualification_rounder"></span>
									<span class="qualification_line"></span>
								</div>
								<div>
									<h3 class="qualification_title">Higher Secondary Certificate</h3>
									<span class="qualification_subtitle">Adamjee Cantonment College</span>
									<div class="qualification_calender">
										<i class="uil uil-calendar-alt"></i>
										2011-2013
									</div>
								</div>
								
							</div>
							<!-- =====Qualification 3========= -->
							<div class="qualification_data">
								<div>
									<h3 class="qualification_title">Secondary School Certificate</h3>
									<span class="qualification_subtitle">Muslim Modern Academy</span>
									<div class="qualification_calender">
										<i class="uil uil-calendar-alt"></i>
										2009-2010
									</div>
								</div>
								<div>
									<span class="qualification_rounder"></span>
									<!-- <span class="qualification_line"></span> -->
								</div>
							</div>
						</div>
						<!-- =========Qualification content 2========== -->
						<div class="qualification_content" data-content id="work">
							<!-- =====Qualification 1========= -->
							<div class="qualification_data">
								<div>
									<h3 class="qualification_title">Sofware Engineer</h3>
									<span class="qualification_subtitle">ABCsoft -Dhaka</span>
									<div class="qualification_calender">
										<i class="uil uil-calendar-alt"></i>
										2018-2020
									</div>
								</div>
								<div>
									<span class="qualification_rounder"></span>
									<span class="qualification_line"></span>
								</div>
							</div>
							<!-- =====Qualification 2========= -->
							<div class="qualification_data">
								<div></div>
								<div>
									<span class="qualification_rounder"></span>
									<span class="qualification_line"></span>
								</div>
								<div>
									<h3 class="qualification_title">Frontend Developer</h3>
									<span class="qualification_subtitle">XYZ inc. -Dhaka</span>
									<div class="qualification_calender">
										<i class="uil uil-calendar-alt"></i>
										2020-2022
									</div>
								</div>
								
							</div>
							<!-- =====Qualification 3========= -->
							<div class="qualification_data">
								<div>
									<h3 class="qualification_title">Intern Web developer</h3>
									<span class="qualification_subtitle">Megamind BD</span>
									<div class="qualification_calender">
										<i class="uil uil-calendar-alt"></i>
										2019-2020
									</div>
								</div>
								<div>
									<span class="qualification_rounder"></span>
									<!-- <span class="qualification_line"></span> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!-- =============SERVICES============= -->
			<section class="services section" id="services">
				<h2 class="section_title">Services</h2>
				<span class="section_subtitle">What I offer</span>

				<div class="services_container container grid">
					<!-- =======SERVICES 1======= -->
					<div class="services_content">
						<div>
							<i class="uil uil-web-grid services_icon"></i>
							<h3 class="services_title">Web <br> Designer</h3>
						</div>

						<span class="button button-flex button-small button-link services_button">
							View more
							<i class="uil uil-arrow-right button-icon"></i>
						</span>

						<div class="services_modal">
							<div class="services_modal-content">
								<h4 class="services_modal-title">Web <br> Designer</h4>
								<i class="uil uil-times services_modal-close"></i>

								<ul class="services_modal-services grid">
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>I develop the user interface.</p>
									</li>
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>Web page development.</p>
									</li>
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>I create ux element interaction.</p>
									</li>
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>I position your company brand.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- =======SERVICES 2======= -->
					<div class="services_content">
						<div>
							<i class="uil uil-arrow services_icon"></i>
							<h3 class="services_title">Backend <br> Developer</h3>
						</div>

						<span class="button button-flex button-small button-link services_button">
							View more
							<i class="uil uil-arrow-right button-icon"></i>
						</span>

						<div class="services_modal">
							<div class="services_modal-content">
								<h4 class="services_modal-title">Backend <br> Developer</h4>
								<i class="uil uil-times services_modal-close"></i>

								<ul class="services_modal-services grid">
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>I develop the backend of your website.</p>
									</li>
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>Database design.</p>
									</li>
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>Build API.</p>
									</li>
									<li class="services_modal-service">
										<i class="uil uil-check-circle services_modal-icon"></i>
										<p>Secure your data throughout the website.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- ==============PORTFOLIO=============== -->
			<section class="portfolio section" id="portfolio">
				<h2 class="section_title">Portfolio</h2>
				<span class="section_subtitle">Most recent work</span>

				<div class="portfolio_container container swiper mySwiper">
					<div class="swiper-wrapper">
						<!-- ==============PORTFOLIO 1=============== -->
						<div class="portfolio_content grid swiper-slide">
							<img src="assets/img/portfolio1.jpg" alt="portfolio is under process" class="portfolio_img">

							<div class="portfolio_data">
								<h3 class="portfolio_title">Modern Website</h3>
								<p class="portfolio_description">Website adaptable to all devices, with ui components and animated interactions.</p>
								<a href="#" class="button button-flex button-small portfolio_button">
									Demo
									<i class="uil uil-arrow-right button_icon"></i>
								</a>
							</div>
						</div>

						<!-- ==============PORTFOLIO 2=============== -->
						<div class="portfolio_content grid swiper-slide">
							<img src="assets/img/portfolio2.jpg" alt="portfolio is under process" class="portfolio_img">

							<div class="portfolio_data">
								<h3 class="portfolio_title">Blog website</h3>
								<p class="portfolio_description">Website adaptable to all devices, with ui components and animated interactions.</p>
								<a href="#" class="button button-flex button-small portfolio_button">
									Demo
									<i class="uil uil-arrow-right button_icon"></i>
								</a>
							</div>
						</div>

						<!-- ==============PORTFOLIO 3=============== -->
						<div class="portfolio_content grid swiper-slide">
							<img src="assets/img/portfolio3.jpg" alt="portfolio is under process" class="portfolio_img">

							<div class="portfolio_data">
								<h3 class="portfolio_title">Inventory Management</h3>
								<p class="portfolio_description">Website adaptable to all devices, with ui components and animated interactions.</p>
								<a href="#" class="button button-flex button-small portfolio_button">
									Demo
									<i class="uil uil-arrow-right button_icon"></i>
								</a>
							</div>
						</div>
					</div>

					<!-- ---------ADD ARROW------ -->
					<div class="swiper-button-next">
						<i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
					</div>
			        <div class="swiper-button-prev">
			        	<i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
			        </div>
			        <!-- ---------ADD PAGINATION-------- -->
			        <div class="swiper-pagination"></div>
				</div>
			</section>

			<!-- -----------PROJECT IN MIND----------- -->
			<section class="project section">
				<div class="project_bg">
					<div class="project_container container grid">
						<div class="project_data">
							<h2 class="project_title">You have a new project</h2>
							<p class="project_description">Contact me now and get a 30% discount on your new project.</p>

							<a href="#contact" class="button button-flex button-white">
								Contact Me
								<i class="uil uil-message project_icon button_icon"></i>
							</a>
						</div>

						<img src="assets/img/project.jpg" alt="" class="project_img">
					</div>
				</div>
			</section>

			<!-- ---------CONTACT ME---------- -->
			<section class="contact section" id="contact">
				<h2 class="section_title">Contact Me</h2>
				<span class="section_subtitle">Get in touch</span>

				<div class="contact_container container grid">
					<div>
						<div class="contact_information">
							<i class="uil uil-phone contact_icon"></i>

							<div>
								<h3 class="contact_title">Call Me</h3>
								<span class="contact_subtitle">{{ generalsettings()->phone }}</span>
							</div>
						</div>

						<div class="contact_information">
							<i class="uil uil-envelope contact_icon"></i>

							<div>
								<h3 class="contact_title">Email</h3>
								<span class="contact_subtitle">{{ generalsettings()->email }}</span>
							</div>
						</div>

						<div class="contact_information">
							<i class="uil uil-map-marker contact_icon"></i>
				

							<div>
								<h3 class="contact_title">Location</h3>
								<span class="contact_subtitle">{{ generalsettings()->address }}</span>
							</div>
						</div>
					</div>

					<form action="#" class="contact_form grid">
						<div class="contact_inputs grid">
							<div class="contact_content">
								<label for="" class="contact_label">Name</label>
								<input type="text" class="contact_input">
							</div>
							<div class="contact_content">
								<label for="" class="contact_label">Email</label>
								<input type="email" class="contact_input">
							</div>
						</div>
						<div class="contact_content">
								<label for="" class="contact_label">Project</label>
								<input type="text" class="contact_input">
						</div>
						<div class="contact_content">
								<label for="" class="contact_label">Message</label>
								<textarea name="" id="" cols="0" rows="7" class="contact_input"></textarea>
						</div>

						<div>
							<a href="#" class="button button-flex">
								Send Message
								<i class="uil uil-message button_icon"></i>
							</a>
						</div>
					</form>
				</div>

			</section>

		</main>
		<!-- -------------FOOTER------------ -->
		<footer class="footer">
			<div class="footer_bg">
				<div class="footer_container container grid">
					<div>
						<h1 class="footer_title">{{ generalsettings()->name }}</h1>
						<span class="footer_subtitle">{{ generalsettings()->designation }}</span>
					</div>

					<ul class="footer_links">
						<li><a href="#services" class="footer_link">Services</a></li>
						<li><a href="#portfolio" class="footer_link">Portfolio</a></li>
						<li><a href="#contact" class="footer_link">Contactme</a></li>
					</ul>

					<div class="footer_socials">
						<a href="{{ generalsettings()->fb_link }}" target="_blank" class="footer_social">
							<i class="uil uil-facebook-f"></i>
						</a>

						<a href="https://www.instagram.com" target="_blank" class="footer_social">
							<i class="uil uil-instagram"></i>
						</a>

						<a href="https://www.twitter.com" target="_blank" class="footer_social">
							<i class="uil uil-twitter-alt"></i>
						</a>
					</div>
				</div>

				<p class="footer_copy">&#169; Asraf. All rights reserved</p>
			</div>
		</footer>

		<!-- SCROLL TOP -->
		<a href="" class="scrollup" id="scroll-up">
			<i class="uil uil-arrow-up scrollup_icon"></i>
		</a>
		<!-- SWIPER JS -->
		<script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
		<script src="#"></script>
		<!-- MAIN JS -->
		<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
	</body>
</html>