<?php

$title = "Dragon Quest";

?>

<header class="bg-gray-800 text-white py-4">
    <div class="flex items-center justify-between max-w-5xl mx-auto">
        <a href="/index.php">
            <h2 class="text-xl font-semibold"><?= $title ?></h2>
        </a>
        <div>
            <nav>
                <ul class="flex space-x-3">
                    <li><a href="/classes.php" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition">Classes</a></li>
                    <li><a href="/monsters.php" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition">Monsters</a></li>
                    <li><a href="/items.php" class="hover:bg-gray-700 px-3 py-2 rounded-lg transition">Items</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
