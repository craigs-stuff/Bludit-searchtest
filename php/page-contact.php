<?php
    $topThree = array_slice($content, 0, 3);
    $restOfContent = array_slice($content, 3);
?>

<div class='start container'>

    <div id="bck_8" class="bck">
        <div id="block_8" class="row rowNo10">
            <div>
                <h3><?php echo $page->title(); ?></h3>
                <p>
                <?php echo $page->content(); ?>
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <img class="animate__animated animate__fadeInLeft" src="<?php echo Theme::src('img/techPad2.png');?>" alt="">
        </div>
    </div>

</div><!-- close start -->
