<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <title>Welcome to Coolmix.eu</title>
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Nunito);
            img {
                max-width: 600px;
                outline: none;
                text-decoration: none;
                -ms-interpolation-mode: bicubic;
            }
            html {
                margin: 0;
                padding: 0;
            }
            a {
                text-decoration: none;
                border: 0;
                outline: none;
                color: #0171e3;
            }
            a img {
                border: none;
            }
            /* General styling */
            td,
            h1,
            h2,
            h3 {
                font-family: SF Pro Display,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
                font-weight: 400;
            }
            td {
                text-align: center;
            }
            body {
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: none;
                width: 100%;
                height: 100%;
                color: #000;
                background: #fff;
                font-size: 16px;
                height: 100vh;
                width: 100%;
                padding: 0px;
                margin: 0px;
            }
            table {
                border-collapse: collapse !important;
            }
            .headline_logo {
                background-color: #0171e3;
                padding: 20px 0;
            }
            .headline {
                color: #444;
                font-size: 30px;
            }
            .force-full-width {
                width: 100% !important;
            }
            .text-right {
                text-align: right
            }
            .text-left {
                text-align: left
            }
            .header-separator {
                margin-top: 20px;
                border: 1px dashed #b4d8fc;
            }
            .font12 {
                font-size: 14px;
            }
            .textBlack {
                color: #000;
                font-weight: 600;
                font-size: 15px;
            }
            .textBlue {
                color: #0171e2;
                font-weight: 600;
                margin-block: 5px;
            }

            .textDate {
                margin-block: 5px;
            }

            .order-summary {
                display: flex; 
                justify-content: space-between;
            }

            .order-summary > *:first-child {
                text-align: left;
                margin-top: 10px;
            }

            .order-summary > *:last-child {
                text-align: right;
            }

            .fontBdy {
                font-size: 14px
            }

            .only-mobile {
                display: none;
            }

            .w80 {
                width: 80%
            }

            .w20 {
                width: 20%
            }

        </style>
        <style media="screen" type="text/css">
            @media screen {
                td,
                h1,
                h2,
                h3 {
                    font-family: SF Pro Display,SF Pro Icons,AOS Icons,Helvetica
                }
            }
        </style>
        <style media="only screen and (max-width: 480px)" type="text/css">
            /* Mobile styles */
            @media only screen and (max-width: 480px) {
                body { 
                    font-size: 15px
                }
                .fontBdy {
                    font-size: 15px
                }
                .font12 {
                    font-size: 14px;
                }
                .textBlack {
                    font-size: 16px;
                }

                .only-desktop {
                    display: none;
                }

                .only-mobile {
                    display: inline;
                }

                .w80 {
                    width: 70%
                }

                .w20 {
                    width: 30%
                }
            }
        </style>
        <style type="text/css"></style>
    </head>
    <body bgcolor="#fff" class="body" style="padding: 0px; margin: 0; display: block; background: #ffffff; -webkit-text-size-adjust: none;">
        <table align="center" cellpadding="0" cellspacing="0" height="100%" width="100%">
            <tbody>
                <tr>
                    <td align="center" bgcolor="#fff" class="" valign="top" width="100%">
                        <center class="">
                            <table cellpadding="0" cellspacing="0" class="w320" style="margin: 0 auto; background-color: #fff; max-width:600px">
                                <tbody>
                                    <tr>
                                        <td align="center" class="" valign="top">
                                            <table cellpadding="0" cellspacing="0" style="margin: 0 auto;" width="100%"></table>
                                            <h4>{{$data['subject']}}</h4>
                                            <table bgcolor="#fff" cellpadding="0" cellspacing="0" class="" style="margin: 0 auto; width: 100%; margin-top: 20px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: left">
                                                            Name:
                                                        </td>
                                                        <td>
                                                            {{$data['name']}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left">
                                                            Email:
                                                        </td>
                                                        <td>
                                                            {{$data['email']}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left">
                                                            Phone:
                                                        </td>
                                                        <td>
                                                            {{$data['phone']}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left">
                                                            Message:
                                                        </td>
                                                        <td>
                                                            {{$data['message']}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
