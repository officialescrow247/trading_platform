<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap");
            body {
                width: 100% !important;
                margin: 0;
                -webkit-text-size-adjust: none;
            }

            body,
            td,
            th {
                font-family: "Nunito Sans", Helvetica, Arial, sans-serif;
            }
        </style>
    </head>

    <body style="margin: 0; padding: 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 70%; border-collapse: collapse; padding: 0px 30px;">
            <tr>
                <td bgcolor="#EE4E07" style="padding: 10px 20px;" align="center">
                    <img src="https://images.prismic.io/tnfev2/44587b9b-c476-4a96-a39e-788e0f04f5e5_HeaderLogoAnimated.gif" alt="site-logo" style="height: 40px;">
                    <h2 style="color: white; padding: 2px; margin: 0;">Trade Nation</h2>
                </td>
            </tr>

            <tr width="470" align="left">
                <td width="470" align="left" style="padding: 50px 30px;">
                    <h1 style="margin-top: 0; color: #333333; font-size: 22px; font-weight: bold; text-align: left;">
                        Hello {{ $user_name }},
                    </h1>
                    <p>{{ $msg }}</p>

                    <p style="padding-top: 40px; font-weight: 600;">
                        Cheers,
                        <br>
                        The {{ $site_name }} Team
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                	<img src="https://tradnationltd.com/imgs/mail-img.png" alt="" style="width: 100%; user-drag: none; -webkit-user-drag: none; user-select: none; -moz-user-select: none; -webkit-user-select: none; -ms-user-select: none;">
                </td>
            </tr>

            <tr align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                <td>
                    <p style="padding: 20px 0px; font-weight: 600;">
                    © {{ date('Y') }}. {{ $site_name }}. All Rights Reserved.
                    </p>
                </td>
            </tr>
        </table> 
        
    </body>
</html>