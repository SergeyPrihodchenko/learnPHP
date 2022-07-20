<h1>Catalog</h1>
<div class="catalog">
    <?php foreach ($catalog as $item): ?>
        <div class="catalog_item">
            <p>name : <?=$item['name']?></p>
            <p>price : <?=$item['price']?> $</p>
            <button>Buy</button>
        </div>
    <?php endforeach; ?>
</div>