<?php
class Article {
    public $time;
    public $text;
    public function DateTranslate($time){


        return date( 'H\hi l d F', $time );
    }
    public function view(){
        echo $this->text;
    }


}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>



<?php foreach ($articles as  $article):?></body><br>

<p><a href = page.php?id=<?php echo $article['id']?>>
        <?php $in = $article['time'];
        $a= new Article();
        echo $a->DateTranslate($in);?><br/>
        <?php echo $article['title'];?></a></p>

<?php endforeach ?>

<a href="../add.php">add new</a>
</body>
</html>
