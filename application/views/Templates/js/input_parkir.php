<script>
	
	$('.jenis-kendaraan').change(function() {

		const jenis_id = $(this).val();

		$.ajax({
			url: 'http://localhost/e-parking/Ajax/index',
			type: 'post',
			dataType: 'json',
			data: {jenis_id: jenis_id},
			success: function(data) {
				
				if (data == null) {
					$('.tarif').val('0');
				} else {
					$('.tarif').val(data.harga);
				}

			}
		});
		

	});

</script>