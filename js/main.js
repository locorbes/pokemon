$(document).ready(function(){
	console.log("Pokemon Finder v1.0.0");
	search();
	$('.materialboxed').materialbox();
	//SPINNER
	var spinner = "<div style='margin-top:120px !important;' class='col s12 m12'><div class='center'><img src='img/spinner.gif' height='120px'></div></div>";
	
	$(document).on("input", "#search_input", function(e){ 
        e.preventDefault();
        val = $(this).val();
		if(val.length >= 4){
			$b = false;
			$("#msg").addClass("hide");
			$(".pokemon").addClass("hide");
			$(".pokemon").each(function(){
				if ($(this).data("name").includes(val.toUpperCase())) {
					$(this).removeClass("hide");
					$b = true;
				}
			});
			if(!$b){
				$("#msg").removeClass("hide");
			}			
		}else{
			$("#msg").addClass("hide");
			$(".pokemon").removeClass("hide");
		}
    })
	
	//FUNCTIONS
	function search(){
		$("#result").html(spinner);
		$.ajax({     
			method: "GET",
			url: "scripts/search.php",
			dataType:"html", 
			success: function(data){
				$("#result").html(data);
			}
		});
	}
});