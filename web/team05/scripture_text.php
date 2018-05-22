<html>
<body>
  <?php 
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
$scripture = $_GET['scripture_id'];

  
$stmt = $db->prepare("SELECT content FROM scriptures where scripture_id=$scripture");
$stmt->execute();
$content = $stmt->fetch();

echo '<p>' . $content['content'] . '</p>';
?>
  </body>
</html>
