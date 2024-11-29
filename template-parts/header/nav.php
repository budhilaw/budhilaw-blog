<?php
/**
 * Header navigation template
 * @package Budhilaw
 * @since 1.0.0
 */

$menu_class = \BUDHILAW_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'budhilaw-header-menu' );

$header_menus = wp_get_nav_menu_items( $header_menu_id );
$current_menu = current( wp_filter_object_list( $header_menus, array( 'object_id' => get_queried_object_id() ) ) );
?>

<header class="top-0 pt-6">
    <div class="flex flex-wrap dark:bg-gray-700 items-center rounded-full p-2 my-4 mx-16 shadow-md">
        <div id="toggleOpen" class="flex justify-center lg:hidden text-2xl p-2.5">
            <span class="icon-[mdi--menu]"></span>
        </div>

        <div id="nav-overlay" class="hidden fixed inset-0 bg-black/80 z-40"></div>

        <nav id="fixed-nav" class="hidden fixed origin-top top-8 p-8 inset-x-4 dark:bg-gray-900 rounded-2xl mx-4 z-50">
            <div class="flex">
                <h2 class="font-bold text-2xl dark:text-gray-200">
                    Navigation
                </h2>
                <span id="toggleClose" class="dark:text-gray-200 text-2xl ml-auto">
                    <span class="icon-[mdi--close]"></span>
                </span>
            </div>
		    <?php if ( ! empty( $header_menus ) && is_array( $header_menus ) ) : ?>
                <ul>
				    <?php foreach ($header_menus as $menu) : ?>
					    <?php if ( is_single() && $menu->title === 'Blog' ) : ?>
                            <li class='max-lg:border-b max-lg:border-gray-600 max-lg:py-3 px-3'>
                                <a
                                        href='<?php echo esc_url( $menu->url ) ?>'
                                        class='lg:hover:text-[#007bff]  dark:text-[#608BC1] text-[#007bff] block font-semibold text-[15px]'>
								    <?php echo esc_html( $menu->title ) ?>
                                </a>
                            </li>
					    <?php else: ?>
                            <li class='max-lg:border-b max-lg:border-gray-600 max-lg:py-3 px-3'>
                                <a
                                        href='<?php echo esc_url( $menu->url ) ?>'
                                        class='lg:hover:text-[#007bff] dark:hover:text-[#608BC1] block font-semibold text-[15px] <?php echo $menu->object_id == get_queried_object_id() ? 'text-[#608BC1]' : 'text-gray-500 dark:text-gray-300'; ?>'>
								    <?php echo esc_html( $menu->title ) ?>
                                </a>
                            </li>
					    <?php endif; ?>
				    <?php endforeach; ?>
                </ul>
		    <?php endif; ?>
        </nav>

        <nav class="pointer-events-auto hidden md:block">
            <?php if ( ! empty( $header_menus ) && is_array( $header_menus ) ) : ?>
                <ul class='flex rounded-full px-3'>
                    <?php foreach ($header_menus as $menu) : ?>
                        <?php if ( is_single() && $menu->title === 'Blog' ) : ?>
                            <li class='max-lg:border-b max-lg:border-gray-600 max-lg:py-3 px-3'>
                                <a
                                        href='<?php echo esc_url( $menu->url ) ?>'
                                        class='lg:hover:text-[#007bff]  dark:text-[#608BC1] text-[#007bff] block font-semibold text-[15px]'>
                                    <?php echo esc_html( $menu->title ) ?>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class='max-lg:border-b max-lg:border-gray-600 max-lg:py-3 px-3'>
                                <a
                                        href='<?php echo esc_url( $menu->url ) ?>'
                                        class='lg:hover:text-[#007bff] dark:hover:text-[#608BC1] block font-semibold text-[15px] <?php echo $menu->object_id == get_queried_object_id() ? 'text-[#608BC1]' : 'text-gray-500 dark:text-gray-300'; ?>'>
                                    <?php echo esc_html( $menu->title ) ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </nav>

        <button id="theme-toggle" type="button" class="ml-auto lg:block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-700 rounded-full text-2xl p-2.5">
            <svg id="theme-toggle-dark-icon" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 21q-3.75 0-6.375-2.625T3 12t2.625-6.375T12 3q.35 0 .688.025t.662.075q-1.025.725-1.638 1.888T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q1.375 0 2.525-.613T20.9 10.65q.05.325.075.662T21 12q0 3.75-2.625 6.375T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75"/>
            </svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                <path fill="currentColor" fill-rule="evenodd" d="M277.333 405.333v85.333h-42.667v-85.333zm99.346-58.824l60.34 60.34l-30.17 30.17l-60.34-60.34zm-241.359 0l30.17 30.17l-60.34 60.34l-30.17-30.17zM256 139.353c64.422 0 116.647 52.224 116.647 116.647c0 64.422-52.225 116.647-116.647 116.647A116.427 116.427 0 0 1 139.352 256c0-64.423 52.225-116.647 116.648-116.647m0 42.666c-40.859 0-73.981 33.123-73.981 74.062a73.76 73.76 0 0 0 21.603 52.296c13.867 13.867 32.685 21.64 52.378 21.603zm234.666 52.647v42.667h-85.333v-42.667zm-384 0v42.667H21.333v-42.667zM105.15 74.98l60.34 60.34l-30.17 30.17l-60.34-60.34zm301.7 0l30.169 30.17l-60.34 60.34l-30.17-30.17zM277.332 21.333v85.333h-42.667V21.333z"/>
            </svg>
        </button>
    </div>
</header>