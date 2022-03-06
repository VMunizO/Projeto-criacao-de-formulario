<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulário de Contato</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="formulario.js"></script>
        	<link rel="stylesheet"  href="style.css">
        	
	</head>

	<body>
		<div class="mx-auto bg-light mt-1 w-90">
         		<header class="row">
<!-- oculte a barra de acessibilidade (V) -->
			        <div id="barra_acessibilidade" class="col-10 d-none">
			               <ul id="atalhos">
				             <li><a href="#menu" accesskey="1">Ir para menu</a></li>
				 	     <li><a href="#formulario" accesskey="2">Ir para formulário</a></li>
				       </ul>  
			        </div>  
<!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/(V) -->
		      <div class="container"> 
		       <div class="row">
			        <div class="col-sm-3">   
			            <img src="logo.jpeg" alt="Logotipo da empresa com dois triângulos sobrepostos." width="95">
			        </div>
			          <div class="col-sm-9 align-self-center">
			              <h1>Empresa XPTO</h1>
			          </div>
			       </div>
			       </div>
		      </header>
	      </div>
	      <section class="row inv">
	        <div class="col-12">
<!-- oculte o header abaixo consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
	          <h2>Menu</h2>
	        </div>
	     </section>
        		<nav id =menu class="navbar navbar-expand-sm navbar-light bg-light">
        		<div class="container">
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			 <span class="navbar-toggler-icon"></span>
			 </button>
			 <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
		         <div class="col-sm-12">
			            <ul class="navbar-nav mr-auto justify-content-center">
					  <li class="nav-item">
					  	<a class="nav-link active" href="#">Home</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link active" href="#">Contato</a>
					  </li>
					</ul>
			</div>
			</div>
    			</div>
    			</nav>
	   	<div class="containerII">
	    	<article id="formulario"  class="col-10">  
	            <h2>Formulário de Contato</h2>
<!--torne o formulário responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/forms/(V)--> 
        	</article>
        </div>

        <form class="needs-validation" novalidate>
             <div id=contato class="container">
	             <div class="form-group row">
	                  <label for="nome" class="col-sm-2 col-form-label">Nome *</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome" required>
		                            <div class="invalid-feedback">
					     	Campo nome obrigatório
					    </div>
	             		</div>
	             </div>
	             <div class="form-group row">
	                  <label for="staticEmail" class="col-sm-2 col-form-label">Email *</label>
	                        <div class="col-sm-10">
	                              <input type="text" class="form-control" id="staticEmail" placeholder="Digite seu Email"  required>
	                         <div class="invalid-feedback">
				     Campo e-mail obrigatório
				 </div>
	                        </div>   
	             </div>
	             <div class="form-group row">
	                  <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem *</label>
	                        <div class="col-sm-10">
	                              <textarea class="form-control form-control-sm" id="mensagem" required></textarea>
		                              <div class="invalid-feedback">
					     	  Campo mensagem obrigatório
					      </div>
			               <button type="submit" class="btn btn-primary my-1">Enviar</button>
			        </div>
	             </div> 
	     </div>
        </form>	
        	<div class="col-10 containerIV">  
	            <p><a class="text-muted">Campos obrigatórios *</a></p>
        	</div>
        	

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>