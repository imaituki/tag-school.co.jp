// カレンダー切り替え
$(function(){
	$(document).on( 'click', '.pointer', function(){
		$.ajax({
			type: "POST",
			url:  "./update.php",
			data: {
				send : $(this).attr('id'),
				display_date : $("#display_date").attr('value')
			},
			success: function(e){
				alert("営業日を更新しました");
				$("#searchList").html(e);
				$("#searchList").css('display','block');
				$('.calendar').matchHeight({ byRow:false });
			}
		});

	});
});
