    <!--Header Footer-->
         <div>
         
            <!--Lay anh-->
            <?php 
                
                
                $image = $conn->query("select * from table_photo where type = 'logo' limit 0,1"); 
               
            ?>
                <!--Logo-->
                <Header class="logo">
                    <div class="container mx-auto">
                        <div class="logo-content">
                            <a href="./home.php" style=" text-decoration: inherit; text-align: center;">
                                <img style="max-width:100%; height:auto;width:45%;" src="./Preply/image/sota.png" alt="SOTA">
                                <span class="hyphen">-</span>
                                <img  style="max-width:100%; height:auto;width:45%;" src="./../upload/photo/<?php foreach($image as $i){ echo $i["photo"];}?>" alt="Preply">
                            </a>
                        </div>
                    </div>
                    <mx-auto></mx-auto>
                </Header>
                <!--Footer-->
                <div class="footer">
                    <div class="footer-container xl:hidden">
                        <div class="btn-work">
                            <a href="Works.php" class="design_btn">
                                <button class="design_btn_work btn">
                                    <span><?= _myworks ?></span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        aria-hidden="true" class="svg_btn_work" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </a>
                        </div>
                        <!-- Icon Social networking -->
                        <div class="icon-social">
                        <?php 
                            $socialMedia = $conn->query("select * from table_photo where type = 'mxh' "); 
                            foreach($socialMedia as $i){
                               echo "<a href=".$i["link"].">";
                               echo "<img src='./../upload/photo/".$i["photo"]."' alt=''>";
                               echo "</a>";
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>