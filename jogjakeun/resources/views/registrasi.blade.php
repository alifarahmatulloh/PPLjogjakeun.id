<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Jangan diganti -->
<link href="{{asset('css/registrasi.css')}}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action='/registrasi/store' method="POST">
  @csrf
  
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username, id-nya jangan diganti-->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block" id="help-block-username"></p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail, id-nya jangan diganti -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block" id="help-block-email"></p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password, id-nya jangan diganti-->
      <label class="control-label" for="Nomor Hp">Nomor Hp</label>
      <div class="controls">
        <input type="text" id="no_hp" name="no_hp" placeholder="" class="input-xlarge">
        <p class="help-block" id="help-block-no_hp"></p>
      </div>
    </div>

    <!-- Jangan diganti  -->
    @if (Session::has('info'))
      <p id="recap-information">{{ Session::get('info') }}</p>
    @endif
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>

<!-- Jangan diganti -->
<script  src="{{asset('js/validate_register.js')}}"></script>