$(document).ready(function(){
    // Cпойлер 1
    $('td.spoiler_title').click(function(){

        var spoiler = $('.spoiler_block');
        if(spoiler.is(':visible')){
            spoiler.slideUp(300);
        }else{
            spoiler.slideDown(300);
        }
    });
// Cпойлер 2
    $('td.spoiler_title2').click(function(){

        var spoiler2 = $('.spoiler_block2');
        if(spoiler2.is(':visible')){
            spoiler2.slideUp(300);
        }else{
            spoiler2.slideDown(300);
        }
    });
// Cпойлер 3
    $('td.spoiler_title3').click(function(){

        var spoiler3 = $('.spoiler_block3');
        if(spoiler3.is(':visible')){
            spoiler3.slideUp(300);
        }else{
            spoiler3.slideDown(300);
        }
    });

// Меню
    $("#wb_ResponsiveMenu2 ul li a").click(function(event)
    {
        $("#wb_ResponsiveMenu2 input").prop("checked", false);
    });
//  Слайды
    $("#SlideShow1").slideshow(
        {
            interval: 3000,
            type: 'sequence',
            effect: 'none',
            direction: '',
            pagination: false,
            fullscreen: 4,
            maxWidth: 1920,
            effectlength: 2000
        });
});

// Cравнение

// function toggle() {
//     var div = document.getElementById('wb_Text_sravnenie');
//     if(this.checked)
//         div.style.display = 'block';
//     else
//         div.style.display = 'none'
// }
// document.getElementById('Checkbox1').onchange = toggle;
$('input.ShowOrHide').click(function() {

    var id = $(this).data('id');

    $.ajax({
        url: '/compare/add',
        data: {id: id},
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка!');
            // showCompare(res);
        },
        error: function(){
            alert('Error!');
        }
    });




    var check = document.getElementsByName('check1');

    for (var i =0; i < check.length; i++){
        if(check[i].checked) {

            alert('Выбран ' + i + ' Чекбокс');
            var d = document.getElementById('div' + i);
            d.style.display = 'block';


        }
        else{
            var d = document.getElementById('div' + i);
            d.style.display = 'none';
        }
    }
});



function showCompare(){
    $('#compare .modal-body').html('<img  src="/images/i53003.png" alt="корзина" width="40px" >ТОВАР ДОБАВЛЕН В КОРЗИНУ, ВЫ МОЖЕТЕ ПРОДОЛЖИТЬ ПОКУПКИ ИЛИ ПЕРЕЙТИ В КОРЗИНУ');
    $('#compare').modal();
}

