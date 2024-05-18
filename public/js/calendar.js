$(function(){
    $('.calendar-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        var reserve_day = $(this).attr('reserve_day');//calenderviewphpの値を受け取る（属性で）
        var reserve_part = $(this).attr('reserve_part');
        // console.log(reserve_day);
        // console.log(reserve_part);
        $('.modal-inner-reserve-day input').val(reserve_day);//modal-inner-reserve-dayクラスのinputに変数を送る
        $('.modal-inner-reserve-part input').val(reserve_part);
      });

      $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
      });

});
