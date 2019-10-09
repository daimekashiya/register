
<div class="col-lg-4 border-right text-white rounded" style="background-color:#083872;height:100vh;" >
  <div class="form-group p-30" id="login">
    <br>
    @auth
    <h2 class=" p-30 ">
      WELCOME 
      <br>
      <b>{{ strtoupper(Auth::user()->name) }}</b>
    </h2>
    @endauth
    <br>
    <br>
  </div>
  <br>
</div>
      