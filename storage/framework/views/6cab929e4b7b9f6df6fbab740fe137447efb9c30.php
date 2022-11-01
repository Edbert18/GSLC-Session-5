

<?php $__env->startSection('content'); ?>
<div class="container justify-content-center">

    <h3>Congratulations! Here is your Prize!</h3>
    <br>
    <?php switch($id):
        case (1): ?>
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/bulbasaur.avif" alt="">
        <?php break; ?>
        <?php case (2): ?>
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/charmander.avif" alt="">
        <?php break; ?>
        <?php case (3): ?>
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/squirtle.avif" alt="">
        <?php break; ?>
        <?php case (4): ?>
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/pikachu.avif" alt="">
        <?php break; ?>
    <?php endswitch; ?>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GSLC-Session5\resources\views/prize.blade.php ENDPATH**/ ?>