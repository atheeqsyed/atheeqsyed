<form name="testForm" id="testForm" method="POST">
    <input type="submit" name="btnpost" value="submit" autofocus onclick="return true;" />
</form>
<?php
$alertmessage = "Form submitted!";
if (isset($_POSrT["btnpost"])) {
    echo "
<script type = \"text/javascript\">
alert('$alertmessage');
</script>
";
}
?>