$('input').on('ifChecked', function(event) {
  // var element = $(this).parent().find('input:checkbox:first');
  // element.parent().parent().parent().addClass('highlight');
  $(this).parents('li').addClass("task-done");
  console.log('ok');
});
$('input').on('ifUnchecked', function(event) {
  // var element = $(this).parent().find('input:checkbox:first');
  // element.parent().parent().parent().removeClass('highlight');
  $(this).parents('li').removeClass("task-done");
  console.log('not');
});

$('#noti-box').slimScroll({
  height: '400px',
  size: '5px',
  BorderRadius: '5px'
});

$('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
  checkboxClass: 'icheckbox_flat-grey',
  radioClass: 'iradio_flat-grey'
});
