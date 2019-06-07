$(function () {
    var fx ={
        initModal:function() {
            if ($('.modal-window').length==0){
                $('<div>').attr('id','jQuery-overlay').appendTo('body');
                return $('<div>').addClass('modal-window').appendTo('body');
            } else{
                return $('.modal-window');
            }
        }
    }
    $('.m_click').click(function(e){
        e.preventDefault();
        var data = $(this).attr('data_id')
        var modal=fx.initModal();
        $('<a>').attr('href','#').html('&times;').addClass('modal-close-btn').click(function(e){
            e.preventDefault();
            $('.modal-window').remove();
            $('#jQuery-overlay').remove();
        }).appendTo(modal);
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST'
        })
        $.ajax({
            url:'/ajax/product',
            type:'POST',
            data:'id='+data,
            timeout:3000,
            success:function(data){
                modal.append(data);
            },
            error:function(msg){
                console.log(msg);
            }
        })
    })



})

