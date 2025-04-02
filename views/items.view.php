<?php require_once("partials/head.php") ?>
<?php require_once('partials/header.php') ?>
<?php require_once('partials/hero.php') ?>
<?php require_once('partials/itemCard.php') ?>
<?php require_once('model/Item.php'); 

$items = [
    new Item("Sword", "A sharp blade.", "sword.jpg", "Weapon", 1),
    new Item("Shield", "A sturdy shield.", "shield.jpg", "Armor", 2),
    new Item("Potion", "Heals 50 HP.", "potion.jpg", "Consumable", 3),
];
?>


<?php hero("Items", "Discover the items you can use in your adventure!") ?>

<section class="bg-gray-950 py-20 border-b border-white/10">
    <div class="flex max-w-5xl justify-between w-full mx-auto">
        <?php foreach ($items as $item): ?>
            <div class="flex flex-wrap gap-4">
                <?php itemCard($item); ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
        