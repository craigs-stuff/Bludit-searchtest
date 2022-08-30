<?php
    $bannerText = array_slice($content,0,1); //element 0
    $tryMe = array_slice($content,1,1);
    $slideOuts = array_slice($content,2,3);  //purple waves section
    $threeAcross = array_slice($content,5,3); // three across
    $threeAcross2 = array_slice($content,8,3); // three across second row

    
    
?>

<div class='start container'>
    <div class="topBG" style="background-image: url('<?php echo $bannerText[0]->coverImage(); ?>');">
        <div id="bck_1" class="bck">
            <div id="block_1" class="row rowNo46">
                <div>
                    <h1><?php echo $bannerText[0]->title(); ?></h1>
                    <p><?php echo $bannerText[0]->description(); ?></p>
                    <a class='btn' href='<?php echo $bannerText[0]->permalink(); ?>'>Learn More</a>
                </div>
            </div>
        </div>
    </div> <!-- close header BG -->



    <div id="bck_threeAcross" class="bck">
        <div id="block_threeAcross" class="row rowNo08">
            <img style="display:block; margin:0 auto; width:100px; height:auto;"
                src="<?php echo $tryMe[0]->coverImage(); ?>" alt="logo">
            <h2 class="rowNo08Cont">
                Aliquet enim tortor atel
            </h2>
            <p>Dignissim cras tincidunt lobortis feugiat. Aliquam id diam maecenas.</p>
            <a class="btn" href="<?php echo $tryMe[0]->permalink(); ?>">Read more</a>
        </div>
    </div>





    <!-- start purple waves -->

    <div class="wave">
        <svg class="wave1 wvTop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>

    <?php 
        $slideOutArr = ['Right','Left','Right','Left'];
        $slideRowArr = ['02','10','02','10'];
        $slideArrCount = 0;

        foreach($slideOuts as $slide){
        echo    "<div id='bck_". $slide->slug() ."' class='bck bgcolour-".$slideArrCount."'>
                    <div id='block_". $slide->slug() ."' class='homeSlider row rowNo".$slideRowArr[$slideArrCount]."'>
                        <img data-scroll='animate__animated animate__fadeIn".$slideOutArr[$slideArrCount]."' src='".$slide->coverImage()."' alt=''>
                        <div>
                            <h3>".$slide->title()."</h3>
                            <p class='slideOuts'>".$slide->description()."</p>
                            <a href='".$slide->permalink()."' class='btn'>Learn More</a>
                        </div>
                    </div>
                </div>";
                $slideArrCount ++;
        }
    ?>

    <div class="wave">
        <svg class="wave1 wvBottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
            preserveAspectRatio="none">
            <path
                d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                class="shape-fill"></path>
        </svg>
    </div>

    <!-- end purple waves -->

    <div id="bck_1" class="bck">
        <div id="block_1" class="row text-left rowNo16">
            <?php
                foreach($threeAcross as $ta){
                    echo "<div class='block16'>".
                    "<img class='threeAcrossImg' src='".$ta->coverImage()."' alt=''>
                    <h3><a class='imgPlace' href='".$ta->permalink()."' alt=''>".$ta->title()."</a></h3>
                    </div>";
                }
            ?>
        </div>
    </div>
    <div id="bck_1" class="bck">
        <div id="block_1" class="row text-left rowNo16">
            <?php
                foreach($threeAcross2 as $ta2){
                    echo "<div class='block16'>".
                    "<img class='threeAcrossImg' src='".$ta2->coverImage()."' alt=''>
                    <h3><a class='imgPlace' href='".$ta2->permalink()."alt=''>".$ta2->title()."</a></h3>
                    </div>";
                }
            ?>
        </div>
    </div>


    <div class="bottomBG">
        <div id="bck_12" class="bck">
            <div id="block_12" class="row rowNo08">
                <h3 class="rowNo08Cont">Sign up today</h3>
            </div>
        </div>
        <div id="bck_13" class="bck">
            <div id="block_13" class="row rowNo15">
                <form class="row" method="post" action="<?php echo htmlspecialchars($site->url());?>/signup">
                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo $email;?>">
                    <input type="submit" name="submit" value="Submit"><br><br>
                    <span class="error"><?php echo $emailErr;?></span>
                </form>
            </div>
        </div>
    </div>


</div><!-- close start -->