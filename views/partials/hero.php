<?php
/**
 * Hero Section
 *
 * @param string $heading The main heading for the hero section.
 * @param string $subheading A brief description or subheading for the hero section.
 */
function hero(string $heading, string $subheading): void {
    ?>
    <section class="bg-gray-950 text-white py-20 border-t border-b border-white/10 h-screen">
        <div class="flex flex-col justify-start items-start max-w-5xl mx-auto">
            <h1 class="border border-white/10 text-6xl font-light tracking-tight mb-4"><?= htmlspecialchars($heading) ?></h1>
            <p class="border border-white/10 text-base/7 text-gray-300 mb-8"><?= htmlspecialchars($subheading) ?></p>
            <a href="/classes" class="bg-indigo-600/[.05] hover:bg-indigo-600/15 text-indigo-500 font-light py-2 px-4 transition border border-white/10">Start Your Adventure</a>
        </div>
    </section>
    <?php
}