<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>

    <?php
    function calculate($num1, $num2, $operation) {
        $res = null; // Initialize the variable to avoid warnings
        switch($operation){
            case "+":
                $res = $num1 + $num2;
                break;
            case "-":
                $res = $num1 - $num2;
                break;
            case "*":
                $res = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $res = $num1 / $num2;
                } else {
                    return "Error: Division by zero is not allowed.";
                }
                break;
            default:
                return "Invalid operation. Please choose +, -, *, or /.";
        }
        return $res;
    }

    $a = 10;
    $b = 20;
    ?>

    <section class="mt-20 flex flex-col gap-4 justify-center items-center ">
        <h1 class="text-blue-500 text-4xl">Calculator</h1>
        <div>Addition (10 + 20): <?php echo calculate($a, $b, '+'); ?></div>
        <div>Subtraction (10 - 20): <?php echo calculate($a, $b, '-'); ?></div>
        <div>Multiplication (10 * 20): <?php echo calculate($a, $b, '*'); ?></div>
        <div>Division (10 / 20): <?php echo calculate($a, $b, '/'); ?></div>
    </section>


</body>
</html>
