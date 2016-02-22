function triggerTodo(){

$('input').on('Checked', function(event) {
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
$(".todo-list").todolist({
    onCheck: function(ele) {
        console.log("The element has been checked")
    },
    onUncheck: function(ele) {
        //console.log("The element has been unchecked")
    }
});

}

triggerTodo();
setInterval(triggerTodo(), 1000);
