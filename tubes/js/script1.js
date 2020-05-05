$(document).ready(function () {

    // hilangkan tombol cari
    $('#tombol-Cari').hide();

    // event ketika keyword diulis
    $('#keyword').on('keyup', function () {
        // munculkan icon loading
        $('.spinner-border').show();

        // ajax menggunakan load
        // $('#container').load('../ajax/elektronik.php?keyword=' + $('#keyword').val());
    
        // $.get()
        $.get('../ajax/leptop.php?keyword=' + $('#keyword').val(), function(data) {

            $('#container').html(data);
            $('.spinner-border').hide();

        });

    });

});