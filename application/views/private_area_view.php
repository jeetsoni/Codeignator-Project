<?php include('header.php'); ?>
<div class="container">
    <div class="row">
    <div class=col-lg-9 style="border:1px solid;">
        
        	
                    <h1 style=" padding-left: 300px;">All Post</h1>
                    <table class="table table-border">
                    

                    
                    <thead>
                    <?php $count=0 ?>
                        <?php foreach($articles as $art): 
                            $count++;    
                        ?> 
                    <tr>
                        <?php if(!is_null($art->image_path)) {?>  
                        
                        <th><?php echo $count; ?><center><img class="img-thumbnail" src="<?php echo $art->image_path ?>" alt="" width="650" height="500"></center><?php echo "date" ?> </th>
                        <?php } ?>
                    </tr>
                    
                        
                       
                    </thead>
                    <tbody>
                    <tr>
                    <td><?php echo $art->article_title;?> </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>
            
        
    </div>
    <div class="col-lg-3" style="border:1px solid;">
    <h3>See Who is Online</h3>
    
    </div>
</div>
</div>