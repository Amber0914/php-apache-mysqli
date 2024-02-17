<?PHP
        $server = 'host.docker.internal';
        $username = 'root';
        $password = 'root';
        $database = 'mysql';
        $connection = new mysqli($server, $username, $password, $database, 3307) or die("not connected");
        echo "connected"
?>