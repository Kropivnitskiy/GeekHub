$(document).ready(myClick);function myClick(){$('#add').click(myAdd);// Remove Item
$("body").on('click','.item .delete',function(){$(this).parents(".item").remove();});// Edit Irem
$("body").on('click','.item .edit',function(){$(this).closest("li").find("span").prop("contenteditable",true).focus();return false;});}function myAdd(){let listItem=$('#addToList').val();$('#todoList').append('<li class="item"><span>'+listItem+"</span><button class='delete'>Delete</button>"+"<button class='edit'>Edit</button>"+"</li>");}
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJteUNsaWNrIiwiY2xpY2siLCJteUFkZCIsIm9uIiwicGFyZW50cyIsInJlbW92ZSIsImNsb3Nlc3QiLCJmaW5kIiwicHJvcCIsImZvY3VzIiwibGlzdEl0ZW0iLCJ2YWwiLCJhcHBlbmQiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCQyxPQUFsQixFQUVBLFFBQVNBLENBQUFBLE9BQVQsRUFBa0IsQ0FDaEJILENBQUMsQ0FBQyxNQUFELENBQUQsQ0FBVUksS0FBVixDQUFnQkMsS0FBaEIsRUFDQTtBQUNBTCxDQUFDLENBQUMsTUFBRCxDQUFELENBQVVNLEVBQVYsQ0FBYSxPQUFiLENBQXFCLGVBQXJCLENBQXNDLFVBQVksQ0FDaEROLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUU8sT0FBUixDQUFnQixPQUFoQixFQUF5QkMsTUFBekIsR0FDRCxDQUZELEVBR0E7QUFDQVIsQ0FBQyxDQUFDLE1BQUQsQ0FBRCxDQUFVTSxFQUFWLENBQWEsT0FBYixDQUFxQixhQUFyQixDQUFvQyxVQUFZLENBQzlDTixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFTLE9BQVIsQ0FBZ0IsSUFBaEIsRUFBc0JDLElBQXRCLENBQTJCLE1BQTNCLEVBQW1DQyxJQUFuQyxDQUF3QyxpQkFBeEMsQ0FBMkQsSUFBM0QsRUFBaUVDLEtBQWpFLEdBQ0EsTUFBTyxNQUFQLENBQ0QsQ0FIRCxFQUlELENBRUQsUUFBU1AsQ0FBQUEsS0FBVCxFQUFnQixDQUNkLEdBQUlRLENBQUFBLFFBQVEsQ0FBR2IsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQmMsR0FBaEIsRUFBZixDQUNBZCxDQUFDLENBQUMsV0FBRCxDQUFELENBQWVlLE1BQWYsQ0FBc0IsMEJBQTRCRixRQUE1QixDQUNsQiwrQ0FEa0IsQ0FFbEIsb0NBRmtCLENBR2xCLE9BSEosRUFJRCIsImZpbGUiOiJtYWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkobXlDbGljayk7XHJcblxyXG5mdW5jdGlvbiBteUNsaWNrKCl7XHJcbiAgJCgnI2FkZCcpLmNsaWNrKG15QWRkKTtcclxuICAvLyBSZW1vdmUgSXRlbVxyXG4gICQoXCJib2R5XCIpLm9uKCdjbGljaycsJy5pdGVtIC5kZWxldGUnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAkKHRoaXMpLnBhcmVudHMoXCIuaXRlbVwiKS5yZW1vdmUoKTtcclxuICB9KTtcclxuICAvLyBFZGl0IElyZW1cclxuICAkKFwiYm9keVwiKS5vbignY2xpY2snLCcuaXRlbSAuZWRpdCcsIGZ1bmN0aW9uICgpIHtcclxuICAgICQodGhpcykuY2xvc2VzdChcImxpXCIpLmZpbmQoXCJzcGFuXCIpLnByb3AoXCJjb250ZW50ZWRpdGFibGVcIiwgdHJ1ZSkuZm9jdXMoKTtcclxuICAgIHJldHVybiBmYWxzZTtcclxuICB9KTtcclxufVxyXG5cclxuZnVuY3Rpb24gbXlBZGQoKXtcclxuICBsZXQgbGlzdEl0ZW0gPSAkKCcjYWRkVG9MaXN0JykudmFsKCk7XHJcbiAgJCgnI3RvZG9MaXN0JykuYXBwZW5kKCc8bGkgY2xhc3M9XCJpdGVtXCI+PHNwYW4+JyArIGxpc3RJdGVtXHJcbiAgICArIFwiPC9zcGFuPjxidXR0b24gY2xhc3M9J2RlbGV0ZSc+RGVsZXRlPC9idXR0b24+XCJcclxuICAgICsgXCI8YnV0dG9uIGNsYXNzPSdlZGl0Jz5FZGl0PC9idXR0b24+XCJcclxuICAgICsgXCI8L2xpPlwiKTtcclxufVxyXG4iXX0=