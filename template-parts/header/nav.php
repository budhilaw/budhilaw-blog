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

<header class='flex flex-wrap items-center gap-5 w-full border-b dark:border-gray-800 py-4 px-4 sm:px-10 dark:bg-gray-800 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50 shadow-md'>
    <div class="ml-auto items-center gap-2 lg:hidden">
        <button id="toggleOpen" class="text-2xl p-2.5">
            <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>

    <div id="collapseMenu"
         class='flex-[0.5] max-lg:hidden lg:!block max-lg:w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
        <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
            </svg>
        </button>

        <?php if ( ! empty( $header_menus ) && is_array( $header_menus ) ) : ?>
            <ul class='lg:flex lg:flex-1 lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:dark:bg-gray-800 max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
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
    </div>

    <button id="theme-toggle" type="button" class="lg:ml-auto lg:block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-700 rounded-lg text-2xl p-2.5">
        <svg id="theme-toggle-dark-icon" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 21q-3.75 0-6.375-2.625T3 12t2.625-6.375T12 3q.35 0 .688.025t.662.075q-1.025.725-1.638 1.888T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q1.375 0 2.525-.613T20.9 10.65q.05.325.075.662T21 12q0 3.75-2.625 6.375T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75"/>
        </svg>
        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
            <path fill="currentColor" fill-rule="evenodd" d="M277.333 405.333v85.333h-42.667v-85.333zm99.346-58.824l60.34 60.34l-30.17 30.17l-60.34-60.34zm-241.359 0l30.17 30.17l-60.34 60.34l-30.17-30.17zM256 139.353c64.422 0 116.647 52.224 116.647 116.647c0 64.422-52.225 116.647-116.647 116.647A116.427 116.427 0 0 1 139.352 256c0-64.423 52.225-116.647 116.648-116.647m0 42.666c-40.859 0-73.981 33.123-73.981 74.062a73.76 73.76 0 0 0 21.603 52.296c13.867 13.867 32.685 21.64 52.378 21.603zm234.666 52.647v42.667h-85.333v-42.667zm-384 0v42.667H21.333v-42.667zM105.15 74.98l60.34 60.34l-30.17 30.17l-60.34-60.34zm301.7 0l30.169 30.17l-60.34 60.34l-30.17-30.17zM277.332 21.333v85.333h-42.667V21.333z"/>
        </svg>
    </button>
</header>