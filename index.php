    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>SISTEMA DE SUMA SIMPLE</title>
        <link rel="stylesheet" href="css/calculadora.css">
        <link rel="stylesheet" href="css/estilo.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Changa+One:ital@0;1&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap');



            .t2 {
                font-family: "Source Sans", sans-serif;
                text-align: center;
                color: blue;
            }

            .cal {
                text-align: center;
                font-family: Arial, sans-serif;
                display: contents;
                margin-top: 500px;
            }

            .hr {
                margin-top: 20px;
                color: brown;
                border-radius: 70%;
            }

            .btn {
                background-color: blue;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 50px;
            }

            .nmrs {
                margin-top: 50px;
            }

            .linea {
                border: 2px solid blue;
                width: 50%;
                margin: 0 auto;
            }

        </style>
</head>
<body class="cal">

<div class="t2">
    <h1>CALCULADORA PARA SUMAR</h1> <P>(1+1=11)</P>
    <hr class="linea">
</div>

    <p class="cal"><?php
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

    <form method="post" action="" class="nmrs">
        <input type="number" name="n1" placeholder="Primer numero" required 
    step="any">
        <span> +/- </span>
        <input type="number" name="n2" placeholder="Segundo numero" required
    step="any"
        <br><br>
        <button type="submit" class="btn">Calcular Suma</button>
    </form>

    <?php echo $resultado; ?>

</body>
</html>