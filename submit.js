
function logSubmit(event) {
  log.textContent = `Datos Procesados: ${event.timeStamp}`;
  var parametros = $(this).serialize();
  
	 $.ajax({
	type: "POST"
	,url: "action_page.php"
	,data: parametros
	,success: function(datos)
	{
		var dat = jQuery.parseJSON( datos );

		if(dat.success == true)
			location.reload();
		else
		{
			$('#fromLogin').trigger("reset");
		}
	}
	});
  
  event.preventDefault();
}

const form = document.getElementById('form');
const log = document.getElementById('log');
form.addEventListener('submit', logSubmit);
