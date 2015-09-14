	<head>
		<meta charset="utf-8">
		<title>RICARDO CALDEIRA 14214290044</title>
	    
	    <link type="text/css" rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/workspace/Estudos/js/bootstrap/css/bootstrap.min.css" />
	    
	    <script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/workspace/Estudos/js/jquery-2.1.4.js"></script>
	    <script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/workspace/Estudos/js/jquery.maskedinput.min.js"></script>
	    <script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT'];?>/workspace/Estudos/js/bootstrap/js/bootstrap.min.js"></script>
	    
	    
	    <script type="text/javascript">
	    	
	    	$(function(){
	    		$('.data').mask('99/99/9999');
	    		$('#cpf').mask('999.999.999-99');
	    		$('#cep').mask('99.999-999');
	    		$('#cnpj').mask('99.999.999/9999-99');
	    		$('#telefone').mask('(99) 9999-9999');
	    		$('.dinheiro').mask('R$ ?999.999,99');
	    		
	    	});
	    
	    </script>
    </head>