$(document).ready(function() {

	$("#uno").hide();

$("p").hover(

	function(){

          $("#dos").hide();
		 $("#uno").show();

      },

      function(){
       
        $("#uno").hide();
        $("#dos").show();
      }

);
});