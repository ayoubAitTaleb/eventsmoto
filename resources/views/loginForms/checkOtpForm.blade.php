<!DOCTYPE html>
<html>
<head>
    <title>Events Moto</title>
</head>
<body>
   <h1>Welcome to KOULNA MOTARD! 👋</h1> 
    <p>We have sent a verification code to your email. Please confirm your email address. <span style="background-color:red;color:#fff;">If you don't find check on your Spam box!</span></p>
    <form action="{{ route('validation.update', session('user_id')) }}" method="POST">
        @csrf
        {{ method_field('patch') }}
        <input type="number" name="otp">
        <button type="submit">send OTP code</button>
    </form>
</body>
</html>