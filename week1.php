<!DOCTYPE html>
<html>
  <head>
    <title>Gebruikersgegevens</title>
  </head>
  <body>
    <form method="get" action="">
      <label for="naam">Naam:</label>
      <input type="text" id="naam" name="naam" required><br>

      <label for="achternaam">Achternaam:</label>
      <input type="text" id="achternaam" name="achternaam" required><br>

      <label for="leeftijd">Leeftijd:</label>
      <input type="number" id="leeftijd" name="leeftijd" required><br>

      <label for="adres">Adres:</label>
      <input type="text" id="adres" name="adres" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <input type="submit" value="Verzenden">
    </form>

    <?php
      if (isset($_GET['naam']) && isset($_GET['achternaam']) && isset($_GET['leeftijd']) && isset($_GET['adres']) && isset($_GET['email'])) {
        $naam = $_GET['naam'];
        $achternaam = $_GET['achternaam'];
        $leeftijd = $_GET['leeftijd'];
        $adres = $_GET['adres'];
        $email = $_GET['email'];

        echo "<p>Gebruikersgegevens:</p>";
        echo "<ul>";
        echo "<li>Naam: " . $naam . "</li>";
        echo "<li>Achternaam: " . $achternaam . "</li>";
        echo "<li>Leeftijd: " . $leeftijd . "</li>";
        echo "<li>Adres: " . $adres . "</li>";
        echo "<li>Email: " . $email . "</li>";
        echo "</ul>";
      }
    ?>
  </body>
</html>


  <head>
    <title>Gebruikersgegevens</title>
  </head>
  <body>
    <form method="post" action="">
      <label for="naam">Naam:</label>
      <input type="text" id="naam" name="naam" required><br>

      <label for="achternaam">Achternaam:</label>
      <input type="text" id="achternaam" name="achternaam" required><br>

      <label for="leeftijd">Leeftijd:</label>
      <input type="number" id="leeftijd" name="leeftijd" required><br>

      <label for="adres">Adres:</label>
      <input type="text" id="adres" name="adres" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <input type="submit" value="Verzenden">
    </form>

    <?php
