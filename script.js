function tampilkanMenu() {
    $.getJSON('data/sbux.json', function (data) {
        let menu = data.menu;
        $.each(menu, function (i, data) {
            $('#daftarMenu').append(`<div class="col-md-4 d-flex""><div 
            class="card mt-2 mb-4" style="width: 100%; min-height: max-content"><img 
            class="card-img-top" src="img/menu/${data.gambar}"> <div class="card-body"><h5 class="card-title">${data.nama}</h5><p 
            class="card-text"  style="height: 115px;">${data.deskripsi}</p><h5 class="card-title">${data.harga}</h5> <a href="#" class="btn btn-primary">Order Now!</a></div></div></div>`)
        });
    });
}

//Menampilkan default awal
tampilkanMenu();

$('.nav-link').on('click', function () {


    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori);

    if (kategori == 'All Menu') {
        tampilkanMenu();
        return;
    }

    $.getJSON('data/sbux.json', function (data) {
        let menu = data.menu;
        let content = '';

        $.each(menu, function (i, data) {
            if (data.kategori == kategori) {
                content += `<div class="col-md-4 d-flex"><div class="card mt-2 mb-4"  style="width: 100%; min-height: max-content"><img 
                class="card-img-top" src="img/menu/${data.gambar}"> <div 
                class="card-body"><h5 class="card-title"> ${data.nama}</h5><p class="card-text"  style="height: 115px;">${data.deskripsi}</p><h5 
                class="card-title">${data.harga}</h5> <a href="#" class="btn btn-primary">Order Now!</a></div></div></div>`;
            }
        });

        $('#daftarMenu').html(content);
    });
});