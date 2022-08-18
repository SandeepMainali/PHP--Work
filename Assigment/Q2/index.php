
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if(($attendence < 80 && $hygiene < 50) || ($hygiene < 50 && $rating < 2))
            {
                EcHo "$name, You are fierd from the Rojan Kirana Passal.";
            } else
            {
                eChO "Not Fired for now.";
            }
        }
        evaluate("Sandeep", 80, 60, 3);
    ?>
