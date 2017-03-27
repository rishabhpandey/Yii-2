<?php
/* @var $this SiteController */
//$usersId;
$this->pageTitle=Yii::app()->name;

if(Yii::app()->user->isGuest == true){?>

<h2>Welcome To Yii1</h2>

<?php }else{?>

<html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 70%;
                margin-top: 100px;
                margin-left: 150px;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <h2>Welcome</h2>

        <h4>Users &nbsp;<a href="http://yii1demo.dev/testdrive/index.php/users/index">Click Here</a></h4>
        <h4>Roles &nbsp;<a href="http://yii1demo.dev/testdrive/index.php/roles/index">Click Here</a></h4>
    </body>
</html>
<?php } ?>
