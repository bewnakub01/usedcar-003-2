<div class="row">
<?php

    include("connect.php");
?>
    <?php
     if(isset($_SESSION['id'])){
     ?>
     <div class="col-lg-11">
     <div class="col-lg-6">
     <h1 class="page-header">All Car</h1>
     </div>
        
        </div>
       
       <p><a href="index.php?menu=insert" class="btn btn-success">Post a car </a></p>
       
        <?php
        }
        ?>
        </div>
      

        <?php
            $sql = "SELECT * FROM car ORDER BY id";
            $result = $con->query($sql);
                    if(!$result){
                        echo "ERror";
                    }
                    else{
                //ดึงข้อมูล
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                    <a href="productdetail.php?pid=<?php echo $prd->id; ?>">
                        <img src="img/<?php echo $prd->carpic; ?>" alt="">
                    </a>
                        <div class="caption">
                            <h3><?php echo $prd->model; ?></h3>
                                <p>brand : <?php echo $prd->brand; ?></p>
                                
                                <p>color : <?php echo $prd->color; ?></p>

                                <p>license : <?php echo $prd->license; ?></p>

                                <p>province : <?php echo $prd->province; ?></p>

                                <p>modelYear : <?php echo $prd->modelYear; ?></p>
                                <p>
                                    <strong>Price: <?php echo $prd->price ?></strong>
                                </p>

                                <p>
                                <?php
                                if(isset($_SESSION['id'])){
                                ?>
                                    <a href="index.php?menu=edit&pid=<?php echo $prd->id ?>" class="btn btn-warning"> 
                                        <i class="glyphicon glyphicon-pencil"></i> Edit
                                    </a>
                                    <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete"> 
                                        <i class="glyphicon glyphicon-trash"></i> Delete
                                    </a>
                                    <?php
                                }
                                ?>
                                </p>

                        </div>
                    </div>
                </div>
            <?php
                }
            }
            ?>
            <script>
                            $(document).ready(function(){
                                $(".lnkDelete").click(function(){
                                    return confirm("Confirm Delete?");
                                });
                            });
                            </script>