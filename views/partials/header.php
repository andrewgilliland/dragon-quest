<?php

$title = "Dragon Quest";

?>

<header class="bg-gray-950 px-[10%] py-4">
    <div class="flex items-center justify-between max-w-5xl mx-auto">
        <a href="/">
            <h2 class="text-xl font-light text-indigo-600"><?= $title ?></h2>
        </a>
        <div>
            <nav>
                <ul class="flex space-x-3">
                    <li><a href="/classes.php" class="<?php echo urlIs('/classes.php') ? "bg-gray-900" : ""; ?> text-white px-3 py-2">Classes</a></li>
                    <li><a href="/monsters.php" class="<?php echo urlIs('/monsters.php') ? "bg-gray-900" : ""; ?> text-white px-3 py-2">Monsters</a></li>
                    <li><a href="/items.php" class="<?php echo urlIs('/items.php') ? "bg-gray-900" : ""; ?> text-white px-3 py-2">Items</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
