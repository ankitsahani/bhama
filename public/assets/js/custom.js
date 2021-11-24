(function($) {
  'use strict';
  $(function() {
	
	if($('.summernote').is(':visible')){
		$('.summernote').summernote({
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				/* ['color', ['color']], */
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture']],
				['view', ['codeview']]
			]
		});
	}
	
    var body = $('body');
    var sidebar = $('.sidebar');

    /* function addActiveClass(element) {
      if (current === "") {
        //for root url
        if (element.attr('href').indexOf("index.html") !== -1) {
          element.parents('.nav-item').last().addClass('active');
          if (element.parents('.sub-menu').length) {
            element.closest('.collapse').addClass('show');
            element.addClass('active');
          }
        }
      } else {
        //for other url
        if (element.attr('href').indexOf(current) !== -1) {
          element.parents('.nav-item').last().addClass('active');
          if (element.parents('.sub-menu').length) {
            element.closest('.collapse').addClass('show');
            element.addClass('active');
          }
          if (element.parents('.submenu-item').length) {
            element.addClass('active');
          }
        }
      }
    }

    var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
    $('.nav li a', sidebar).each(function() {
      var $this = $(this);
      addActiveClass($this);
    })

    $('.horizontal-menu .nav li a').each(function() {
      var $this = $(this);
      addActiveClass($this);
    }) */

    //Close other submenu in sidebar on opening any

    sidebar.on('show.bs.collapse', '.collapse', function() {
      sidebar.find('.collapse.show').collapse('hide');
    });

    $('[data-toggle="minimize"]').on("click", function() {
      if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
        body.toggleClass('sidebar-hidden');
      } else {
        body.toggleClass('sidebar-icon-only');
      }
    });

    //checkbox and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

  });

  if($('.textEditor').length>0){
	$('.textEditor').each(function(e){
		CKEDITOR.replace(this.id);
	});
}
	
	
	//Open submenu on hover in compact sidebar mode and horizontal menu mode
  $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function(ev) {
    var body = $('body');
    var sidebarIconOnly = body.hasClass("sidebar-icon-only");
    var sidebarFixed = body.hasClass("sidebar-fixed");
    if (!('ontouchstart' in document.documentElement)) {
      if (sidebarIconOnly) {
        if (sidebarFixed) {
          if (ev.type === 'mouseenter') {
            body.removeClass('sidebar-icon-only');
          }
        } else {
          var $menuItem = $(this);
          if (ev.type === 'mouseenter') {
            $menuItem.addClass('hover-open')
          } else {
            $menuItem.removeClass('hover-open')
          }
        }
      }
    }
  });
  $('.aside-toggler').click(function(){
    $('.chat-list-wrapper').toggleClass('slide')
  });
	$('[data-toggle="tooltip"]').tooltip();
	
})(jQuery);

