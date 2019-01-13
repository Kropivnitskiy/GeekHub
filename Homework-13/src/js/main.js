$(document).ready(myClick);

function myClick(){
  $('#add').click(myAdd);
  $(document).on('click','#item',myRemove);
}

function myAdd(){
  let listItem = $('#addToList').val();
  $('#todoList').append('<li id="item">' + listItem
    + "<button id='delete'>Delete</button>"
    + "</li>");
}

function myRemove(){
  $(this).remove();
}