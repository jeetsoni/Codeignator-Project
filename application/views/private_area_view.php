<?php include('header.php'); ?>
<div class="container">
<div class="row">
    <div class="col-md-2">
    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge badge-primary badge-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge badge-primary badge-pill">2</span>
  </li>
</ul>
    </div>
    <div class="col-md-5">
        <div class="form-group shadow-textarea">
            <label for="exampleFormControlTextarea6">Create Post</label>
            <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."></textarea>
        </div> 
        <?php foreach($articles as $art):?> 
        <?php if(!is_null($art->image_path)) {?>  
        <div class="card" style="width: 18rem;">
            <div class="pic_heading col-md-12">
            <div class="col-md-6">
                <div class="row">
                    <a href="<?php echo base_url(); ?>profile_con"><img class="h_img" src="<?php echo base_url('/upload/1D836C60-ABA5-4B40-9A05-E0664AFC1D53L0001.jpg') ?>" alt=""
                    width="40px" height="40px"><span class="heading_name">jeet soni</span></a>
                    
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="h_date">20/06/2000</h4>
            </div>  
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo $art->article_title;?></p>
            </div>
            <img class="card-img-top" src="<?php echo $art->image_path ?>" width="100%" height="400px"  alt="Card image cap">

        </div>
        <?php } ?> 
        <?php endforeach; ?>     
    </div>
    <div class="col-md-3">
    
    </div>
    <div class="col-md-2">
    
    </div>
</div>
</div>