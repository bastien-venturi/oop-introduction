
<?php 

class Controller {
    public function render(string $path, array $variables = [])
    {
        extract($variables);
        require "View/$path.php";
    }
}

?>