/* $(function() {
	$( "#from" ).datepicker({
	dateFormat: "d M yy",
			defaultDate: "w",
			changeMonth: true,
			numberOfMonths: 1,
			onSelect: function( selectedDate ) {
					$( "#to" ).datepicker( "option", "minDate", selectedDate );
			}
	});
	$( "#to" ).datepicker({
	dateFormat: "d M yy",
			defaultDate: "-w",
			changeMonth: true,
			numberOfMonths: 1,
			onSelect: function( selectedDate ) {
					$( "#from" ).datepicker( "option", "maxDate", selectedDate );
			}
	});
}); */
function validationFrom(d1)
{
	var dateTo = new Date($('#to').val());
	var dd = dateTo.getDate(); 	
	//var mm = dateTo.getMonth(); 
	var mm = ("0" + (dateTo.getMonth() + 1)).slice(-2);
	var yy = dateTo.getFullYear();
	
	var todt = (yy*10000)+(mm*100)+leadingZero(dd);
	var d1 =parseInt(d1,10);
	var d2 =parseInt(todt,10);

	if(d1 >= d2)
	{
		var dateFrom = new Date($('#from').val());
		var dd = dateFrom.getDate();
		var mm = dateFrom.getMonth(); 	
		var yy = dateFrom.getFullYear();
		
		
		var newDateFrom = new Date(yy,mm,dd);
		var dd = newDateFrom.getDate();	
		//var mm = newDateFrom.getMonth();	
		var mm = ("0" + (newDateFrom.getMonth() + 1)).slice(-2);	
		var yy = newDateFrom.getFullYear();

		var frmdt = yy+"-"+mm+"-"+leadingZero(dd);
		$('#to').val($.datepicker.formatDate( "d M yy", new Date(frmdt) ));
	}	
}
function dateFromNext()
{
	//alert('datefromNext');
	var dateFrom = new Date($('#from').val());
	//alert();
	var dd = dateFrom.getDate(); 	
	var mm = dateFrom.getMonth(); 	
	var yy = dateFrom.getFullYear();
	
	
	var newDateFrom = new Date(yy,mm,dd+1);
	var dd = newDateFrom.getDate();	

	//var mm = newDateFrom.getMonth();	
	var mm = ("0" + (newDateFrom.getMonth() + 1)).slice(-2);	
	var yy = newDateFrom.getFullYear();
	var frmdt = yy+"-"+mm+"-"+leadingZero(dd);
	$('#from').val($.datepicker.formatDate( "d M yy", new Date(frmdt) ));
	var d1 = (yy*10000)+(mm*100)+leadingZero(dd);
	 validationFrom(d1);
}
function dateFromPrev()
{
	var dateFrom = new Date($('#from').val());

	var dd = dateFrom.getDate(); 
	
	
	var mm = dateFrom.getMonth(); 	
	var yy = dateFrom.getFullYear();
	
	var newDateFrom = new Date(yy,mm,dd-1);
	var dd = newDateFrom.getDate();	
	//var mm = newDateFrom.getMonth();	
	var mm = ("0" + (newDateFrom.getMonth() + 1)).slice(-2);	
	var yy = newDateFrom.getFullYear();
	var frmdt = yy+"-"+mm+"-"+leadingZero(dd);
	$('#from').val($.datepicker.formatDate( "d M yy", new Date(frmdt) ));
}
function validationTo(d1)
{
	var dateFrom = new Date($('#from').val());
	var dd = dateFrom.getDate(); 	
	var mm = dateFrom.getMonth(); 	
	var yy = dateFrom.getFullYear();
		
	var frmdt = (yy*10000)+(mm*100)+leadingZero(dd);
	var d1 =parseInt(d1,10);
	var d2 =parseInt(frmdt,10);
	//alert(d1+' '+d2);
	if(d1 <= d2)
	{
		var dateTo = new Date($('#to').val());
		var dd = dateTo.getDate(); 	
		var mm = dateTo.getMonth(); 	
		var yy = dateTo.getFullYear();
	
		var newDateTo = new Date(yy,mm,dd);
		var dd = newDateTo.getDate();	
		//var mm = newDateTo.getMonth();	
		var mm = ("0" + (newDateTo.getMonth() + 1)).slice(-2);	
		var yy = newDateTo.getFullYear();
		var todt = yy+"-"+mm+"-"+leadingZero(dd);
		$('#from').val($.datepicker.formatDate( "d M yy", new Date(todt) ));
	}	
}
function dateToNext()
{
	var dateTo = new Date($('#to').val());
	
	var dd = dateTo.getDate(); 	
	var mm = dateTo.getMonth(); 	
	var yy = dateTo.getFullYear();
	
	var newDateTo = new Date(yy,mm,dd+1);
	var dd = newDateTo.getDate();	
	//var mm = newDateTo.getMonth();	
	var mm = ("0" + (newDateTo.getMonth() + 1)).slice(-2);	
	var yy = newDateTo.getFullYear();
	var todt = yy+"-"+mm+"-"+leadingZero(dd);
	$('#to').val($.datepicker.formatDate( "d M yy", new Date(todt) ));
	
	 
}
function dateToPrev()
{
	var dateTo = new Date($('#to').val());
	
	var dd = dateTo.getDate(); 	
	var mm = dateTo.getMonth(); 	
	var yy = dateTo.getFullYear();
	
	var newDateTo = new Date(yy,mm,dd-1);
	var dd = newDateTo.getDate();	
	//var mm = newDateTo.getMonth();	
	var mm = ("0" + (newDateTo.getMonth() + 1)).slice(-2);	
	var yy = newDateTo.getFullYear();
	var todt = yy+"-"+mm+"-"+leadingZero(dd);
	$('#to').val($.datepicker.formatDate( "d M yy", new Date(todt) ));
	var d1 = (yy*10000)+(mm*100)+leadingZero(dd);
	 validationTo(d1);
} 

