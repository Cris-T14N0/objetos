<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php 

class produtos
{
    public $nome = 'carro';
    public $preco = 1500; #em centimos

    private __construct()
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    private function moeda($preco, $dividendo, $currência)
    {
        $moeda = $preco / $dividendo;
        return $moeda . $currência;
    } 
}
    $p = new produtos();

    echo "Nome do produto $p->nome e o seu preço:<br>";
?>