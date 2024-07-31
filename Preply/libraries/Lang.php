         <!--Lang-->
            
            <nav class="lang" id="form_lang">
                <div class="lang-container" id="form_lang">
                    <a href="?lang=en" id="en" class="Active" onclick="changeLang(this)">
                        <p>En</p>
                    </a>
                    <a href="?lang=vi" id="vi"  onclick="changeLang(this)"><p>Vi</p></a>
                </div>
            </nav>
            <script>
            // Hàm thay đổi ngôn ngữ bằng JS
                    if ("<?php echo  $session_script; ?>" == "vi"){
                        document.getElementById("vi").classList.add('Active');
                        document.getElementById("en").classList.remove("Active");
                    }else{
                        document.getElementById("en").classList.add('Active');
                        document.getElementById("vi").classList.remove("Active");
                    }
            </script>
            