
<div class="col-lg-4 border-right text-white rounded" style="background-color:#083872;height:110vh;" >
  <div class="form-group p-30" id="login">
    <br>
    @auth
    <h2 class=" p-30 ">
      <font size="2">WELCOME </font>
      <br>
      <b>{{ strtoupper(Auth::user()->name) }}</b>
    </h2>
    @endauth
    <br>
  </div>
  <br>
</div>
      