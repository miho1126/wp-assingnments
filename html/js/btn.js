$(function () {
  $('.menuBtn').on('click', function () {
    let text;

    if (!$(this).hasClass('on')) {
      text = 'close';

      $('#menu').slideDown();
    } else {
      text = 'menu';
      $('#menu').slideUp();
    }
    $(this).toggleClass('on').text(text);
  });
});

// topへ戻る
$('#top').on('click', function () {

  $('body,html').animate({ scrollTop: 0 }, 500);
});

});
