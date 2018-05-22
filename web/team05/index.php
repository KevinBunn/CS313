
<html>
<body>
  <h1>Scripture Resources</h1>
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
  
  foreach ($rows as $row) {
    echo '<p><strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong> - ' . '"' . $row['content'] . '"</p>';
  }
?>
</body>
</html>