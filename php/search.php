
<div class='start container' id="page">
    <div id="bck_3" class="bck">
        <div id="block_3" class="row rowNo03">
            <div id="bluditContent">
                <h1>Search results</h1>
                <p>. . . . . . . . </p>
                <?php
                global $content;

                foreach ($content as $page) {

                    if($page->coverImage()){
                        echo  "<img id='searchCoverImage' src='".$page->coverImage()."' alt='logo' />";
                    }
                    else{
                        echo  "<img id='searchCoverImage' src='".Theme::src('img/defaultSearchResLogo.png')."' alt='default search logo' />";
                    }
                    
                    echo "<h2><a href='".$page->permalink()."'>".ucwords($page->title())."</a></h2>";
                    echo "<p><span id='articleDate'>".$page->date()."</span><br>".$page->description()."</p>";
                }
                
                ?>
                
            </div>
        </div>
    </div>
</div><!-- close start -->
