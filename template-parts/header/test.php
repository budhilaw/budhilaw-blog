<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Main Content -->
        <div class="lg:w-2/3">
            <!-- Hero Section -->
            <div class="relative h-[400px] mb-8 rounded-lg overflow-hidden">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/articles/background.png" alt="Hero" class="w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                    <div class="text-gray-300 text-sm mb-2">Published in WorkingNotes</div>
                    <h1 class="text-white text-3xl font-bold mb-2">Flowbite Blocks Tutorial - Learn how to get started with custom sections</h1>
                    <p class="text-gray-200">Before going digital, you might try writing things down in a sketchbook</p>
                </div>
            </div>

            <!-- Article Content -->
            <div class="prose max-w-none">
                <p class="text-gray-700 mb-4">
                    Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers.
                </p>
                <!-- Add more content here -->
            </div>
        </div>

        <!-- Floating Sidebar -->
        <div class="lg:w-1/3" id="sidebar">
            <div class="bg-white rounded-lg p-6" id="floating-sidebar">
                <div class="mb-6">
                    <h2 class="text-lg font-bold mb-4">FLOWBITE NEWS MORNING HEADLINES</h2>
                    <p class="text-gray-600 text-sm">Get all the stories you need to know from the most powerful name in news delivered first thing every morning to your inbox</p>
                    <button class="w-full bg-blue-600 text-white py-2 px-4 rounded mt-4 hover:bg-blue-700">
                        Subscribe
                    </button>
                </div>

                <div class="border-t pt-6">
                    <h3 class="font-bold mb-4">LATEST NEWS</h3>
                    <!-- News Items -->
                    <div class="space-y-4">
                        <!-- News Item -->
                        <div class="flex gap-4">
                            <img src="news-thumbnail.jpg" alt="News" class="w-20 h-20 object-cover rounded">
                            <div>
                                <h4 class="font-semibold">Our first office</h4>
                                <p class="text-sm text-gray-600">From the world's most Notebok has undergone changes</p>
                            </div>
                        </div>
                        <!-- Add more news items -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const sidebar = $('#floating-sidebar');
        const sidebarWrapper = $('#sidebar');
        const originalOffset = sidebar.offset().top;

        $(window).scroll(function() {
            const scrollPosition = $(window).scrollTop();
            const sidebarWidth = sidebarWrapper.width();

            if (scrollPosition > originalOffset) {
                sidebar.css({
                    'position': 'fixed',
                    'top': '20px',
                    'width': sidebarWidth
                });
            } else {
                sidebar.css({
                    'position': 'static',
                    'width': 'auto'
                });
            }
        });
    });
</script>