<?php
$wrapper_attributes = get_block_wrapper_attributes(array(
	'class' => 'max-w-screen-xl mx-auto px-4 pb-4'
));
?>

<div <?php echo $wrapper_attributes; ?>>
    <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white"><?php echo $attributes['title']; ?></h2>
    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-md">
        <?php
        $categories = get_categories();
        foreach($categories as $category) : ?>
            <div class="py-3 border-b border-gray-800 dark:border-gray-500 last:border-b-0">
                <a href="<?php echo get_category_link($category->term_id); ?>" class="text-gray-800 dark:text-gray-200 hover:text-blue-600 flex justify-between items-center">
                    <span><?php echo $category->name; ?></span>
                    <span class="text-sm text-gray-500">(<?php echo $category->count; ?> posts)</span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>