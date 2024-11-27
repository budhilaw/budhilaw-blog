<?php
/*
 * Front page template
 *
 * @package Budhilaw
 */

?>
<?php get_header(); ?>
	<div id="content" class="site-content">
		<main id="primary" class="site-main">
			<section class="hero bg-gray-300 dark:bg-gray-700 py-20">
				<div class="container mx-auto px-4">
					<div class="flex flex-col">
						<div class="block h-16 w-16 origin-left pointer-events-auto rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
							<?php
							if ( has_custom_logo() ) {
								the_custom_logo();
							}
							?>
						</div>
						<div class="max-w-6xl my-4">
							<h2 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">
								Software Engineer and Lifelong Learner
							</h2>
							<p class="mt-6 text-base text-zinc-600 dark:text-zinc-300 leading-relaxed">
								Hello 👋🏻 My name is Dan Vega, Java Champion, Spring Developer Advocate, Husband and #GirlDad based outside of Cleveland OH. I created this website as a place to document my journey as I learn new things and share them with you. I have a real passion for teaching and I hope that one of blog posts, videos or courses helps you solve a problem or learn something new.
							</p>
						</div>
					</div>
				</div>
			</section>

			<section class="py-16 bg-gray-50 dark:bg-gray-600">
				<div class="container mx-auto px-4">
					<div class="flex flex-wrap">
						<div class="w-full lg:w-3/5 pr-0 lg:pr-8">
							<div class="space-y-6">
								<?php
								$args = array(
									'posts_per_page' => 4,
									'post_type' => 'post',
									'post_status' => 'publish'
								);
								$recent_posts = new WP_Query($args);
								if ($recent_posts->have_posts()) :
									while ($recent_posts->have_posts()) : $recent_posts->the_post();
								?>
									<article class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
										<time datetime="<?php echo get_the_date('c'); ?>" class="text-sm text-gray-500 dark:text-gray-400">
											<?php echo get_the_date(); ?>
										</time>
										<h3 class="mt-2 text-xl font-semibold text-gray-900 dark:text-white">
											<?php the_title(); ?>
										</h3>
										<div class="mt-3 text-gray-600 dark:text-gray-300">
											<?php echo wp_trim_words(get_the_excerpt(), 100, '...'); ?>
										</div>
										<a href="<?php the_permalink(); ?>" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-200">
											Read article →
										</a>
									</article>
								<?php
									endwhile;
									wp_reset_postdata();
								endif;
								?>
							</div>
						</div>
						<div class="w-full lg:w-2/5 mt-8 lg:mt-0">
                            <div class="space-y-6">
                                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Newsletter</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-6">Subscribe to get the latest updates directly in your inbox.</p>
                                    <form class="space-y-4">
                                        <div>
                                            <input type="email" placeholder="Enter your email" class="w-full px-4 py-2 rounded-md border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white">
                                        </div>
                                        <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-200">
                                            Subscribe
                                        </button>
                                    </form>
                                </div>

                                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6">
                                    <ul class="timeline timeline-snap-icon timeline-compact timeline-vertical w-full text-gray-800 dark:text-gray-300">
                                        <span class="text-sm dark:text-white text-gray-800">Jul 2024 - Present</span>
                                        <!-- timeline item 1-->
                                        <li>
                                            <div class="timeline-middle">
                                              <span class="bg-green-800 flex size-4.5 items-center justify-center rounded-full">
                                                <span class="badge badge-success size-3 rounded-full p-0"></span>
                                              </span>
                                            </div>
                                            <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                <div class="text-base-content/90 pt-0.5 mb-3 dark:text-white text-gray-800 font-bold">Paper.id</div>
                                                <p class="mb-3 dark:text-white text-gray-800">Technical Lead</p>
