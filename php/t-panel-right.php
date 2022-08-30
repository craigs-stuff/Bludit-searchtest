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

<div class='start container' id="t-panel-right">
    <div id="bck_32" class="bck">
        <div id="block_32" class="row rowNo32">
            <div id="bluditContent">
                <h1><?php echo $page->title(); ?></h1>
                <p>
                <span class="post-date"><?php echo $page->date(); ?></span><br/>
                </p>
                <?php echo $page->content(); ?>
            </div>
            <aside id="sidePanelRight">
            <h4>Top Stories</h4>
            <?php

                if ($page->hasChildren()) {
                    $countLinks = 0;
                    // list top four links
                    if($countLinks < 4){
                        $children = $page->children();
                        foreach ($children as $child) {
                           echo "<img src='".$page->coverImage()."' alt=''><a class='sideLinks' href='".$child->permalink()."'>".$child->title()."</a>";
                        }
                        $countLinks ++;
                    }  
                }
            ?>
            </aside>
        </div>
    </div>

</div><!-- close start -->

