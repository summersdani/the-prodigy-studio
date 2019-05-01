<?php
/**
 * The template for displaying the home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Prodigy
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="custom-main" class="custom-site-main" role="main">
                    
                    <div class="button-circle-subjects">
                        <a href="#circle-reading">
                        <div class="circle-reading">
                            <p>Reading</p> 
                        </div>
                        </a>
                        <a href="#circle-math">
                        <div class="circle-math">
                            <p>Math</p> 
                        </div>
                        </a>
                        <a href="#circle-writing">
                        <div class="circle-writing">
                            <p>Writing</p> 
                        </div>
                        </a>
                        <a href="#circle-speaking">
                        <div class="circle-speaking">
                            <p>Public Speaking</p> 
                        </div>
                        </a>
                        <a href="#circle-testprep">
                        <div class="circle-testprep">
                            <p>Test Prep</p> 
                        </div>
                        </a>
                    </div>
                    
                    <div id="subject-info" class="subject-info">
                    <div id="circle-reading">
                        <h2>Reading</h2>
                        <p>At Prodigy, your child will receive individualized reading instruction that correlates to their current reading abilities. Early readers will begin with strong foundational skills that will ensure a high proficiency in decoding, fluency and comprehending of texts. More advanced readers will enhance their abilities to consider higher-level thinking strategies during their reading, while also maintaining fluency and comprehension. </p>                    
                    </div>
                    <div id="circle-math">
                        <h2>Math</h2>
                        <p>Our interactive and personalized Math sessions are designed to develop students into mathematical thinkers, at every performance level. Students will develop an understanding of mathematical concepts by using a hands-on approach that fosters the standards of mathematical practice via Common Core. </p>
                    </div>
                        <div id="circle-writing">
                        <h2>Writing</h2>
                        <p>Allow prodigy to enhance your students’ writing abilities by meeting them at their level of expertise. Students will be able to construct well-crafted pieces of text on any type of writing genre. The fear of answering the constructed and extended response questions on the Georgia Milestones has just been eliminated! You student will learn strategies and techniques that will equip them with the tools and confidence towards mastery! </p>
                        </div>
                        <div id="circle-speaking">
                        <h2>Public Speaking</h2>
                        <p>Maximize your Prodigy Experience with our public Speaking sessions. Here at Prodigy, we aim to prepare our students to excel in all areas of life, including public speaking. We aim to encourage, uplift and motivate students into becoming leaders of today’s world, and presentation is the key.</p>
                        </div>
                        <div id="circle-testprep">
                        <h2>Test Prep</h2>
                        <p>Are you worried about the Georgia Milestones? Don’t Be. Our test preparation sessions will ensure your students are confident and prepared. During the sessions, students will develop understanding of the test, navigation, and test taking strategies that will leave them in control as they MASTER the Milestones!</p>
                        </div>
                    </div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
