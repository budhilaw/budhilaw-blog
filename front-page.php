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
            <div class="lg:mx-16 mx-8">
                <section class="hero py-20">
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
                                    Halo 👋🏻 <br /> My name is Ericsson Budhilaw, you can call me Eric. I lived in Malang, East Java, Indonesia.
                                    I created this website to share my knowledge and experience in the field of software engineering also documenting my journey as a software engineer.
                                    I hope you enjoy reading my articles and feel free to reach out if you have any questions.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="divider text-gray-800 dark:text-gray-400 divider-neutral">
                    <span class="flex items-center justify-center">
                        <span class="icon-[tabler--code] size-5"></span>
                    </span>
                </div>

                <section class="py-16">
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

                                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 relative z-2">
                                        <ul class="timeline timeline-snap-icon timeline-compact timeline-vertical w-full text-gray-800 dark:text-gray-300">
                                            <span class="text-sm dark:text-white text-gray-800">Jul 2024 - Present</span>
                                            <!-- timeline item 1-->
                                            <li class="my-2">
                                                <div class="timeline-middle">
                                                  <span class="bg-green-800 flex size-4.5 items-center justify-center rounded-full">
                                                    <span class="badge badge-success size-3 rounded-full p-0"></span>
                                                  </span>
                                                </div>
                                                <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                    <div class="text-base-content/90 pt-0.5 mb-3 dark:text-white text-gray-800 font-bold">Paper.id</div>
                                                    <p class="mb-3 dark:text-white text-gray-800">Technical Lead</p>
                                                </div>
                                                <hr class="bg-gray-200 dark:bg-gray-500" />
                                            </li>
                                            <!-- /timeline item 1-->
                                            <span class="text-sm dark:text-white text-gray-800">Jul 2023 - Jul 2024</span>
                                            <!-- timeline item 2-->
                                            <li class="my-2">
                                                <div class="timeline-middle">
                                                  <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                    <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                                  </span>
                                                </div>
                                                <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                    <div class="text-base-content/90 pt-0.5 mb-3 dark:text-gray-400 text-gray-400">Paper.id</div>
                                                    <p class="mb-3 dark:text-gray-400 text-gray-400">Backend Engineer</p>
                                                </div>
                                                <hr class="bg-gray-200 dark:bg-gray-500" />
                                            </li>
                                            <!-- /timeline item 2-->
                                            <span class="mt-2 text-sm dark:text-white text-gray-800">Nov 2021 - Jul 2023</span>
                                            <!-- timeline item 3-->
                                            <li class="my-2">
                                                <div class="timeline-middle">
                                                  <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                    <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                                  </span>
                                                </div>
                                                <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                    <div class="text-base-content/90 pt-0.5 mb-3 dark:text-gray-400 text-gray-400">Emtrade.id</div>
                                                    <p class="mb-3 dark:text-gray-400 text-gray-400">Backend Engineer</p>
                                                </div>
                                                <hr class="bg-gray-200 dark:bg-gray-500" />
                                            </li>
                                            <!-- /timeline item 3-->
                                            <span class="mt-2 text-sm dark:text-white text-gray-800">Feb 2018 - Nov 2021</span>
                                            <!-- timeline item 4-->
                                            <li class="my-2">
                                                <div class="timeline-middle">
                                                  <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                    <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                                  </span>
                                                </div>
                                                <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                    <div class="text-base-content/90 pt-0.5 mb-3 dark:text-gray-400 text-gray-400">Sudutkelasku</div>
                                                    <p class="mb-3 dark:text-gray-400 text-gray-400">Fullstack Engineer</p>
                                                </div>
                                                <hr class="bg-gray-200 dark:bg-gray-500" />
                                            </li>
                                            <!-- /timeline item 4-->
                                            <span class="mt-2 text-sm dark:text-white text-gray-800">May 2017 - Oct 2017</span>
                                            <!-- timeline item 5-->
                                            <li class="my-2">
                                                <div class="timeline-middle">
                                                  <span class="bg-neutral/20 flex size-4.5 items-center justify-center rounded-full">
                                                    <span class="badge badge-neutral size-3 rounded-full p-0"></span>
                                                  </span>
                                                </div>
                                                <div class="timeline-end ms-2 m-3 w-full rounded-lg">
                                                    <div class="text-base-content/90 pt-0.5 mb-3 dark:text-gray-400 text-gray-400">Badan Kesatuan Bangsa dan Politik Pemerintah Kota Sidoarjo</div>
                                                    <p class="mb-3 dark:text-gray-400 text-gray-400">Fullstack Engineer</p>
                                                </div>
                                                <hr class="bg-gray-200 dark:bg-gray-500" />
                                            </li>
                                            <!-- /timeline item 5-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
		</main>
	</div>
<?php get_footer(); ?>