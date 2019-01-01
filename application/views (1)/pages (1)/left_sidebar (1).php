<section id="left_sidebar">

    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-products-->
            <?php 
                
                $all_published_category= $this->admin_model->select_all_published_category();

                foreach ($all_published_category as $category)
                {
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#"><?php echo $category->category_name ;?></a></h4>
                </div>
            </div>
            <?php }?>
            
        </div><!--/category-products-->

        <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                    
                </ul>
            </div>
        </div><!--/brands_products-->
        
        

    </div>
               
</section>