<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="">
	<title>Pagina de envio</title>
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

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

    <div class="title-about2" id="title-about2">
                                <h1>MENSAGENS E EMAILS: </h1>
                            </div>
        

							

    <div class="table">
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "test";
        
        
        // CREATE CONNECTION
        $conn = new mysqli($servername,
            $username, $password, $databasename);
        
        // GET CONNECTION ERRORS
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // SQL QUERY
        $query = "SELECT * FROM `pwdados`;";
        
        // FETCHING DATA FROM DATABASE
        $result = $conn->query($query);
        
            if ($result->num_rows > 0)
            {
                // OUTPUT DATA OF EACH ROW
                while($row = $result->fetch_assoc())
                {
                    echo "Mensagens: " .
                        $row["mensagem"]. " Email: " .
                        $row["email"]. " Assunto:".
                        $row["assunto"]. "<br>";
        
                }
            }
            else {
                echo "0 results";
            }
        
        $conn->close();
        
        ?>
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

