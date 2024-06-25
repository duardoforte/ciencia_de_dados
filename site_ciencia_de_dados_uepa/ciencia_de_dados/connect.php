<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="">
	<title>Pagina de envio</title>
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => test
		$conn = mysqli_connect("localhost", "root", "", "test");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$email = $_REQUEST['email'];
		$select_option = $_POST['assunto'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO pwdados VALUES ('$first_name', '$email', '$select_option')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>sucesso!!</h3>"; 

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		
	</center>

	<header id="header">
        <div class="interface">
            <div class="container">
    
                <div class="flexheader">
                    <a target="_blank" href="https://www.pa.gov.br/"><img id="logo-gov" src="img/channels4_profile-removebg-preview.png" alt="logo-uepa"></a>
                    <a target="_blank" href="https://www.uepa.br/"><img id="logo-uepa" src="img/uepa.png" alt="logo-uepa"></a>
    
                    <nav>
                        <ul>
    
                            <li><a href="#sobre-mim">ESTRUTURA DO CURSO</a></li>
                            <li><a href="#avaliacoes-uepa">AVALIAÇÕES</a></li>
                            <li><a href="#corpo-docente">CORPO DOCENTE</a></li>
                            <li><a href="#campus">CAMPUS</a></li>
                            <li><a href="#nucleo-docente">NÚCLEO DOCENTE</a></li>
                            <li><a href="#colegiado">COLEGIADO</a></li>
                        </ul>
                    </nav>
    
    
    
    
                </div><!--flex-->
    
            </div><!--final div container-->
        </div>
    </header>

	<div class="title-about" id="title-about">
                                <h1>MENSAGEM ENVIADA</h1>
                            </div>
							<div class="centralize">
								<div class="title-about" id="title-about">
																<h2>Agradecemos pelo seu contato com a Universidade do Estado do Pará (UEPA). <br> Sua mensagem é muito importante para nós, <br> e será encaminhada ao departamento responsável para que possamos atendê-lo(a) da melhor maneira possível.</h2>
															</div>
							</div>

							<footer>
       
        
	   <div class="interface">
			   <div class="line-footer">
				   <div class="flex">
				   <div class="logo-footer">
					   <img id="logo-uepa" src="img/uepa.png" alt="">
				   </div>
				   <div class="btn-social">
   
						   <a href="https://www.instagram.com/uepaoficial"><button><i class="bi bi-instagram"></i></button></a>
						   <a href="https://www.facebook.com/UepaOficial"><button><i class="bi bi-facebook"></i></button></a>
						   <a href="https://x.com/uepaoficial"><button><i class="bi bi-twitter-x"></i></button></a>
   
				   </div>
			   </div>
			   </div>
		   <div class="line-footer borda" id="gmail-footer">
			   <p><i class="bi bi-envelope"></i> <a href="mailto:uepa@gmail.com">uepa@gmail.com</a></p>
   
   
		   </div>
		   <div class="direitos" id="direitos">
			   <p> © todos os direitos reservados à Diego Amorim, Cauê Lopes, Eduardo Forte</p>
		   </div>
	   </div>
   
       </footer>
</body>

</html>
