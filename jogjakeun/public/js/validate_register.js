function validate_input() {
    var username = $('#username').val();
    var usernameLength  = username.length;

    if(usernameLength < 4) {
        alert('error');
        
        $("form").submit(function(e){
            e.preventDefault();
            return  false;
        });
    } else {
        alert('true')
    }

}
$( "form" ).submit(function( event ) {
    var username = $('#username').val();
    var nomor_hp = $('#no_hp').val();
    var email = $('#email').val();

    var usernameLength  = username.length;
    var is_validate = false;

    var isHasSpace = username.search(' ');
    var isHasChar = nomor_hp.search(/[a-z]|\+/g);
    var isHasAt = email.search(/\@/g)

    if (usernameLength < 4 || usernameLength > 20) {
        $('#help-block-username').text('username salah')
    } else if (isHasSpace > -1) {
        $('#help-block-username').text('username hanya berisi huruf atau gabungan angka dan huruf tanpa spasi')
    } else {
        is_validate = true
    } 
    
    if(isHasChar > -1) {
        $('#help-block-no_hp').text('Nomor hp berupa angka')
    } else {
        is_validate = true
    }

    if(isHasAt > -1) {
        $('#help-block-email').text('format email tidak tepat')
    } else {
        is_validate = true
    }

    if (is_validate) {
        return
    }

    event.preventDefault();
  });