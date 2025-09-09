<?php
//programa para incluir mensaje de bienvenida
//Creado por Hector Juliasn Armendariz Talamantes
//Fecha: 09/seo/2025
// appweb1.php
class texto
{
    public $texto1="Bienvenidos a programacion de app web";
    public function imprimirtexto()
    {
        echo $this ->texto1;
        print $this ->texto1;
    }
}
$obj1=new texto;
$obj1->imprimirtexto();
?>