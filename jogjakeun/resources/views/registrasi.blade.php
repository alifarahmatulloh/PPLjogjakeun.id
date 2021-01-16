<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->


<!-- Jangan diganti -->
<link href="{{asset('css/registrasi.css')}}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action='/registrasi/store' method="POST">
  @csrf
  
  <!-- <fieldset> -->
    <div class="container py-3">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Ayo registrasi sekarang juga!
            </h1>
            <h3 class="wv-heading--subtitle">
               Temukan banyak lomba-lomba menarik 
            </h3>
         </div>
      </div>
    </div>
    <br>
    <div class="container py-3">
      
    <div class="row">
      <div class="col-12 col-sm-8 col-md-6 mx-auto">
        <div class="Registrasi" class="card">
          <div class="card">
          <div class="card-body">
                    <div class="card-title">
                    <h2 class="text-center">Registrasi</h2>
                    </div>

          <div class="form-group">
          <label class="font-weight-bold" for="Username"><span class="fas fa-signature"></span>Username</label>
                     <input type="text" name="username"  class="form-control my-input" id="username" placeholder="Masukan Username">
                     <p class="help-block" id="help-block-username"></p>
          </div>
           <div class="form-group">
             <label class="font-weight-bold" for="Email"><span class="fas fa-envelope"></span>Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Masukan E-mail">
                     <p class="help-block" id="help-block-email"></p> 
          </div>
           <div class="form-group">
             <label class="font-weight-bold" for="No_hp"><span class="fas fa-phone-volume"></span>No.HP</label>
                     <input type="text" min="0" name="no_hp"  class="form-control my-input" id="no_hp" placeholder="Masukan NO HP">
                     <p class="help-block" id="help-block-no_hp"></p>

          </div>
         <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm bg-warning"><span class="fas fa-feather">Register </button>
                  </div>


        </div>
        </div>
      </div>
</div>
</div>
      
  


























    <!-- <div id="legend"> -->
      <!-- <legend class="">Register</legend> -->
    <!-- </div> -->
    <!-- <div class="control-group"> -->
      <!-- Username, id dan name-nya jangan diganti-->
      <!-- <label class="control-label"  for="username">Username</label> -->
      <!-- <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block" id="help-block-username"></p>
      </div> -->
    <!-- </div> -->
 
    <!-- <div class="control-group"> -->
      <!-- E-mail, id dan name-nya jangan diganti -->
      <!-- <label class="control-label" for="email">E-mail</label> -->
      <!-- <div class="controls"> -->
        <!-- <input type="text" id="email" name="email" placeholder="" class="input-xlarge"> -->
        <!-- <p class="help-block" id="help-block-email"></p> -->
      <!-- </div> -->
    <!-- </div> -->
 
    <!-- <div class="control-group"> -->
      <!-- Password, id dan name-nya jangan diganti-->
      <!-- <label class="control-label" for="Nomor Hp">Nomor Hp</label> -->
      <!-- <div class="controls"> -->
        <!-- <input type="text" id="no_hp" name="no_hp" placeholder="" class="input-xlarge"> -->
        <!-- <p class="help-block" id="help-block-no_hp"></p> -->
      <!-- </div> -->
    <!-- </div> -->

   
    <!-- Jangan diganti  -->
    @if (Session::has('info'))
      <p id="recap-information">{{ Session::get('info') }}</p>
    @endif
    
 
    <!-- <div class="control-group"> -->
      <!-- Button -->
      <!-- <div class="controls">
        <button class="btn btn-success">Register</button>
      </div> -->
    <!-- </div> -->

<!-- </fieldset> -->


</form>

<!-- Jangan diganti -->
<script  src="{{asset('js/validate_register.js')}}"></script>


