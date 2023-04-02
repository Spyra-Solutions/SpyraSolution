@include('component/header')
<style>

</style>
<div class="mainContainer">
    <img src="{{ asset('images/banner.png') }}" alt="" class="homeBanner">
    <div class="text-block">
        <h4><span class="spyra">SPYRA</span> <span class="solution">SOLUTION</span></h4>
        <span class="for">FOR : </span> &nbsp; <span id="typewriter">App Development</span>
      </div>
</div>

<script>
$('#typewriter').typewriter({
    text : ["String 1","String 2","String 3"],
    typeDelay: 200,
    waitingTime: 1000,
});
</script>
@include('component/footer')