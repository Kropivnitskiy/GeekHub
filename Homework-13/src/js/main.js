$(document).ready(myClick);

function myClick(){
  $('#add').click(myAdd);
  // Remove Item
  $("body").on('click','.item .delete', function () {
    $(this).parents(".item").remove();
  });
  // Edit Irem
  $("body").on('click','.item .edit', function () {
    $(this).closest("li").find("span").prop("contenteditable", true).focus();
    return false;
  });
}

function myAdd(){
  let listItem = $('#addToList').val();
  $('#todoList').append('<li class="item"><span>' + listItem
    + "</span><button class='delete'>Delete</button>"
    + "<button class='edit'>Edit</button>"
    + "</li>");
}
