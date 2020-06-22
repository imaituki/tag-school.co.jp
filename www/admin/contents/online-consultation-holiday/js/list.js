// カレンダー切り替え
$(function(){
	$(document).on( 'click', '.pointer', function(){
		$.ajax({
			type: "POST",
			url:  "./update.php",
			data: {date : $(this).closest('div').find('.ym').val() + ("0"+$.trim($(this).html())).slice(-2), id : $(this).attr('id')},
			success: function(e){
				alert("営業日を更新しました");
				$("#searchList").html(e);
				$("#searchList").css('display','block');
				$('.calendar').matchHeight({ byRow:false });
			}
		});

	});
});
