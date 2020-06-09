jQuery(document).ready(function($){
	$('#products-table').DataTable();

	$('.delete-me').on('click', function(){
		var url = $(this).attr('href');
		$.confirm({
		    title: 'Confirm!',
		    content: 'Are you want to delete this product!',
		    buttons: {
		        confirm: function () {
		            window.location.href = url;
		        },
		        cancel: function () {
		            return true;
		        },	
		    }
		});
		return false;
	});

})