function leadingZero(value){
   if(value < 10){
      return "0" + value.toString();
   }
   return value.toString();    
}





 $.validator.addMethod("nowhitespace", function(value, element) {
      	return this.optional(element) || /^S+$/i.test(value);
      }, "No white space please"); 

     $("#change_password").validate({
	rules : {
		password : {
			minlength : 6,
			nowhitespace: true
			
		},
		confirm_password : {
			minlength : 6,
			nowhitespace: true,
			equalTo : '[name="password"]'
		}
	}
});










$(document).ready(function (){
	function handleSelectEvent(){
		$('.dataTables_length,.dataTables_filter').wrapAll('<div class="table-filter clearfix">');
	};
	
	table = $('#dataTable')	.on('draw.dt', function () {
			//handleSelectEvent();
	}).DataTable({
		'columnDefs': [{
			 'targets': 0,
			 'searchable': false,
			 'orderable': false
			 //'className': 'dt-body-center'
		}]
	});
	
	$('#search').keyup(function(){
		table.search($(this).val()).draw() ;
	})

   // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Get all rows with search applied
      var rows = table.rows({ 'search': 'applied' }).nodes();
      // Check/uncheck checkboxes for all rows in the table
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   $('#example tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
         var el = $('#example-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control
            // as 'indeterminate'
            el.indeterminate = true;
         }
      }
   });

   // Handle form submission event
   $('#frm-example').on('submit', function(e){
      var form = this;

      // Iterate over all checkboxes in the table
      table.$('input[type="checkbox"]').each(function(){
         // If checkbox doesn't exist in DOM
         if(!$.contains(document, this)){
            // If checkbox is checked
            if(this.checked){
               // Create a hidden element
               $(form).append(
                  $('<input>')
                     .attr('type', 'hidden')
                     //.attr('name', this.name)
                     .val(this.value)
               );
            }
         }
      });
   });

});

$(document).ready(function() {
	$("#dataTable1").DataTable();
});

$('.otpInput input').keypress(function(){
	$(this).next().focus();
}).keyup(function(e){
	if(e.keyCode == 8){
		$(this).prev().focus();
	}
});

$('.navbar-toggler[data-toggle="offcanvas"]').click(function(){
	if(!$('nav#sidebar.sidebar-offcanvas').hasClass('active')){
		$('nav#sidebar.sidebar-offcanvas').addClass('active');
		$('#mask').fadeIn();
	}else {
		$('nav#sidebar.sidebar-offcanvas').removeClass('active');
		$('#mask').fadeOut();
	}
});
$('#mask').click(function(){
	$(this).fadeOut();
});
$(document).mouseup(function(e){
	var sidebar = $('nav#sidebar.sidebar-offcanvas,.navbar-toggler[data-toggle="offcanvas"]');
	if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0) {
		sidebar.removeClass('active');
		$('#mask').fadeOut();
	}
});
$('.showPassword').click(function(){
	$(this).toggleClass('inActive');
	if($(this).hasClass('inActive')){
		$(this).closest('.password-field').find('.form-control').attr('type','text');
	}else {
		$(this).closest('.password-field').find('.form-control').attr('type','password');
	}
});

$('.accordionTable .accordionToggle').click(function(){
	if(!$(this).closest('tr').next('.content').find('.contentTable').is(':visible')){
		$('.accordionTable tr.active').removeClass('active');
		$('.accordionTable tr.content .contentTable').slideUp('fast');
		$(this).closest('tr').next('.content').find('.contentTable').slideDown('fast');
		$(this).closest('tr').addClass('active');
	}else {
		$(this).closest('tr').next('.content').find('.contentTable').slideUp('fast');
		$(this).closest('tr').removeClass('active');
	}
});