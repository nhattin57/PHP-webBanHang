
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
        </div>
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
        if(isset($_GET['message']))
            echo $_GET['message'];

            include '../Back-end/productViewindex.php'
    ?>

    <!-- END VIEW PRODUCT -->
    <!-- START FOOTER -->
    <?php 
        include 'footer.php';
    ?>
        <!-- END FOOTER -->
<script>
    const header = document.querySelector("header")
    window.addEventListener("scroll",function(){
        x = window.pageYOffset
        if(x>0){
            header.classList.add("sticky")
        }
        else{
            header.classList.remove("sticky")
        }
    })

    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let imgNuber = imgPosition.length
    let index = 0
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click",function(){
            slider (index)
        })
    })
    function imgSlide (){
        index++;
        console.log(index)
        if(index>=imgNuber) {index=0}
        slider (index)
    }
    function slider(index){
        imgContainer.style.left = "-" + index*100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,5000)

</script>