<!Doctype html>
<html>
    <head>
        <title>Online Shop - Admin</title>
        <link rel="stylesheet" type="text/css" href="admin_style.css" />
    </head>
    <body>
        <h1>Welcome To Admin Panel</h1>
        <?php
            if(!isset($module)){
                $module = $this->uri->segment(1);                        
            }
            
            if(!isset($view_file)){
                $view_file = "";
            }
            
            if($module != "" && $view_file != ""){
                $path = $module."/".$view_file;
                $this->load->view($path);
            }
        ?>
    </body>
</html>



