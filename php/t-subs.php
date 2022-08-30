<?php

/* 
================================
@Author: Craig Adams
@Title: t-2.php
@Date: 31/05/2022
@function: 
   Template for content page. 
   Shows listing of child pages on right 
   Set at max four items listed.
================================
*/

?>

<div class='start container' id="t-subs">

    <div id="bck_32" class="bck">
        <div id="block_32" class="row rowNo32">
            <div id="bluditContent">
                <img id="topImg" class="animate__animated animate__fadeInLeft" src="<?php echo $page->coverImage();?>" alt="">
                <h1><?php echo $page->title(); ?></h1>
                <p>
                <span class="post-name">By <?php echo $page->user('nickname'); ?></span><br/>
				<span class="post-date"><?php echo $page->date(); ?></span><br>
                </p>
                <?php echo $page->content(); ?>
            </div>
            <aside>
            <h3>Top Stories</h3>
            <?php

                if ($page->hasChildren()) {
                    $countLinks = 0;
                    // list top for links
                    if($countLinks < 4){
                        $children = $page->children();
                        foreach ($children as $child) {
                           echo "<a class='sideLinks' href='".$child->permalink()."'>".$child->title()."</a>";
                        }
                        $countLinks ++;
                    }  
                }
            ?>
            </aside>
        </div>
    </div>

</div><!-- close start -->

