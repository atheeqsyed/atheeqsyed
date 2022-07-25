<html>

<body>
    <form name="testForm" id="testForm" method="POST">
        <h3> Enter the Age in Numbers</h3>
        <input name="Text" type="number" id="sub">
        <input type="submit" name="valid" value="Validate" method="$_POST" autofocus onclick="return true;" />
    </form>
    <script type="text/javascript">
        function getAge() {
            var dob = document.getElementById('date').value;
            dob = new Date(dob);
            var today = new Date();
            var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
            document.getElementById('age').value = age;
        }
    </script>
</body>

<?php

//echo ($validate < 18) ? 'Not Eligible' : 'Eligible' ; 
?>

</html>