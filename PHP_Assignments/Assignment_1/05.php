<html>
    <body style="background-color:yellow;">
        <?php
            //Make a Webpage with yellow background which displays hobbies of yours
            //using heredoc command.
            $hobbies = <<<HOBBY
                <h2>My Hobbies</h2>
                <ul>
                    <li>Reading Books</li>
                    <li>Playing Chess</li>
                    <li>Coding in PHP</li>
                    <li>Watching Movies</li>
                    <li>Travelling</li>
                </ul>
            HOBBY;

            echo $hobbies;
        ?>
    </body>
</html>