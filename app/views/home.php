<!--table>
<tr>

<?php
    foreach ($data as $value) {
?>

    <td>
        <img src="<?php echo $value["avatar"] ?>" class="" style="width: 100%; height: 200px;">
        <a href="#" rel="category tag"> <?php $key = $this->Model->fetchOne("select * from menu_catalog where id=?",[$value["catalog"]]); if(isset($key["name"])) echo $key["name"]; ?> </a>
        <a href="index.php?controller=detailBlog&id=<?php echo $value['token']?>" rel="bookmark" class="entry-title"> <?php echo $value["name"] ?> </a>
        <?php echo $value["description"] ?>
    </td>
  <?php }?>
  </tr>
</table>
<div class="col-md-12">    
    <?php for($i=1; $i<=$page_show; $i++){ ?>
        
            <a href="index.php?p=<?php echo $i ?>">
            <?php echo $i; ?>
            </a>
        
    <?php } ?> 
</div-->

<div style="float: right;right: 0px;position: absolute;margin-top: 2em;">
    <span style="float: right;width: 10em;">
        <div style="text-align: center;">
           
            <?php
                $hashtag=$this->Model->fetch("select * from hashtag");
                foreach($hashtag as $value){
                    echo '<a href="index.php?controller=searchHashtag&hashtag='.$value['hashtag'].'" class="hashtag">'.$value['hashtag'].'</a>';
                }
            ?>
        </div>
    </span>
</div>
<div >
    <div>
        <div >
            <?php
                foreach ($data as $value) {
            ?>    
            <div style="float: left;width: 15%;position: relative;margin: 1em;min-width: 200px;">   
                <article style="height: 100%;min-height: 500px;text-align: center;">
                    <div >
                        <a href="index.php?controller=detailBlog&id=<?php echo $value['token']?>" title="" >
                            <!--img src="<?php echo $value["avatar"] ?>" class="post-thumbnail img-responsive" style="width: 80%; height: 200px;"-->
                            <img src="public/images/tumblr_p840mfjGR51vo6vclo2_1280.png" class="post-thumbnail img-responsive" style="width: 80%; height: 200px;">
                        </a>
                    </div>
                    <div >
                    
                            <div>
                                <a href="index.php?controller=searchCatalog&catalog=<?php echo $value['catalog']?>" rel="category tag" style="color: cadetblue;">
                                    <?php
                                        $key = $this->Model->fetchOne("select * from menu_catalog where id=?",[$value["catalog"]]);
                                        if(isset($key["name"]))
                                           echo $key["name"];
                                    ?>
                                </a>
                            </div>
                            <a href="index.php?controller=detailBlog&id=<?php echo $value['token']?>" rel="bookmark" style="color: #5d5d5d;font-family: 'Source Sans Pro', sans-serif;font-weight: 400;line-height: 28px;font-size: 0.8em;">
                               <?php echo $value["name"] ?>
                            </a>
                        <!--/.entry-header -->
                        <div>
                            <p style="font-size: 1em;"><?php echo $value["description"] ?></p>
                        </div>
                    
                        
    
                    </div>
                    <div class="listHashtag">
                        <?php
                            //echo "select hashtag from blog_hashtag where token=".$value['token'];
                            $hashtag = $this->Model->fetch("select hashtag from blog_hashtag where token=?",[$value['token']]);
                            foreach($hashtag as $ht){
                                echo '<a href="index.php?controller=searchHashtag&hashtag='.$ht['hashtag'].'" class="miniHashtag">'.$ht['hashtag'].'</a>';
                            }
                        ?>
                    </div>
                    <div style="position: absolute;bottom: 1em;width: 100%;">
                            <span style="color: #888888;font-size: 10px;"><?php echo $value["dateTime"] ?></span>
                    </div>
                </article>

            </div>
            <?php } ?>
        
            
        
        </div>
    </div>
</div>
<script>

</script>
<!--footer>
<div style="float: left;width: 100%;">
        <?php for($i=1; $i<=$page_show; $i++){ ?>
                <a href="index.php?p=<?php echo $i ?>" style="color: gainsboro;">
                <?php echo $i; ?>
                </a>
        <?php } ?>               
</div>
  <p>Author: Hege Refsnes<br>
  <a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>
    <!--sidebar start-->
    <!--div class="">
        <div class="" role="complementary">
                                
            <!?php include "app/controllers/newBlog.php"; ?>

        </div>
    </div-->