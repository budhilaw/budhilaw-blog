<?php
$code = $attributes['code'];
?>
<div class="relative mb-8">
    <div class="bg-[#111b27] rounded-t-lg px-4 py-4 flex items-center border-b border-[#111b27]">
        <div class="flex space-x-2 -mb-1">
            <div class="w-3 h-3 rounded-full bg-red-500"></div>
            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
            <div class="w-3 h-3 rounded-full bg-green-500"></div>
        </div>
        <button class="copy-button absolute right-4 top-2 text-gray-400 hover:text-white text-sm">
            Copy
        </button>
    </div>
    <pre class="rounded-scrollbar horizontal-scrollbar rounded-none p-4 overflow-x-auto font-mono text-sm leading-relaxed -mb-2 language-<?php echo $attributes['language']; ?>">
        <code class="highlight-syntax language-<?php echo $attributes['language']; ?>">
            <?php echo trim(esc_textarea($code));?>
        </code>
    </pre>
</div>