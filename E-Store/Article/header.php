<header>
    <div class="header">
        <div class="logo">
            <img src="https://i.pinimg.com/736x/99/10/5d/99105d3b57581ef3bd05fbf27dbd05ba.jpg" alt="">
        </div>
    </div>
</header>
<nav>
<ul>
        <li><a href="#" id="home"><i class="fa-solid fa-house me-2"></i>Home</a></li>
        <li><a href="#" id="laptop"><i class="fa-solid fa-laptop me-2"></i>Laptop</a></li>
        <li><a href="#" id="desktop"> <i class="fa-solid fa-desktop me-2"></i>Desktop</a></li>
        <li><a href="#" id="phone"><i class="fa-solid fa-mobile-screen-button me-2"></i>Phone</a></li>
        <li><a href="#" id="accessories"><i class="fa-solid fa-gears me-2"></i>Accessories</a></li>
        <li><a href="#" id="qr" > <i class="fa-solid fa-phone me-2"></i>Contact Us</a></li>
        <li><a href="#" id="location"><i class="fa-solid fa-location-dot me-2"></i>Location</a></li> 
    </ul>
    <div class="carts">
    <i class="bi bi-cart4"></i>
    </div>
  
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="https://gagadget.com/media/cache/8f/6e/8f6efaf044d66f69856d0cd17e25378f.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.pixelstalk.net/wp-content/uploads/2016/08/Msi-Laptop-Background.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://robots.net/wp-content/uploads/2023/12/11-best-msi-gaming-laptop-bundle-for-2023-1701781080.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="contactModal">
    <div class="qr">
    <i class="fa-solid fa-xmark"></i>
    <h3>Scan For Contact</h3>
    <img src="img/savin_zzzz_qr.png" alt="">
    </div>
</div>
<div class="localtion">
<i class="fa-solid fa-ban"></i>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3891.6220229034243!2d103.44869888913018!3d12.738063249399477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310567001fc04143%3A0x6a3d6707db23510e!2z4Z6C4Z-B4Z6g4Z6K4Z-S4Z6L4Z624Z6T4Z6b4Z-E4Z6A4Z6C4Z-S4Z6a4Z684Z6f4Z624Z6c4Z-J4Z624Z6T4Z-L!5e0!3m2!1sen!2skh!4v1733931536193!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
</div>
<script>
    $(document).ready(()=>{
        $('#qr').click(()=>{
            $('.contactModal').fadeIn(300);
        })
        $('.fa-xmark').click(()=>{
            $('.contactModal').fadeOut(300);
        })
        $('#location').click(()=>{
            $('.localtion').slideDown(300);
        })
        $('.fa-ban').click(()=>{
            $('.localtion').slideUp(300);
        })
        $('a').parent('li').eq(0).addClass('active');
        $('a').click(function(){
            $('a').parent('li').removeClass('active');
            $(this).parent('li').addClass('active')
        })
        
    })
</script>