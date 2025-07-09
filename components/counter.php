<section class="container-flude numbers-section text-center my-1">
    <div class="row">
        <?php foreach ($counterArray as $item): ?>
            <div class="col-md mb-4 p-5 justify-center text-center d-flex">
                <div class="counter-set d-flex">
                    <span class="plus-sign">+</span>
                <h2 class="counter text-white font-weight-bold ml-50" data-count="<?=  $item['count'] ?>">0</h2>
                </div>
            
                <p class="counter-title text-white  text-large">
                    <span class="d-block"><?= explode(' ', $item['title'])[0] ?></span>
                    <span class="d-block second"><?= implode(' ', array_slice(explode(' ', $item['title']), 1)) ?></span>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>