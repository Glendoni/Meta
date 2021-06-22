<h1>Three equal </h1>
<p>Note: Try to add a new div with class="col" inside the row class - this will create three equal-width columns.</p>
<div class="row">


        <?php
       // print_r($res['Search']);

        foreach($res['Search'] as $key => $value){

            ?>

            <div class="col-md-6 cards" style="background-color:white">
                <?php


//                echo   'Title: '. $value['Title'] .
//                    'Year: '.$value['Year']. '<br>'.
//                    'imdbID: '.$value['imdbID']. '<br>'.
//                    'Type: '.$value['Type']. '<br>'
                //$value['Poster'];
                ?>

                <div class="card" style="width:400px">
                    <img class="card-img-top" src="<?=$value['Poster']?>" alt="Card image" >
                    <div class="card-body">
                        <h4 class="card-title"><?=$value['Title']?></h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>

      <?php  }
        ?>

</div>
