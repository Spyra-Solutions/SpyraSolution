@include('component/header')
<div class="mainContainer">
    <img src="{{ asset('images/b.jpg') }}" alt="" class="homeBanner">
    <div class="text-block">
        <h1><span class="spyra">SPYRA</span> <span class="solution">SOLUTION</span></h1>
        <span class="for">FOR : </span> &nbsp; <span id="typewriter" class="typewriter"></span>
        <div>
            <a href="" class="socialMedia"><i class="bi bi-facebook"></i></a>
            <a href="" class="socialMedia"><i class="bi bi-twitter"></i></a>
            <a href="" class="socialMedia insta"><i class="bi bi-instagram"></i></a>
            <a href="" class="socialMedia"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
</div>
@include('about')
@include('workflow')
@include('component/footer')