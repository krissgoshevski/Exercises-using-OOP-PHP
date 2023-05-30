<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The subsequences</title>
</head>
<body>
    <center>
    <form method="POST" action="subsequences.php">
    <h2>Subsequences</h2>
    <label for="a">A: </label>
    <input type="text" name="a" id="a" placeholder="insert number for input A..."/> <br> <br>

    <label for="a">B: </label>
    <input type="text" name="b" id="b" placeholder="insert number for input B..."/> <br> <br>

    <label for="a">C: </label>
    <input type="text" name="c" id="c" placeholder="insert number for input C..."/> <br> <br> <br>

    <button type="submit" name="submit">Submit</button>
    </form>
    </center>
</body>
</html>

<?php
require_once __DIR__ . "/TheSubsequences.php";
use ClassSubsequences\TheSubsequences;
use MyExceptions\Required;
use MyExceptions\ValidateDataInputs;
use MyExceptions\ValidateInputA;
use MyExceptions\ValidateInputs;

if(isset($_POST['submit'])) {
    $subseq = new TheSubsequences();


    $a = isset($_POST['a']) ? ($_POST['a']) : 0;  
    $b = isset($_POST['b']) ? ($_POST['b']) : 0;
    $c = isset($_POST['c']) ? ($_POST['c']) : 0;

    try {
        $subseq->checkRequestMethod();
        $subseq->required($a,$b,$c);
        $subseq->validateDataInputs($a, $b, $c);
        $subseq->validateInputs($a, $b, $c);  
        $subseq->validateA($a,$b);
    } catch(Exception $ex) {
        echo $ex->getMessage(); die();
    }
      catch(Required $ex) {
        echo $ex->getMessage(); die();
    } catch (ValidateDataInputs $ex) {
        echo $ex->getMessage(); die(); 
    } 
    catch (ValidateInputs $ex) {
        echo $ex->getMessage(); die();
    } catch (ValidateInputA $ex) {
        echo $ex->getMessage(); die();
    }

    echo "Test Case: count({$a}, {$b}, {$c}) = " . $subseq->count($a,$b,$c);
      
}
?>