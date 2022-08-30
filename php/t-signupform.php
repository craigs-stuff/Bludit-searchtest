

<div class='start container' id="page">
    <div id="bck_3" class="bck">
        <div id="block_3" class="row rowNo03">
            <div id="bluditContent">
                <h1><?php echo $page->title(); ?></h1>
                <?php echo $page->content(); ?>
            </div>
        </div>
    </div>
    <div id="bck_13" class="bck">
    <div id="block_13" class="row rowNo15">
    <form class="row" method="post" action="<?php echo htmlspecialchars($site->url());?>/thanks"> 
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email;?>">                    
            <input type="submit" name="submit" value="Submit"><br><br>
            <span class="error"><?php echo $emailErr;?></span>
        </form>
    </div>
</div>
</div><!-- close start -->
