<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		    <!-- Formulário da calculadora -->
		    <form method="post" action="teste.php">
		        <input name="numero1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operacao">
		        	<option value="mais">Mais</option>
		            <option value="menos">Menos</option>
		            <option value="vezes">Vezes</option>
		            <option value="dividido por">Dividido Por</option>
		        </select>
		        <input name="numero2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calcular" class="btn btn-primary" />
		    </form>
            
            <?php
			
            // Se o botão "Calcular" é pressionado
            if(isset($_POST['submit']))
            {
                // Checar valores dos números
                if(is_numeric($_POST['numero1']) && is_numeric($_POST['numero2']))
                {
                    // Calcula o total
                    if($_POST['operacao'] == 'mais')
                    {
                        $total = $_POST['numero1'] + $_POST['numero2'];	
                    }
                    if($_POST['operacao'] == 'menos')
                    {
                        $total = $_POST['numero1'] - $_POST['numero2'];	
                    }
                    if($_POST['operacao'] == 'vezes')
                    {
                        $total = $_POST['numero1'] * $_POST['numero2'];	
                    }
                    if($_POST['operacao'] == 'dividido por')
                    {
                        $total = $_POST['numero1'] / $_POST['numero2'];	
                    }
                    
                    // Printa o total no navegador
                    echo "<h1>{$_POST['numero1']} {$_POST['operacao']} {$_POST['numero2']} é igual a {$total}</h1>";
                
                } else {
                    
                    // Printa erro na tela
                    echo 'São necessários valores numéricos.';
                
                }
            }
        
        ?>
		</div>
	
	</body>
</html>
