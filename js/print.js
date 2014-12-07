$(document).ready(function(){
$('#print').click(function(){ 
window.print();	
});
function disp_confirm()
{
var r=confirm("Do you really want to cancel your order?")
if (r==true)
  {
window.open("http://edison.seattlecentral.edu/~dthanp02/web202-protosite/index.php");
  }
else
  {
 
  }
}
$('#cancel').click(function(){
disp_confirm();	
});	
});