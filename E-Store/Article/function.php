<?php
    $connection=new mysqli('localhost', 'root','', 'db_e-store');
    function getProduct() {
    global $connection;
    $sql="SELECT * FROM `tbl_e-store`";
    $data=$connection->query($sql);
    while($row=$data->fetch_assoc()){
    echo'
        <div class="cards">
            <div class="title">
                '.$row['title'].'
            </div>
            <div class="image">
                <img src="../Image/'.$row['image'].'" alt="">
            </div>
            <div class="price">
                <span>price: '.$row['price'].'$</span>
                <button >Add to cart</button>
            </div>
        </div>
            ';
        }
    }
    function getByCategory($category){
        global $connection;
        $sql="SELECT * FROM `tbl_e-store` WHERE `category`='$category'";
        $data=$connection->query($sql);
        while($row=$data->fetch_assoc()){
            echo '
            <div class="cards">
            <div class="title">
                '.$row['title'].'
            </div>
            <div class="image">
                <img src="../Image/'.$row['image'].'" alt="">
            </div>
            <div class="price">
                <span>price : '.$row['price'].'$</span>
                <button >Add to cart</button>
            </div>
        </div>
            ';
        }
    }
?>