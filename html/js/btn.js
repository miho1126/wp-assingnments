$(function () {
  $('.menu1-container__menuBtn').on('click', function () {
    let text;

    if (!$(this).hasClass('on')) {
      text = 'close';

      $('#menuli').slideDown();
    } else {
      text = 'menu';
      $('#menuli').slideUp();
    }
    $(this).toggleClass('on').text(text);
  });
  // });

  // topへ戻る
  $('#top').on('click', function () {

    $('body,html').animate({ scrollTop: 0 }, 500);
  });
});
