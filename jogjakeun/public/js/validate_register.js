$( "form" ).submit(function( event ) {
    var username = $('#username').val();
    var nomor_hp = $('#no_hp').val();
    var email = $('#email').val();

    var usernameLength  = username.length;
    var is_validate_username = false;
    var is_validate_email = false;
    var is_validate_nomor_hp = false;

    var isHasSpace = username.search(' ');
    var isHasChar = nomor_hp.search(/[a-z]|\+/g);
    var isHasAt = email.search(/\@/g);

    if (usernameLength < 4 || usernameLength > 20) {
        $('#help-block-username').text('username salah')
        $('#username').css('border-color', 'red');
    } else if (isHasSpace > -1) {
        $('#help-block-username').text('username hanya berisi huruf atau gabungan angka dan huruf tanpa spasi')
        $('#username').css('border-color', 'red');
    } else {
        $('#help-block-username').text('')
        is_validate_username = true
    } 
    
    if(isHasChar > -1) {
        $('#help-block-no_hp').text('Nomor hp berupa angka')
        $('#no_hp').css('border-color', 'red');
    } else {
        $('#help-block-no_hp').text('')
        is_validate_nomor_hp = true
    }

    if(isHasAt == -1) {
        $('#help-block-email').text('format email tidak tepat')
        $('#email').css('border-color', 'red');
    } else {
        $('#help-block-email').text('')
        is_validate_email = true
    }

    if (is_validate_username && is_validate_nomor_hp && is_validate_email) {
        return
    }

    event.preventDefault();
  });