<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Email With Stats</title>

    <link rel="stylesheet" href="sass/style.css" />

</head>
<body>

<div class="bui-email--success">

    <table>

        <tr class="bui-container">

            <td>

                <table class="bui-email--md">
                    <tr>
                        <td>
                            <table class="bui-row">

                                <tr>
                                    <td>
                                        asdf
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>


            </td>

        </tr>


    </table>

</div>


<?php
$classes = ["default", "primary", "success", "info", "warning", "danger"];
foreach($classes as $class)
{
?>

<!--/#blockui-html#-->
<div class="bui-email--<?php echo $class; ?> ">
<table>
    <tr class="bui-container">
        <td>
            <a href="#">
                <img class="img--c m--t-15 m--b-15" src="img/logo.png" alt="logo"/>
            </a>
        </td>
    </tr>
    <tr class="bui-container">
        <td>

            <table class="bui-email--lg">
                <tr>
                    <td class="txt--c">

                        <?php echo $class; ?>

                        <table class="bui-row bui-borderless" >
                            <tr>
                                <td>
                                    We're really circling in on our brand and voice. Part of this initiative was making
                                    our emails not suck. I give you the hand coded templates that came from that.
                                </td>
                                <td>
                                    We're really circling in on our brand and voice. Part of this initiative was making
                                    our emails not suck. I give you the hand coded templates that came from that.
                                </td>

                                <td>
                                    We're really circling in on our brand and voice. Part of this initiative was making
                                    our emails not suck. I give you the hand coded templates that came from that.

                                    <hr/>

                                    <p>
                                        We're really circling in on our brand and voice. Part of this initiative was making
                                        our emails not suck. I give you the hand coded templates that came from that.
                                    </p>

                                </td>
                            </tr>
                        </table>

                        <table class="bui-row" >
                            <tr>
                                <td>
                                    We're really circling in on our brand and voice. Part of this initiative was making
                                    our emails not suck. I give you the hand coded templates that came from that.

                                    <hr/>

                                    <p>
                                        We're really circling in on our brand and voice. Part of this initiative was making
                                        our emails not suck. I give you the hand coded templates that came from that.
                                    </p>

                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</div>
<!--#blockui-html#-->
<?php
}
?>






</body>
</html>