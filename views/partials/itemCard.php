<?php

function itemCard(Item $item): void {
    ?>
     <div class="bg-gray-900 text-white border border-white/10 rounded-lg p-4">
         <img src="<?= $item->getImage() ?>" alt="<?= $item->getName() ?>" class="w-full h-48 object-cover rounded-lg mb-4">
         <h2 class="text-xl font-semibold mb-2"><?= $item->getName() ?></h2>         <p class="text-gray-300 mb-4"><?= $item->getDescription() ?></p>
         <p class="text-gray-400 text-sm"><?= $item->getType() ?></p>
    </div>
<?php
}
