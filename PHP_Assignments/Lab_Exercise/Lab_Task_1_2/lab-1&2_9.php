    <?php
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            if(isset($_POST["name"]))
            {
            $name=$_POST["name"];
                if($name!="")
                {
                    echo "Welcome $name";
                }
                else
                {
                    echo "Invalid Login";
                }
            }
        }   
    ?>