$(function () {
    bsCustomFileInput.init();
});
//CK EDITOR
ClassicEditor
    .create(document.querySelector('#descripcion'), {  
    })
    .catch(error => {
        console.log(error);
    });
ClassicEditor
    .create(document.querySelector('#descripcion_en'), {  
    })
    .catch(error => {
        console.log(error);
    });
    
//BASE64 IMG
$('.img-product').on('change', function(event){
    console.log('img change');
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        var element = $(this).parent('.custom-file').siblings('figure').find('img');
        element.attr('src', event.target.result);
        element.removeClass('d-none');
    }
    reader.readAsDataURL(file);

});