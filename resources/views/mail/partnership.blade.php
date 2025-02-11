<!DOCTYPE html>

<html>

<head>
    <title>Registered NGO/Company Partnership</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="telephone=no">
    <style type="text/CSS"></style>
    <style @import url('https://dopplerhealth.com/fonts/BasierCircle/basiercircle-regular-webfont.woff2');></style>

    <style>
        body,
        table,
        td,
        div,
        h1,
        p {
            font-family: 'Basier Circle', 'Roboto', 'Helvetica', 'Arial', sans-serif;
        }
    </style>
</head>

<body>

    <p>
        Dear EduALL Team,
    </p>

    <p>
        I hope you're doing well. <br>
        Please find below the registration details for
        {{ $data['category'] == 'company' ? 'Company Partnership' : 'NGO Partnership' }}:
    </p>

    <table border="0">
        <tr>
            <td>Full Name</td>
            <td>:</td>
            <td>{{ $data['data']['fullname'] }}</td>

        </tr>
        <tr>
            <td>{{ $data['category'] == 'company' ? 'Company' : 'Organization' }} Name</td>
            <td>:</td>
            <td>{{ $data['data']['company_name'] }}</td>
        </tr>
        <tr>

            <td>Position</td>
            <td>:</td>
            <td>{{ $data['data']['position'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $data['data']['email'] }}</td>
        </tr>
        <tr>
            <td>Inquiry</td>
            <td>:</td>
            <td>{{ $data['data']['inquiry'] }}</td>
        </tr>
    </table>

    <p>
        Please let me know if you require further information or clarification. <br>
        Thank you for your attention.
    </p>
    <p>
        Best regards,
    </p>

</body>

</html>
