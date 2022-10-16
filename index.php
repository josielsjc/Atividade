<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Menu de atividades</title>
</head>
<body>

<div class="container col-lg-8"> <!-- Inicio Conteiner  -->

<div class="row"><!-- Inicio Row  -->
        <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Anagrama</h1>
                
                </div>
            <!-- Inicio Anagrama -->
            <form class="user" action='anagrama.php' method='POST' require >
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" aria-describedby="emailHelp"
                            name='frm_anagrama' placeholder="Digite uma palavra bonita como BIRO" required > 
                
                    
                    <button type="submit" value="Entrar"  class="col-lg-12 btn btn-primary btn-user btn-block">Anagramatizar!</button>
                    
                        <hr>
                
            </form><!-- Fim Anagrama -->

                
                <div class="row">
                    <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Profissões sem POO</h1>
                
                </div>
            <!-- Inicio Modulo Sem POO  -->
            <form class="user" action='modulo.php' method='POST' required>
                            <div class="form-group">
                                
                            <select class="col-lg-4   form-select " aria-label="Default select example" name="frm_tipo">
                        
                                <option selected value="dancer">dancer</option>
                                <option value="developer">developer</option>
                                <option value="player">player</option>
                                </select>
                                <select class="col-lg-4  form-select" aria-label="Default select example" name="frm_periodo">
                        
                                <option selected value="day">day</option>
                                <option value="night">night</option>

                            </select>
                        
                            
                        <button type="submit" value="Entrar"  class="btn btn-primary btn-user btn-block botao">Escolher</button>
                        
                            <hr>
                
            </form><!-- Fim Modulo Sem POO  -->

            <div class="row">  
            
                <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Profissões com POO</h1>
                        
                        </div>

            <!-- Inicio  Modulo POO -->
            <form class="user" action='Modulo-Poo.php' method='POST' required>
                            <div class="form-group">
                    
                    
                    <select class="col-lg-4 form-select " aria-label="Default select example" name="frm_tipo">
                    
                        <option selected value="dancer">dancer</option>
                        <option value="developer">developer</option>
                        <option value="player">player</option>
                        </select>
                        <select class="col-lg-4 form-select" aria-label="Default select example" name="frm_periodo">
                    
                        <option selected value="day">day</option>
                        <option value="night">night</option>

                    </select>
                
                    
                     <button type="submit" value="Entrar"  class="col-12 btn btn-primary btn-user btn-block botao">Escolher</button>
                
                    <hr>
                
            </form>  <!-- Fim Modulo POO -->

</div> 
</div>  <!-- Fim Conteiner  -->
</body>
</html>

