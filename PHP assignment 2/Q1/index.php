
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating)
        {
            if($attendence < 80 || $hygiene < 50 || $rating < 2)
            {
                EcHo "$name, You are fired from the Rojan Kirana Passal.";
            } else 
            {
                eChO "Not Fired for now.";
            }
        }
        evaluate("Mainali", 35, 70, 2);
    ?>
