<!--CONTENT DISPLAY -->
<?php
get_header();
?>
<body class="is-preload">
<!-- HEADER -->
    <header id="header">
        <div class="inner">
            <a href="#" class="image avatar"><img src="<?php echo get_stylesheet_directory_uri()?>/images/avatar.jpg" alt="" /></a>
            <h1><strong>HEY, I'M ALFONSO</strong></h1>
        </div>
        <div class="inner">
            <ul class="icons">
                <li><a href="mailto:alenthres@gmail.com" class="icon solid fa-envelope" target="_blank"><span class="label">Email</span></a></li>
                <li><a href="https://github.com/alfonsojk" class="icon brands fa-github" target="_blank"><span class="label">Github</span></a></li>
                <li><a href="https://www.linkedin.com/in/alfonsojk/" class="icon brands fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
                <li><a href="https://freecodecamp.com/alfonsojk" class="icon brands fa-free-code-camp" target="_blank"><span class="label">Dribbble</span></a></li>
            </ul>
        </div> 
    </header>
    <!-- MAIN -->
    <div id="main">
        <!-- ONE -->
        <section id="one">
            <header class="major">
                <h2 style="margin-bottom:10%;text-decoration:overline;display: flex;justify-content: center;">W E B _ D E V E  L O P E R <br />
                </h2>
            </header>
            <p style= "display: flex;justify-content: center;">WEB DEVELOPER AND DESIGNER FROM MEXICO. I ENJOY CODING, DESING AND BUILDING LAYOUTS FOR WEBSITES TO HELP PEOPLE GO FURTHER ONLINE.</p>
            <ul class="actions" style= "display: flex;justify-content: center;">
                <li><a href="#projects" class="button" style="text-decoration:overline;" >projects</a></li>
            </ul>
        </section>
        <!-- TWO -->
        <section id="two" style="margin-top: 35%;">
            <h2 style= "text-decoration:overline;">technical</h2>
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4" >
                        <h2 style="text-decoration:underline;">Desing</h2>
                        <ul style=" list-style-type: none;">
                            <li>I value simple content structure, clean desig0n patterns, and thoughtful interactions. </li>
                            <li style="text-decoration:underline;">Things I enjoy design:</li>
                            <li> UX, UI, Web.</li>
                            <li style="text-decoration:underline;">Design Tools:</li>
                            <li>Invision, Marvel, Illustrator, Webflow</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h2 style="text-decoration:underline;">Front End Developer</h2>
                        <ul style=" list-style-type: none;">
                            <li>I like to code things from scratch, and enjoy bringing ideas to life in the browser.</li>
                            <li style="text-decoration:underline;">Languages:</li> 
                            <li>HTML, Javascript, CSS</li>
                            <li style="text-decoration:underline;">Frameworks:</li> 
                            <li>React, Vue</li>
                            <li style="text-decoration:underline;">Dev Tools:</li> 
                            <li>Atom, Github, GitLab, Terminal</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h2 style="text-decoration:underline;">Back End Developer</h2>
                        <ul style=" list-style-type: none;">
                            <li>To describe my work as a backend developer, I can say that I mainly focus on the following:
                            </li>
                            <li style="text-decoration:underline;">Web Development:</li> 
                            <li>PHP</li>
                            <li style="text-decoration:underline;">Database:</li>
                            <li>Mongo DB, MySQL</li>
                            <li style="text-decoration:underline;">Server Side:</li> 
                            <li>Node Js, API REST</li>
                        </ul>
                    </div>
                </div>	     
            </div>                   
        </section> 
        <!-- ADD POST IN PROJECTS -->
        <!-- PROJECTS  -->
        <!--PHP POST LOOPS -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- Test if the current post is in category 3. -->
        <!-- If it is, the div box is given the CSS class "post-cat-three". -->
        <!-- Otherwise, the div box is given the CSS class "post". -->
        <?php if ( in_category( '3' ) ) : ?>
            <div class="post-cat-three">
        <?php else : ?>
            <div class="post">
        <?php endif; ?>
        <!--PHP POST LOOPS -->
		<section id="three">
			<h2 id="projects"style="text-decoration:overline;">projects</h2>
			<div class="row">
            
                <article class="col-6 col-12-xsmall work-item">
                    <a href="https://co-lateral.mx/" class="image fit thumb" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/01.jpg" alt="" /></a>
                        <h3>Colectivo Lateral de Arquitectura</h3>
                        <p> Web page for Co-Lateral architecture office, mainly the project was built creating a worpress template as Content Management System (CMS) and providing maintenance for project updates.</p>
                </article>
                <article class="col-6 col-12-xsmall work-item">
                    <a href="https://5elementos.mx/" class="image fit thumb" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/02.jpg" alt="" /></a>
                        <h3>5 Elementos</h3>
                        <p>Real state landing page, main purpose for the bussines is land for sale. Front-End builded in HTML, CSS and Javascript. Back-End was developed in PHP.</p>
                </article>
                <article class="col-6 col-12-xsmall work-item">
                    <a href="https://determined-jones-8af34d.netlify.app" class="image fit thumb" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/03.jpg" alt="" /></a>
                        <h3>Webb App (MERNG)</h3>
                        <p>Social media app application builded using Mongo DB, Express, Node, React and GraphQL (MERNG Stack). The purpose was to implement a  GraphQL Server that uses Node and Express to comunicate to a Mongo DB database and fetch data.</p>
                </article>
                <article class="col-6 col-12-xsmall work-item">
                    <a href="images/fulls/04.jpg" class="image fit thumb" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/04.jpg" alt="" /></a>
                        <h3>Tetris App</h3>
                        <p>Tetris game builded in Javascript from scratch.</p>
                </article>
                <article class="col-6 col-12-xsmall work-item">
                    <a href="https://vibrant-austin-0d632b.netlify.app"  target="_blank" class="image fit thumb"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/05.jpg" alt="" /></a>
                        <h3>Flappy Bird</h3>
                        <p>Flappy Bird Web App improving Javascript code, implementing loops, classes and constructors.</p>
                </article>
                <article class="col-6 col-12-xsmall work-item">
                    <a href="https://amazing-johnson-4f2b37.netlify.app" class="image fit thumb" target="_blank"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/06.jpg" alt="" /></a>
                    <h3>Video Loader</h3>
                    <p>First project that consist in a loading function that displays an animation for a video banner, builded in Javascript.</p>
                </article>
                <article class="col-6 col-12-xsmall work-item">
                    <a href="images/fulls/07.jpg" class="image fit thumb"><img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs/07.jpg" alt="" /></a>
                    <h3>Raw Wordpress Portfolio</h3>
                    <p>Wordpress project builded with Elementor adding shortcodes for specific design.</p>
                    <!-- DISPLAY POST LOOP IN A DIV BOX. -->
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <!-- Display a comma separated list of the Post's Categories. -->
                    <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                    </div> <!-- closes the first div box -->
                    <!-- Stop The Loop (but note the "else:" - see next line). -->
                    <?php endwhile; else : ?>
                    <!-- The very first "if" tested to see if there were any Posts to -->
                    <!-- display.  This "else" part tells what do if there weren't any. -->
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <!-- REALLY stop The Loop. -->
                    <?php endif; ?>
                </article>
			</div>
            <ul class="actions"style= "display: flex;justify-content: center;">
                <li><a href="https://github.com/alfonsojk" target="_blank" class="button">full portfolio</a></li>
            </ul>
		</section>
        <!-- FOUR -->
	    <section id="four">
            <h2 style="text-decoration:overline;">get in touch</h2>
            <ul style=" list-style-type: none;">
                <li>let's talk</li>
                <li>wanna get in touch or talk about a project?</li>
                <li>feel free to contact me via email at_<a style="text-decoration:overline;" 				href="mailto: alentres@gmail.com">alenthres@gmail.com></a></li>
                <li style="display:flex;justify-content:center;margin-bottom: 10%;margin-top: 10%;">or fill the form below:</li>
            </ul>
            <!--OPEN HTML FORM-->
			<div class="row" style="display:flex;justify-content:center;">
				<div class="col-8 col-12-small">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="row gtr-uniform gtr-50">
							<div class="col-6 col-12-xsmall">
								<label for="visitor_name" for="name" class="required"
									aria-required="true" required>
								</label>
								<input type="text" name="visitor_name" 	id="name" placeholder="Name" 	value="<?php echo $name;?>"/>
								<span class="error"> 
                        			<?php echo $nameErr;?>
                    			</span>
							</div>
							<div class="col-6 col-12-xsmall">
							    <label for="visitor_email" id="email"></label>
								<input name="visitor_email" id="email" type="email" id="email" placeholder="Email" value="<?php echo $email;?>"/>
								<span class="error"> 
                        			<?php echo $emailErr;?>
                    			</span>
							</div>
							<div for="user_message" 
								 id="message" 
								 class="col-12">
								 <label for="user_message" id="message" required><?php echo $visitor_message_error;?></span>
								 </label>
								<textarea placeholder="Message" name="visitor_message"  
										  id="message"  
										  rows="4" ></textarea>
							</div>
						</div>
						<div style="display:flex;justify-content:center; margin-top:5%">
							<input class="btn" name="submit"
								type="submit"  
								value="Send">
						</div>
					</form>
			 	</div>
			</div>
	    </section>
    </div>
<?php get_footer();?>