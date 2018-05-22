
<html>
<body>
  <h1>Scripture Resources</h1>
  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
    <input type="text" name="search-text">
    <input type="submit">
  </form>
<?php  
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  
$stmt = $db->prepare('SELECT * FROM scriptures');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
if(isset($_POST["search-text"])) {
  foreach ($rows as $row){
      if ($_POST['search-text'] == $row['book']) {
        echo '<p><strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong> - ' . '"' . $row['content'] . '"</p>';
      }
  }
}
else {
  foreach ($rows as $row) {
    echo '<p><strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong> - ' . '"' . $row['content'] . '"</p>';
  }
}
?>
</body>
</html>