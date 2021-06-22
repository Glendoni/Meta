<div class="row">
<?php
if(count($res['data']['Search'])){
foreach ($res['data']['Search']  as $value){ ?>
    <div class="col-md-4">
    <div class="card" >
        <img class="card-img-top" src="<?=$value['Poster']?> " alt="Card image" style="width:50%; height: 60%;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $value['Title'];?></h5>
            <ul>
                <li>Year: <?php echo $value['Year'];?></li>
                <li>imdbID: <?php echo $value['imdbID'];?></li>
                <li>Type: <?php echo $value['Type'];?></li>
            </ul>
        </div>
    </div>
    </div>
<?php }} ?>
</div>
