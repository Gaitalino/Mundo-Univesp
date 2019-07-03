


<?php 
session_start();
include_once 'bd.php';


$query = "select * from videos where id_disciplina = ".$_SESSION['disciplina']['id_disciplina'];
$stmt = $pdo->prepare($query);
$stmt->execute();
$videos = $stmt->fetchAll(PDO::FETCH_ASSOC);
$y=0;
$i=0;
     while( $y <= count($videos)){ 
?>

<div class="row">

    <?php for($x=0; $x <= 2; $x++){ 

        if(isset($videos[$i])){


    ?>
        <div <?= "onmouseover=\"teste('video_".$i."', 'id_iframe_".$i."')\""?> <?= "onmouseout=\"teste2('video_".$i."', 'id_iframe_".$i."')\""?> class=" mt-4 col-2 m-auto p-0" >
            <div class="mr-auto">
                <div <?= "id='video_".$i."'" ?> class="w-100 mt-4 col-12 m-auto p-0 pb-2 text-center" style="display: none;">
                    <a <?= "href='assistir_video.php?id_video=".$videos[$i]['id_video']."'" ?> href="assistir_video.php?" class="">Assistir ao video</a>
                </div>
                <iframe  <?= "id='id_iframe_".$i."'" ?> width="200" height="125" <?= "src='https://www.youtube.com/embed/".$videos[$i]['url']."'" ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p><?=$videos[$i]['video_nome']?></p>
            </div>
        </div>

    <?php 
}
    $i++;
    $y++;}
    ?>
</div>
<?php
}
?>