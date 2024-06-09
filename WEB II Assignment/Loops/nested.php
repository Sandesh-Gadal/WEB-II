<h1>Nested Loop</h1>
<?php
for ($i=1; $i <=8; $i++) { 
 ?>
 <div class="row">
 <?php
    for ($j=1; $j <=8 ; $j++) { 
        if(($i+$j)%2==0){
            $color="white";
        }else{
            $color="black";
        }
          echo '<div class="square" style="background:' . $color . '"></div>';
}
?>
</div>
<?php
}
?>
<style>
    .square{
        width:50px;
        height:50px;
        float:left;
    }
    .row{
        display:flex;
    }
</style>