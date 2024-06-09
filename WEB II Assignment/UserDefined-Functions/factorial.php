<h1>Factorial of a number</h1>
<?php
function factorial($num){
    if ($num == 0) {
        return 1;
    }
    return $num * factorial($num - 1);
}
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $result = factorial($number);
    echo "Factorial of $number is $result";
}
?>
  <form method="GET">
        <input type="number" name="number" placeholder="Enter a number" required>
        <br/><br/>
        <button type="submit">Find Factorial</button>
    </form>