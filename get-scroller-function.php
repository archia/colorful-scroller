<?php

function get_scroller($scroll_msg, $colors)
{
  $scroll_msg .= ' ';

  $rand = rand(0,2);
  ?>
  
	<script type="text/javascript">	  

	function scroller(position) 
	{ 
    const msg = "<?=$scroll_msg?>";
	  let out = "";
	  let sc = document.getElementById("scroll_txt");
		
	  for (let i=0; i < position; i++)
	  {       
		  out += '<span style="color:<?=$colors[$rand]?>">' + msg.charAt(i) + '</span>';
	  } 
	  
	  out += '<span style="color:#fff">' + msg.charAt(position) + '</span>'; 

    sc.innerHTML = out; 
	  position++;	  
	  if (position != msg.length) 
	  { 
		window.setTimeout(function() { scroller(position); }, 50); 
	  }   	  
	  else 
	  {
		window.setTimeout(function() { scroller(0); }, 200000); 
	  }    
	}

	scroller(0);

  let scb = document.getElementById("scroll_txt_outer").innerHTML; 
  let res = scb.replace("&nbsp;", "<span style='color:<?=$colors[0]?>'>The</span> <span style='color:<?=$colors[1]?>'>Signature</span> <span style='color:<?=$colors[2]?>'>Project</span>");
  
  document.getElementById("scroll_txt_outer").innerHTML = res;
  document.getElementById("scroll_txt_outer").style.display = 'inline';
 
	  
	</script>
  <?php   
}

?>
