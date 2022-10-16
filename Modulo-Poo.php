
<?php 

$profissao= $_POST['frm_tipo'];    

$periodo= $_POST['frm_periodo'];   



class dancer
{
  public $var_profissao;
  public $var_periodo;

  public function dancer()
  {
        return "Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer!";
  }

  public function day()
  {
        return "É dia: Estou dançando!";
  }
  
  public function night()
  {
 
        return "É noite: Não me amole... estou dormindo!";
  }


}

class developer
{
 
  public function developer()
  {
        return "Sou um candango que programa e não tenho vida...";
  }

  public function day()
  {
        return "É dia: Estou programando agora!";
  }
  
  public function night()
  {
 
        return "É noite: Eu nunca paro de programar!";
  }


}

class player
{
 
  public function player()
  {
        return "Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! ";
  }

  public function day()
  {
        return "É dia: Infelizmente tenho que trabalhar agora!";
  }
  
  public function night()
  {
 
        return "É noite: Estou jogando agora!";
  }


}



$d= new $profissao();

echo $d->$profissao();
echo $d->$periodo();

?>