<footer>
        <div class="containers">
            <div class="noi-dung about">
                <h2>Về Chúng Tôi</h2>
                <p>Lorem ipsumdolor sit...</p>
                <ul class="social-icon">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="noi-dung links">
                <h2>Đường Dẫn</h2>
                <ul>
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Thông Tin Liên Lạc</a></li>
                    <li><a href="#">Chính Sách - Hướng Dẫn</a></li>
                </ul>
            </div>
            <div class="noi-dung contact">
                <h2>Thông Tin Liên Hệ</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker"></i></span>
                        <span>
                            Quận Thủ Đức, Thành Phố Hồ Chí Minh, <br>
                            Việt Nam <br />
                        </span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <p><a href="#">+84 352 180 875</a>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <p><a href="#">trungthanh0199@gmail.com</a></p>
                   </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--end - footer-->
    <script>
    const itemsliderbar = document.querySelectorAll(".category-left-li")
    itemsliderbar.forEach(function(menu,index){
        menu.addEventListener("click",function(){
            menu.classList.toggle("block")
        })
    })
    </script>
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
<script>
    const bigImg = document.querySelector(".product-content-left-big-img img")
    const smallImg = document.querySelectorAll(".product-content-left-small-img img")
    smallImg.forEach(function(imgItem, X){
        imgItem.addEventListener("click",function(){
           bigImg.src = imgItem.src 
        })
    })
</script>

</body>

</html>