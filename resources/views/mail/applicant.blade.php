<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Applicant</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f6f8fa;
            font-family: 'Helvetica Neue', 'Roboto', 'Arial', sans-serif;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }

        h1 {
            font-size: 20px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
        }

        p {
            font-size: 14px;
            line-height: 1.6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
        }

        table td {
            padding: 8px 6px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }

        table td:first-child {
            font-weight: bold;
            color: #555;
            width: 35%;
        }

        .footer {
            font-size: 12px;
            color: #777;
            text-align: center;
            margin-top: 20px;
        }

        .highlight {
            color: #1a73e8;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📩 New Applicant Submission</h1>

        <p>Dear <span class="highlight">HR Team</span>,</p>

        <p>
            A new applicant has submitted their application for the
            <strong>{{ ucwords($data['position']) }}</strong> position.
            Below are the applicant details:
        </p>

        <table>
            <tr>
                <td>Full Name</td>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{ $data['phone'] }}</td>
            </tr>
            <tr>
                <td>CV</td>
                <td>
                    <a href="{{ $data['cv_path'] }}">Download here!</a>
                </td>
            </tr>
        </table>

        <p>
            Please review the application at your earliest convenience.
            If you need additional information, feel free to contact the applicant directly.
        </p>

        <p>Best regards
        </p>
    </div>
</body>

</html>
