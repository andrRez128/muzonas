

<?php $__env->startSection('title-block'); ?>
    Home
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('leftPanel'); ?>
    <?php echo $__env->make('parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="sidePanel leftPanel">
        <div class="leftPanelEl favTrack">
            <h3>Favorite track</h3>
            <img src="/pictures/leftPanel/like.png" alt="">
        </div>
        <div class="leftPanelEl settings">
            <h3>Settings</h3>
            <img src="/pictures/leftPanel/settings.png" alt="">
        </div>
        <div class="leftPanelEl lang">
            <h3>English</h3>
            <img src="/pictures/leftPanel/lang/eng.png" alt="">
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <div class="centralPanel">
        <h1><span style="font-size:22px; margin: 75px;">Glad to see you again 👍</span></h1>
        <h6><ins>See all</ins></h6>
        <div class="line">
            <div class="genreBlock genreBlock1">
                <h3>#theBestRock</h3>
                <img src="/pictures/centralPanel/rock.png" alt="">
            </div>
            <div class="genreBlock genreBlock2">
                <h3>#theBestHip-Hop</h3>
                <img src="/pictures/centralPanel/hipHop.png" alt="">
            </div>
            <div class="genreBlock genreBlock3">
                <h3>#theBestTechno</h3>
                <img src="/pictures/centralPanel/techno.png" alt="">
            </div>
        </div>
        <div class="line">
            <div class="genreBlock genreBlock4">
                <h3>#theBestJazz</h3>
                <img src="/pictures/centralPanel/jazz.png" alt="">
            </div>
            <div class="genreBlock genreBlock5">
                <h3>#theBestClassic</h3>
                <img src="/pictures/centralPanel/classic.png" alt="">
            </div>
            <div class="genreBlock genreBlock6">
                <h3>#theBestPop</h3>
                <img src="/pictures/centralPanel/pop.png" alt="">
            </div>

        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\muzonas\resources\views/home.blade.php ENDPATH**/ ?>