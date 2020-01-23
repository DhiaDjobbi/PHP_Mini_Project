<!DOCTYPE html>

<html>

    <head>

        <title>Nouvelle operation </title>

        <meta charset="UTF-8">

    </head>



  

    <body>
        <h1>Nouvelle operation :</h1><br>
        <form action="ajoutOpt_action.php" method="post">

<table>
<tr>
<td> Numero du compte :</td>
<td>   <input type="text" name="t1" required placeholder="   Numero ?"></td>
</tr>
<tr>
<td>Date :</td>
<td>   <input type="date" name="t2" required></td>
</tr>
<tr>
<td> Montant :</td>
<td>    <input type="text" name="t3" required placeholder="100"></td>
</tr>
<tr>
<td> Operation :</td>
<td>  <input required type="radio" name="Ope" value="V" >Versement  <input type="radio" name="Ope" value="R" >Retrait </td>
</tr>
          
</table><br>


            <input type="submit" name="Valider" value="Valider">


        </form>

    </body>

</html>
