<?php
class LearningPost {
    public $id;
    public $name;

    public function printName() {
        echo "Property name: " . $this->name;
    }
}


$post = new LearningPost();

$post->id = 1;
$post->name = "First Name";

$post->printName();

echo "<br>";

$post2 = new LearningPost();
$post2->id = 2;
$post2->name = "Second Name";

$post2->printName();

?>