<!--                                                <p class="mb-2">Handle people management in Malang for all squads. </p>-->
<!--                                                <p class="mb-2">Manage core squad that handles payment features such as Payment, Pay-in, Pay-out, etc. (Backend and Frontend)</p>-->
<!--                                                <p class="mb-2">Designed first team in business unit Payment Gateway from zero including job post creation, talent search, creating live code test, etc.</p>-->
<!--                                                <p class="mb-2">Lead development of robust payment processor systems, overseeing architecture design and implementation.</p>-->
                                            </div>
                                            <hr />
                                        </li>
                                        <!-- /timeline item 1-->
                                        <span class="text-sm dark:text-white text-gray-800">Jul 2023 - Jul 2024</span>
                                        <!-- timeline item 2-->
                                        <li>
                                            <div class="timeline-middle">
                                              <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                              </span>
                                            </div>
                                            <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                <div class="text-base-content/90 pt-0.5 mb-3 dark:text-white text-gray-800">Paper.id</div>
                                                <p class="mb-3 dark:text-white text-gray-400">Backend Engineer</p>
                                                <!--                                                <p class="mb-2">Handle people management in Malang for all squads. </p>-->
                                                <!--                                                <p class="mb-2">Manage core squad that handles payment features such as Payment, Pay-in, Pay-out, etc. (Backend and Frontend)</p>-->
                                                <!--                                                <p class="mb-2">Designed first team in business unit Payment Gateway from zero including job post creation, talent search, creating live code test, etc.</p>-->
                                                <!--                                                <p class="mb-2">Lead development of robust payment processor systems, overseeing architecture design and implementation.</p>-->
                                            </div>
                                            <hr />
                                        </li>
                                        <!-- /timeline item 2-->
                                        <span class="mt-2 text-sm dark:text-white text-gray-800">Nov 2021 - Jul 2023</span>
                                        <!-- timeline item 3-->
                                        <li>
                                            <div class="timeline-middle">
                                              <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                              </span>
                                            </div>
                                            <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                <div class="text-base-content/90 pt-0.5 mb-3 dark:text-white text-gray-800">Emtrade.id</div>
                                                <p class="mb-3 dark:text-white text-gray-400">Backend Engineer</p>
<!--                                                <p class="mb-2">Developed Online Class, Fundamental, Analysis, and Blog features.-->
<!--                                                <p class="mb-2">Migrated from PHP to Go (Golang). Ported from Monolith Laravel to Microservice Golang</p>-->
<!--                                                <p class="mb-2">Refactor old services by using clean architecture and test-driven development, improve code coverage by up to 98%</p>-->
<!--                                                <p class="mb-2">Refactor auth services for Member / Customer, improved response time from 3-5s up to 1-2s</p>-->
                                            </div>
                                            <hr />
                                        </li>
                                        <!-- /timeline item 3-->
                                        <span class="mt-2 text-sm dark:text-white text-gray-800">Feb 2018 - Nov 2021</span>
                                        <!-- timeline item 4-->
                                        <li>
                                            <div class="timeline-middle">
                                              <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                              </span>
                                            </div>
                                            <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                <div class="text-base-content/90 pt-0.5 mb-3 dark:text-white text-gray-800">Sudutkelasku</div>
                                                <p class="mb-3 dark:text-white text-gray-400">Fullstack Engineer</p>
<!--                                                <p class="mb-2">Ported frontend from VueJS to ReactJS</p>-->
<!--                                                <p class="mb-2">Ported backend from Monolith Laravel to Golang (mostly using Gin and Gorm)</p>-->
<!--                                                <p class="mb-2">Developed search engine feature for searching Private Teacher based on location</p>-->
<!--                                                <p class="mb-2">Developed payment feature with Midtrans using Golang</p>-->
<!--                                                <p class="mb-2">Introduced git workflow and Github Actions for CI/CD</p>-->
                                            </div>
                                            <hr />
                                        </li>
                                        <!-- /timeline item 4-->
                                        <span class="mt-2 text-sm dark:text-white text-gray-800">May 2017 - Oct 2017</span>
                                        <!-- timeline item 5-->
                                        <li>
                                            <div class="timeline-middle">
                                              <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                              </span>
                                            </div>
                                            <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                <div class="text-base-content/90 pt-0.5 mb-3 dark:text-white text-gray-800">Badan Kesatuan Bangsa dan Politik Pemerintah Kota Sidoarjo</div>
                                                <p class="mb-3 dark:text-white text-gray-400">Fullstack Engineer</p>
<!--                                                <p class="mb-2">Fixing security issues in WordPress</p>-->
<!--                                                <p class="mb-2">Recovery data (the website got hacked before)</p>-->
<!--                                                <p class="mb-2">Ported from WordPress to Codeigniter</p>-->
<!--                                                <p class="mb-2">Developed news and information system using Codeigniter</p>-->
<!--                                                <p class="mb-2">Managing and Monitoring server via cPanel</p>-->
                                            </div>
                                            <hr />
                                        </li>
                                        <!-- /timeline item 5-->
                                    </ul>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>