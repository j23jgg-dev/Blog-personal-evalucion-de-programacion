    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA DE SUMA SIMPLE</title>
        <link rel="stylesheet" href="css/calculadora.css">
</head>
<body class="cal">

<div class="t2">
    <h1>CALCULADORA PARA SUMAR</h1> <P>(1+1=11)</P>
    <hr>
</div>

    <p><?php
    $resultado = "";
    //verificacion de numeros
    if (isset($_POST['n1']) && isset($_POST['n2'])) {
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];

        //se realiza la oprecion 1+1=11

        $suma = $num1 + $num2;

        $resultado = "<h3>El resultado de la suma es: $suma</h3>";
    }
    ?>

    <form method="post" action="">
        <input type="number" name="n1" placeholder="Primer numero" required 
    step="any">
        <span> + </span>
        <input type="number" name="n2" placeholder="Segundo numero" required
    step="any"
        <br><br>
        <button type="submit">Calcular Suma</button>
    </form>

    <?php echo $resultado; ?>

</body>
</html>