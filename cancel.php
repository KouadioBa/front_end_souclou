<?php 
    session_start();
    if(empty($_SESSION)) {
        header('location: index.php');
        exit;
    }
    // ''
    $emailHtml = 'Hello,<br><br>Below is the details for the cancelled service<br><br><b>Product</b>:'.$_SESSION["stored_product"].'<br><b>Name</b>:'.$_SESSION["stored_name"].'<br><b>Email</b>:'.$_SESSION["stored_email_address"].'<br><b>Direct Debit Reference</b>:'.$_SESSION["stored_reference"].'<br><b>Reason for cancellation:</b>'.$_SESSION['stored_reason'];
    $emailHtmlClient = 'Hello, '.$_SESSION["stored_name"].',<br><br>We are hereby confirming that your subscription has been cancelled.<br><br>See details below:<br>Product: '.$_SESSION["stored_product"].'<br><br>Regards,<br>The Cybersentry Team';
    $separator = md5(time());
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $body = $emailHtml;
    $bodyOne = $emailHtmlClient;
    mail('cancellations@cybersentry.com', "Subscription has been cancelled" , $body, $headers);
    mail($_SESSION["stored_email_address"], "Subscription has been cancelled" , $bodyOne, $headers);
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBERSENTRY</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="./assets/images/fevicon.ico"/>
    <style>
        body {
            background: var(--white);
        }

        .content {
            width: 80%;
            margin: auto;
        }

        .col {
            width: 100%;
        }

        .row-item {
            text-align: center;
            margin: 0 10px;
        }

        .paragraph {
            text-align: center;
        }


        
        .checkbox {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background: #eee;
        }

        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkbox {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        .container:hover input~.checkbox {
            background: var(--green);
        }

        .container input:checked~.checkbox {
            background: var(--green);
        }

        .checkbox:after {
            content: "";
            position: absolute;
            display: none;
        }

        .container input:checked~.checkbox:after {
            display: block;
        }

        .container .checkbox:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        @media (width <=1180px) {
            .head {
                height: 300px;
            }

            .container {
                font-size: 12px;
            }

            .col {
                width: 100%;
                text-align: left;
            }

            .content {
                width: auto;
            }
        }
    </style>
</head>

<body>
    <?php include_once('header.php') ?>
    <section>
        <div class="head green">
            <div class="content">
                <div class="col a">
                    <h1 class="head-title" style="color: var(--green);">Your subscription had
                        been cancelled. Your online identity is no longer protected by McAfee Multi Access.</h1>
                </div>
                <div class="card">
                    <div class="desktop-layout hero">
                        <div class="col" style="transform: translate(0, 20px);">
                            <img src="./assets/images/mcafee.svg" class="desktop" alt="logo">
                        </div>
                        <div class="col">
                            <div class="gradient">
                                <p class="paragraph">Exclusive Offer</p>
                            </div>
                        </div>
                        <div class="col">
                            <h1 class="title" style="width: 100%; font-size: 26px;">To ensure your identity stays
                                protected we’d like to offer you an exclusive deal so you can see the value of the
                                McAfee antivirus product.</h1>
                        </div>
                        <div class="col">
                            <label class="container">
                                <input type="checkbox" class="reactivate_checkbox">
                                <span class="checkbox"></span>
                                Click here to receive a call back from the CyberSentry team who will offer you an
                                exclusive price and online support setting up the McAfee product for you and your loved
                                ones.
                            </label>
                        </div>
                        <div class="col">
                            <button class="submit reactivate_submit">Submit</button>
                        </div>
                    </div>
                    <div class="mobile-layout">
                        <div class="row">
                            <div class="row-item">
                                <div class="col">
                                    <div class="gradient">
                                        <p class="paragraph">Exclusive Offer</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h1 class="title">To ensure your identity stays protected we’d like to offer you an
                                        exclusive deal so you can see the value of the McAfee antivirus product.</h1>
                                </div>
                                <div class="col">
                                    <label class="container">
                                        <input type="checkbox" class="reactivate_checkbox">
                                        <span class="checkbox"></span>
                                        Click here to receive a call back from the CyberSentry team who will offer you
                                        an exclusive price and online support setting up the McAfee product for you and
                                        your loved ones.
                                    </label>
                                </div>
                                <div class="col">
                                    <button class="submit reactivate_submit">Submit</button>
                                </div>
                            </div>
                            <div class="row-item image hero">
                                <img src="./assets/images/mcafee.svg" style="position: absolute; top: 50%; left: 25px;"
                                    class="desktop" alt="logo">
                            </div>
                            <div class="row-item">
                                <div class="col">
                                    <h1 class="title">Award-winning protection against hackers, viruses and cyber attacks.</h1>
                                </div>
                                <div class="col">
                                    <p class="paragraph" style="text-align: center;">Cover up to 5 of your devices. Your home PC, your tablet, your laptop, or your phone – you name it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row carousel">
                    <div class="row-item">
                        <img src="./assets/images/techmaster-icon-2x.png" alt="icon">
                        <h4>Award-winning antivirus</h4>
                        <p class="paragraph">Block hackers and criminals, malware, spyware and ransomware attacks.</p>
                    </div>
                    <div class="row-item">
                        <img src="./assets/images/Community-icon-2x.png" alt="icon">
                        <h4>Multiple devices</h4>
                        <p class="paragraph">Protect up to five devices - PCs, Macs, smartphones and tablets</p>
                    </div>
                    <div class="row-item">
                        <img src="./assets/images/what_is_id_theft-icon-2x.png" alt="icon">
                        <h4>Payment & Identity Protection</h4>
                        <p class="paragraph">Protect your money, identity & privacy with sophisticated monitoring</p>
                    </div>
                    <div class="row-item">
                        <img src="./assets/images/SecureVPN-icon-2x.png" alt="icon">
                        <h4>Secure browsing</h4>
                        <p class="paragraph">Avoid risky and malicious websites and prevent dangerous downloads.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
</body>

</html>
<script type="text/javascript"> 
    $( document ).ready(function() {
        $(".reactivate_submit").click(function( event ) {
            if ($('input.reactivate_checkbox').is(':checked')) {
                $.ajax({
                    type: "POST",
                    url: "reactivate_subscription.php",
                    success: function () {
                        document.location = 'reactivate.php';
                    },
                    error: function () {
                    }
                });
            }
        });
    });
</script>