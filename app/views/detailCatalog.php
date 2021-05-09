<div>
    <div>
        <div>
            <!--post start-->
            <div>

                <!--div class="">
					<img src="<?php echo $value["avatar"] ?>" />
				</div-->
                <div class="">

                    <!--div>
						<a href="#" rel="category tag">
							<?php echo $value["name"];?>
						</a>
					</div-->
                    <div class="entry-title" style="font-weight: 600px; font-size: 24px;">
                        <?php echo $value["name"] ?>
                    </div>

                    <!--/.entry-header -->
                    <div>
                        <span style="font-style: italic"><?php echo $value["metaTitle"] ?></span>
                        <p style="margin-top: 20px;">
                            <b>Nội dung chính: </b> <br>
                            <?php echo $value["detail"]; ?>
                        </p>
                    </div>
                    <div>
                        <?php 
                            // $this->Model->fetchOne("select * from  where id=?",[$id]);
                            $doamins=json_decode($value["domains"],true);
                            //print_r($value["domains"]);
                            foreach($doamins as $doamin=>$subdomain){
                        ?>
                        <div class="collapsible" id="nmap">
                            <div class="collapsible-child"><?php echo $doamin;?></div>
                            <div style="float: right;margin: 0 1em;"><i class="fas fa-atom fa-spin fa-lg"></i></div>
                            <div class="scanner-status"><i class="fas fa-atom fa-spin fa-lg"></i></div>
                        </div>
                        <div class="content-collapsible">
                            <?php foreach($subdomain as $sub){echo "<div style='padding: 0.5em 0;' onclick=alert(1)>".$sub."</div>";} ?>
                        </div>
                        <?php }?>
                    </div>
                    <div>
                        <?php 
                            // $this->Model->fetchOne("select * from  where id=?",[$id]);
                            //$doamins=json_decode($value["domains"],true);
                            foreach($domains_test as $dm){

                        ?>
                        <div class="collapsible" >
                            <!--div><input type="checkbox"></div-->
                            <div class="collapsible-child"><?php echo $dm["domain"];?></div>
                            <div style="float: right;margin: 0 1em;" onclick=findSub('<?php echo $dm['domain'];?>')><i class="fas fa-atom fa-spin fa-lg"></i></div>
                            <div class="scanner-status"><i class="fas fa-atom fa-spin fa-lg"></i></div>
                        </div>
                        <div class="content-collapsible">
                            <!--?php
                                $hostnames=$this->Model->fetch("select * from subdomain where domain=?",[$dm['domain']]);
                                foreach($hostnames as $host){
                                    echo "<div style='padding: 0.5em 0;' onclick=alert(".$host['id'].")>".$host['hostname']."</div>";
                                } 
                            ?-->
                            <?php
                                echo "<pre style='padding: 1em 0;'>".$dm["subdomain"];
                                if($dm["subdomain"]=="pending"){echo '<i class="fas fa-sync-alt fa-spin"></i>';}
                                echo "</pre>";
                            ?>
                        </div>
                        <?php }?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;
	for (i = 0; i < coll.length; i++) {
		coll[i].firstElementChild.addEventListener("click", function () {
			this.classList.toggle("active-collapsible");
			var content = this.parentElement.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}
		});
	}

	var sca = document.getElementsByClassName("scanner-status");
	for (i = 0; i < coll.length; i++) {
		coll[i].addEventListener("click", function () {
			// cái nè dùng để in ra result của scanner
			/*
			this.classList.toggle("active-collapsible");
			var content = this.parentElement.nextElementSibling;
			if (content.style.display === "block") {
				content.style.display = "none";
			} else {
				content.style.display = "block";
			}*/

		});
	}
	function findSub(a){
        var markers = { "domain": a};
        $.ajax({
            type: "POST",
            url: "api/subdomain.php",
            data: JSON.stringify(markers),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data){
                //console.log(a.innerHTML);
                alert(1);
            },
            error: function(errMsg) {
                alert("Fail");
            }
        });
    }
</script>