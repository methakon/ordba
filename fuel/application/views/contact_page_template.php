<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>

        <div class="jumbotron text-xs-center">
<!--            <h1 class="display-3">New Enquiry Received!</h1>-->
            <p class="lead">
                <strong>New enquiry is received from following user. </strong>
                <br/>
                <br/>
                <br/>
            <table style="border-collapse: collapse; width: 100%;">

                <tr>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><strong>Name</strong></td>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                        <?php
                        if (isset($name)) {
                            echo ucwords($name);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><strong>Email</strong></td>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><?php if (isset($emailAddress)) { ?><a href="mailto:<?php echo $emailAddress; ?>"><?php echo $emailAddress; ?></a> <?php } ?></td>
                </tr>
                <tr>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><strong>Phone No</strong></td>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                        <?php
                        if (isset($phoneNumber)) {
                            echo $phoneNumber;
                        }
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;"><strong>Feedback</strong></td>
                    <td style=" padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">
                        <?php
                        if (isset($enquiry)) {
                            echo html_entity_decode($enquiry);
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </p>
    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
</body>

</html>