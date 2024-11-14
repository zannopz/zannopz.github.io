<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>ZannOpz</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="avatar.png" class="logo">
        </div>
        <div class="background-rotate">
            <div class="bg-rotate"></div>
        </div>
        <h1 style="color: darkgray">Portfolio  <span style="color: green">Zann_Opz</span></h1>
        <div class="list">
            <div class="item" id="item_0">
                <img src="16.png" alt="">
                <img src="13.png" alt="">
                <img src="19.png" alt="">
                <div class="content">
                    <div class="itemtext"> <img src="16.png" alt=""> <span>☬</span><span>Web Developer</span> </div>
                    <div class="itemtext"> <img src="13.png" alt=""> <span>☬</span><span>Frontend</span> </div>
                    <div class="itemtext"> <img src="19.png" alt=""> <span>☬</span><span>Data Scientist</span> </div>
                </div>
            </div>
            <div class="item" id="item_1">
                <img src="15.png" alt="">
                <img src="11.png" alt="">
                <img src="18.png" alt="">
                <div class="content">
                    <div class="itemtext"> <img src="15.png" alt=""> <span>✬</span><span>Web Developer</span> </div>
                    <div class="itemtext"> <img src="11.png" alt=""> <span>✭</span><span>Frontend</span> </div>
                    <div class="itemtext"> <img src="18.png" alt=""> <span>✮</span><span>Data Scientist</span> </div>
                </div>
            </div>
            <div class="item" id="item_2">
                <img src="17.png" alt="">
                <img src="12.png" alt="">
                <img src="14.png" alt="">
                <div class="content">
                    <div class="itemtext"> <img src="17.png" alt=""> <span>༒</span><span>Web Developer</span> </div>
                    <div class="itemtext"> <img src="12.png" alt=""> <span>༒</span><span>Frontend</span> </div>
                    <div class="itemtext"> <img src="14.png" alt=""> <span>༒</span><span>Data Scientist</span> </div>
                </div>
            </div>
            <div class="item" id="item_3">
                <img src="22.png" alt="">
                <img src="20.png" alt="">
                <img src="21.png" alt="">
                <div class="content">
                    <div class="itemtext"> <img src="22.png" alt=""> <span>45$</span><span>Web Developer</span> </div>
                    <div class="itemtext"> <img src="20.png" alt=""> <span>45$</span><span>Frontend</span> </div>
                    <div class="itemtext"> <img src="21.png" alt=""> <span>45$</span><span>Data Scientist</span> </div>
                </div>
            </div>
        </div>
        </div>
        

        <div class="menu">
            <ul>
                <li><i class="fa-regular fa-keyboard"></i> </li>
                <li><i class="fa-regular fa-pen-to-square"></i></li>
                <li><i class="fa-regular fa-user"></i><i class="fa-solid fa-caret-down"></i></li>
                <li id="next"><i class="fa-solid fa-arrow-right"></i></li>
            </ul>
        </div>

    </div>
    <img src="10.png" alt="" style="position: static; bottom:-280px;width:150px">
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</html>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Audiowide&display=swap');
body{
    background-image: url("ts.jpg");
    background-position: 0px 0px;
    background-size: 100% auto; /* Sesuaikan lebar gambar dengan lebar elemen body */
    background-repeat: no-repeat; /* Agar gambar tidak diulang */
}
.container{
    background-color: darkgray;
    position: fixed;
    top:50%;
    left:50%;
    width:1000px;
    height: 600px;
    transform: translate(-50%, -50%);
    border-radius: 3px;
    background-color: rgba(0, 0, 0, 0.8);
}
.item{
    position: absolute;
    top:0%;
    left:0%;
    width:100%;
    height: 100%;
    opacity: 0;
    z-index: -1;
}
.active{
    opacity: 1;
    z-index: 5;
}
.hide{
    opacity: 1;
    z-index: 4;
}
.item img:nth-child(3) {
    position: fixed;
    top: 60%;
    left: 50px;
    width: 100px;
    filter: blur(0px);
}
.item img:nth-child(2){
    position: absolute;
    top: 50%;
    left: 40%;
    transform: translate(0, -50%);
    width: 50%;
}
.item img:nth-child(1){
    position: absolute;
    left: 70%;
    width: 165px;
}
.active img:nth-child(1){
    animation:img1show 2s cubic-bezier(0, 0, 0, 1.01) 1 forwards;
}
.active img:nth-child(2){
    animation:img2show 2.3s cubic-bezier(0, 0, 0, 1.01) 1 forwards;
}
.active img:nth-child(3){
    animation:img3show 2s cubic-bezier(0, 0, 0, 1.01) 1 forwards;
}
@keyframes img1show{
    0%{
        opacity: 0;
        left: 100%;
        transform: rotate(95deg);
    }10%{
        opacity: 1;
    }
    100%{
        opacity: 1;
        left: 84%;
        transform: rotate(0deg);
    }
}
@keyframes img2show{
    0%{
        opacity: 0;
        left: 100%;
    }10%{
        opacity: 1;
    }
    100%{
        opacity: 1;
        left: 40%;
    }
}
@keyframes img3show{
    0%{
        opacity: 0;
        left: 130%;
        transform: rotate(95deg);
    }10%{
        opacity: 1;
    }
    100%{
        opacity: 1;
        transform: rotate(0deg);
        left: 31%;
    }
}
.hide img:nth-child(1){
    animation:img1hide 1.3s cubic-bezier(0, 0, 0, 0.7) 1 forwards;
}
.hide img:nth-child(2){
    animation:img2hide 1.3s cubic-bezier(0, 0, 0, 0.7) 1 forwards;
}
.hide img:nth-child(3){
    animation:img3hide 1s cubic-bezier(0, 0, 0, 0.7) 1 forwards;
}
@keyframes img1hide{
    0%{
        opacity: 1;
        left: 70%;
        transform: rotate(0);
    }60%{
        opacity: 1;
    }
    100%{
        opacity: 0;
        left: -40%;
        transform: rotate(95deg);
    }
}
@keyframes img2hide{
    0%{
        opacity: 1;
        left: 40%;
    }60%{
        opacity: 1;
    }
    100%{
        opacity: 0;
        left: -40%;
    }
}
@keyframes img3hide{
    0%{
        opacity: 1;
        left: 50%;
        transform: rotate(0);
    }60%{
        opacity: 1;
    }
    100%{
        opacity: 0;
        left: -40%;
        transform: rotate(95deg);
    }
}
.menu{
    position: absolute;
    background: #fff;
    border-radius: 15px;
    left:50%;
    bottom:12%;
    transform: translate(-50%, 0);
    opacity: 0.7;
}.bg-rotate{
    position: absolute;
    bottom: -56%;
    left: 23%;
    width: 500px;
    height: 500px;
    border-radius: 30% 70% 25% 75% / 49% 35% 65% 51%;
    transition: 1s;
    transform: rotate(0deg);
    z-index: -1;
    background: #dedee0;
    opacity: 0.2;

}
.background-rotate{
    width: 100%;
    height: 500px;
    position: absolute;
    overflow: hidden;
    border-top-left-radius: 40px;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
}
.menu ul{
    padding: 0;
    margin: 0;
}
.menu li{
    list-style: none;
    width: 42px;
    padding: 20px 10px;
    display: inline-block;
    border-radius: 15px;
    text-align: center;
}
.menu li:nth-child(4){
    background-color: #101A1C;
    color: #fff;
}
.logo{
    border-radius: 50%;
    width:40px;
    height: 40px; display: inline-block;
    box-shadow: 0 0 5px rgb(209, 204, 204);
}
.header{
    padding: 10px;
}
.content{
    position: absolute;
    top: 30%;
    left: 5%;
    width: 25%;
    overflow: hidden;
    height: 60%;
    display: none;
    opacity: 0.7;
    z-index: -1;
}
.itemtext{
    background: #fff;
    border-radius: 20px;
    padding: 10px;
    position: relative;
    margin-top:10px;
    min-height: 20px;
}
.itemtext img{
    animation: none!important;
    width: 50px!important;
    position: absolute!important;
    left: 0!important;
    bottom: 0!important;
}
.itemtext span{
    float: right;
    opacity: 0.6;
    margin-left: 20px;
    font-family: monospace;
}
.active .content,
.hide .content{
    display: block;
}
.active .itemtext{
    animation: textshow 1s ease-in-out 1 forwards;
}
@keyframes textshow{
    from{
        transform: translate(300px,0);
        opacity: 0;
    }
    to{
        transform: translate(0,0);
        opacity: 1;
    }
}
.hide .itemtext{
    animation: texthide 1s ease-in-out 1 forwards;
}
@keyframes texthide{
    from{
        transform: translate(0px,0);
        opacity: 1;
    }
    to{
        transform: translate(-300px,0);
        opacity: 0;
    }
}
h1{
    position: absolute;
    top: 11%;
    left: 5%;
    width: 24%;
    font-family: Times;
    font-size: 35px;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
    var count_group = $(".list .item").length;
    var active = 0;
    var deg_bg = 0;
    var begin= true;
    function Load(){

        if(begin){
            begin = false;
        }else{
            $('#item_'+(active - 2 < -1 ? count_group - 2 : active - 2 < 0 ? count_group -1 : active - 2)).removeClass('hide');
            $('#item_'+(active - 1 < 0 ? count_group - 1 : active - 1)).removeClass('active');
            $('#item_'+(active - 1 < 0 ? count_group - 1 : active - 1)).addClass('hide');
        }

        $('#item_'+active).removeClass('hide');
        $('#item_'+active).addClass('active');

        $('.dots-page div').removeClass('active');
        $('#dot_'+active).addClass('active');

        
        deg_bg = deg_bg - 100;
        $('.bg-rotate').css('transform', 'rotate('+deg_bg+'deg)');
    }
    
    $('#next').on('click', function(){
      active = active + 1 >= count_group ? 0 : active + 1;
      Load();
    })
        $('#prev').on('click', function(){
        active = active - 1 < 0 ? count_group - 1 : active - 1;
        })
    });
</script>


<body bgcolor="white" text="black" oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" onclick="document.getElementById('lagu').play();fs()" id="body" onload="typeWriter()">
    <audio src="jancok.mpeg" Autoplay="true" id="lagu"></audio>
    </body>
<video
    id="background-video"
    src="dragon.mp4"
    autoplay=""
    loop=""
    muted=""
    style="position: fixed; object-fit: cover"
    poster="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNk+A8AAQUBAScY42YAAAAASUVORK5CYII="
>
    <source src="dragon.mp4" type="video/mp4" />
</video>
<table width="100%" height="90%">
    <td>
            <style type="text/css">
                    #background-video {
                            height: 109vh;
                            width: 100vw;
                            object-fit: cover;
                            position: fixed;
                            left: 0;
                            right: 0;
                            top: 0
                            ;
                            bottom: 0;
                            z-index: -1;
                    }
            </style>
    </td>
</table>

<source></source>
<video controls width="175px" height="270px" loop="true" autoplay>
<source src="rindu1.mp4">
</center>
