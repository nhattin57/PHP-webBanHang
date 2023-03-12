
    <!----end-menu----------->

    <?php 
        require 'header.php';
    ?>
    <!-----Slider---------->
    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="images/img15.jpg" alt="">
            <img src="images/img02.png" alt="">
            <img src="images/img03.jpg" alt="">
            <img src="images/img04.png" alt="">
            <img src="images/img05.jpg" alt="">
            <div class="dot-container">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <!-- <div class="dot-container"> -->
            <!-- <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div> -->
    </section>
    <!-- VIEW PRODUCT -->
    <?php

            include '../Back-end/productViewindex.php'
    ?>

    <!-- END VIEW PRODUCT -->
    <!-- START FOOTER -->
    <?php 
        include 'footer.php';
    ?>
        <!-- END FOOTER -->