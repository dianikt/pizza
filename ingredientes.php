<?php	
	$numero = $_POST["numero"];
    $count = 0;
    $c = 0;
    $precio_base = 5;
    $precio_final = 0;

	foreach ($numero as $n){
			//echo $n;
			if($n == 'Masa'){
				$count++;
			}
			if($n == 'Oregano'){
				$count++;
			}
			$c++;			
	    } 
	    //echo $count;
	    if ( $count == 2 ){
	    	$precio_final = $precio_base + ($c*0.5);
	    	echo "El precio final es: $precio_final";
	        
	    }else{
	    	recargarPagina();	    	
	    }

	
	function recargarPagina(){
		echo "<script type='text/javascript'>";
	    echo "window.history.back(-1)";
	    echo "</script>";
	}


?>