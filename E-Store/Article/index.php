<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRONIC-Store</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="header.css">
   <link rel="stylesheet" href="home.css">
   <link rel="stylesheet" href="footer.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="https://i.pinimg.com/736x/99/10/5d/99105d3b57581ef3bd05fbf27dbd05ba.jpg">
</head>
<body>
    <?php
        include 'header.php'
    ?>
    <section>
 
   

    </section>

    <?php include 'footer.php' ?>

</body>
</html>
<script>
    $(document).ready(()=>{
        function Ajax(url){
            $.ajax({
            url:url,
            cache:false,
            success:function(respone){
                const res=`${respone}`;
                $('section').html(res);
            }
        })
        }
        Ajax('home.php')
        $('#home').click(()=>{
            Ajax('home.php')
        })
        $('#laptop').click(()=>{
            Ajax('laptop.php');
        })
        $('#desktop').click(()=>{
            Ajax('desktop.php');
        })
        $('#phone').click(()=>{
            Ajax('phone.php');
        })
        $('#accessories').click(()=>{
            Ajax('accessories.php');
        })
    })
</script>