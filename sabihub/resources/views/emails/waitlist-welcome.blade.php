<!-- resources/views/emails/waitlist-welcome.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to SabiHub</title>
</head>
<body>
    <h2>Hi {{ $userName }},</h2>
    <p>Thanks for joining the <strong>SabiHub</strong> waitlist!</p>
    <p>We're thrilled to have you on board as a <strong>{{ ucfirst($userType) }}</strong>.</p>
    <p>Stay tuned — exciting updates are coming your way!</p>
    <br>
    <p>Cheers,</p>
    <p><strong>The SabiHub Team</strong></p>
</body>
</html>
