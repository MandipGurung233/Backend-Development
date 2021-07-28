@extends('main')
@section('content')	

       <!--Home section-->
    <section class="home" id="home">
     <div class="slider-box">
        <div id="slider" class="slides">
            <img src="./image/1.jpg"/>
            <img src="./image/2.jpg"/>
            <img src="./image/1.jpg"/>
            <img src="./image/2.jpg"/>            
        </div>
        <div class="indicator">
            <span id="btn1" class="active"></span>
            <span id="btn2"></span>
            <span id="btn3"></span>
            <span id="btn4"></span> 
        </div>
    <div class="buttonlearn col-md-7 col-sm-2">
    <a href="#" class="btn">learn More</a>
    </div>

    <script>
        var slide = document.getElementById("slider")
        var btn1 = document.getElementById("btn1")
        var btn2 = document.getElementById("btn2")
        var btn3 = document.getElementById("btn3")
        var btn4 = document.getElementById("btn4")

        btn1.onclick = function(){
            slide.style.transform ="translateX(0px)"
            btn1.classlist.add("active");
            btn2.classlist.remove("active")
            btn3.classlist.remove("active")
            btn4.classlist.remove("active")
        }
        btn2.onclick = function(){
            slide.style.transform ="translateX(-100%)"
            btn2.classlist.add("active");
            btn1.classlist.remove("active")
            btn3.classlist.remove("active")
            btn4.classlist.remove("active")
        }
        btn3.onclick = function(){
            slide.style.transform ="translateX(-200%)"
            btn3.classlist.add("active");
            btn1.classlist.remove("active")
            btn2.classlist.remove("active")
            btn4.classlist.remove("active")
        }
        btn4.onclick = function(){
            slide.style.transform ="translateX(-300%)"
            btn4.classlist.add("active");
            btn1.classlist.remove("active")
            btn2.classlist.remove("active")
            btn3.classlist.remove("active")
        }
    </script>
    </section>
<!--Event and new section starts-->
<section class="bg-light container-fluid" style="height:80vh;">
 <h1 style="text-align: center; padding-top: 20px;">EVENT & NEWS</h1>
   <div class="news container">
    <div class="event">
        <div class="event-list">
            <ul>
                <li>
                    <div class="time">
                        <h2>30</h2>
                        <h3>DEC 2020</h3>
                    </div>
                    <div class="details">
                        <p>lorem ipsum</p>
                        <a href="">Event Details</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="event-list bg-light">
            <ul>
                <li>
                    <div class="time">
                        <h2>31</h2>
                        <h3>DEC 2020</h3>
                    </div>
                    <div class="details">
                        <p>lorem ipsum</p>
                        <a href="">Event Details</a>
                    </div>
                </li>
            </ul>
            
        </div>
        <div class="event-list">
            <ul>
                <li>
                    <div class="time">
                        <h2>32</h2>
                        <h3>DEC 2020</h3>
                    </div>
                    <div class="details">
                        <p>lorem ipsum</p>
                        <a href="">Event Details</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>

        <!--image card-->
<div class="image">
<div class="gallery">
  <a target="_blank" href="1.jpg">
    <img src="./image/1.jpg" alt="Cinque Terre" width="900" height="800">
  </a>
  <div class="desc">lorem ipsum</div>
</div>

<div class="gallery">
  <a target="_blank" href="./image/2.jpg">
    <img src="./image/2.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Lorem ipsum</div>
</div>
<div class="gallery">
  <a target="_blank" href="./image/1.jpg">
    <img src="./image/1.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Lorem ipsum</div>
</div>
</div>
</div>
<div class="buttons container" style="padding-top:20px;">
    <a href="" style="padding-left: 40px; float: left;"><button class="btn btn-warning text-white" style="
    border: 5px solid black; height: 50px; width: 150px; padding-left: 20px; float: left;">More Events</button></a>
    <a href=""><button class="btn btn-warning text-white" style="
    border: 5px solid black; height: 50px; width: 150px; float: right;">More News</button></a>
</div>
</section>

<!--courses-->
<section class="container course">
<div>
    <div col-md-7 col-sm-12>
        <h1>COURSES</h1>
    </div>
    <div class="courseimg">
        <img src="./image/1.jpg">
        <img src="./image/2.jpg">
        <img src="./image/1.jpg">
    </div>
</div>   
</section>


<!--Gallery-->
<section class="bg-light container-fluid gallerys">

<div class="main container">
        <h1>Gallery</h1>
<div class="galleries">
    <div class="img">
        <img src="./image/1.jpg" />
    </div>
     <div class="img">
        <img src="./image/2.jpg" />
    </div>
     <div class="img">
        <img src="./image/1.jpg" />
    </div>
     <div class="img">
        <img src="./image/2.jpg" />
    </div>
     <div class="img">
        <img src="./image/1.jpg" />
    </div>
     <div class="img">
        <img src="./image/2.jpg"2/>
    </div>
    <div class="img">
        <img src="./image/1.jpg" />
    </div>
     <div class="img">
        <img src="./image/2.jpg" />
    </div>
</div>
</div>
</section>

<!--testimonial-->
<section class="testimonial" style="overflow: hidden;">
    <h1 style="text-align:center; padding-left:0px;">
        Testimonial
    </h1>
<div class="mainbox1">
<div class="mainbox" style="display:flex;" id="sliders">
    <div class="container test" id="slidetest">
        <div class="box container">
            <div class="imgBox" id="boxs">
                <img src="./image/1.jpg"/>                
            </div>
            <div class="name">
                <h1>Niraj kafle</h1>
                <h3>Developer</h3>
            </div>
            <div class="qoutes1">
                <img src="./image/qoutes1.png">
            </div>
            <div class="qoutes2">
                <img src="./image/qoutes2.png">
            </div>
            <p>Lorem ipsum dolor sit amet. Vel culpa alias aut eligendi id similique labore in praesentium quisquam. Eos voluptates delectus ut fugit enim eum alias natus eum reiciendis consequatur! Eos fugit quae non repellendus quia ut dolor ipsa ad voluptatum eius ut labore nobis.
            </p>
        </div>
        <div class="box container" id="next-box1">
            <div class="imgBox" id="box1">
                <img src="./image/1.jpg"/>                
            </div>
            <div class="name">
                <h1>Niraj kafle</h1>
                <h3>Developer</h3>
            </div>
            <div class="qoutes1">
                <img src="./image/qoutes1.png">
            </div>
            <div class="qoutes2">
                <img src="./image/qoutes2.png">
            </div>
            <p>Lorem ipsum dolor sit amet. Vel culpa alias aut eligendi id similique labore in praesentium quisquam. Eos voluptates delectus ut fugit enim eum alias natus eum reiciendis consequatur! Eos fugit quae non repellendus quia ut dolor ipsa ad voluptatum eius ut labore nobis.
            </p>
        </div>
        <div class="box container" id="next-box2">
            <div class="imgBox" id="box2">
                <img src="./image/1.jpg"/>                
            </div>
            <div class="name">
                <h1>Niraj kafle</h1>
                <h3>Developer</h3>
            </div>
            <div class="qoutes1">
                <img src="./image/qoutes1.png">
            </div>
            <div class="qoutes2">
                <img src="./image/qoutes2.png">
            </div>
            <p>Lorem ipsum dolor sit amet. Vel culpa alias aut eligendi id similique labore in praesentium quisquam. Eos voluptates delectus ut fugit enim eum alias natus eum reiciendis consequatur! Eos fugit quae non repellendus quia ut dolor ipsa ad voluptatum eius ut labore nobis.
            </p>
        </div>
        <div class="box container" id="next-box3">
            <div class="imgBox" id="box3">
                <img src="./image/1.jpg"/>                
            </div>
            <div class="name">
                <h1>Niraj kafle</h1>
                <h3>Developer</h3>
            </div>
            <div class="qoutes1">
                <img src="./image/qoutes1.png">
            </div>
            <div class="qoutes2">
                <img src="./image/qoutes2.png">
            </div>
            <p>Lorem ipsum dolor sit amet. Vel culpa alias aut eligendi id similique labore in praesentium quisquam. Eos voluptates delectus ut fugit enim eum alias natus eum reiciendis consequatur! Eos fugit quae non repellendus quia ut dolor ipsa ad voluptatum eius ut labore nobis.
            </p>
        </div>
    </div>
    <div class="indicators">
        <span id="btn5" class="active"></span>
        <span id="btn6"></span>
        <span id="btn7"></span>
        <span id="btn8"></span> 
    </div>
        <script>
        var slides = document.getElementById("slidetest")
        var btn5 = document.getElementById("btn5")
        var btn6 = document.getElementById("btn6")
        var btn7 = document.getElementById("btn7")
        var btn8 = document.getElementById("btn8")

        btn5.onclick = function(){
            slides.style.transform ="translateX(0px)"
            btn5.classlist.add("active");
            btn6.classlist.remove("active")
            btn7.classlist.remove("active")
            btn8.classlist.remove("active")
        }
        btn6.onclick = function(){
            slides.style.transform ="translateX(-120%)"
            btn6.classlist.add("active");
            btn5.classlist.remove("active")
            btn6.classlist.remove("active")
            btn7.classlist.remove("active")
        }
        btn7.onclick = function(){
            slides.style.transform ="translateX(-228%)"
            btn7.classlist.add("active");
            btn5.classlist.remove("active")
            btn6.classlist.remove("active")
            btn8.classlist.remove("active")
        }
        btn8.onclick = function(){
            slides.style.transform ="translateX(-333%)"
            btn8.classlist.add("active");
            btn5.classlist.remove("active")
            btn6.classlist.remove("active")
            btn7.classlist.remove("active")
        }
    </script>
</div>
</div>
</section>


<!--message section-->
<section class="message bg-light">
    <h1>message</h1>
    <div class="container heights" style="display:flex">
        <div class="msgimg">
            <img src="./image/1.jpg">
        </div>
        <div class="text">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. 
            </p>
            <h2>Lorem Ipsum</h2>
            <h3>Principal</h3>

        </div>
        
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection