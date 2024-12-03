<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <label>First Name:</label><br /><br />
        <input type="text" name="first_name" required/><br /><br />

        <label>Last Name:</label><br /><br />
        <input type="text" name="last_name" required/><br /><br />

        <label>Gender:</label><br />
        <input type="radio" id="male" name="gender" value="Male" required />
        <label for="male">Male</label><br />

        <input type="radio" id="female" name="gender" value="Female" required />
        <label for="female">Female</label><br />

        <input type="radio" id="other" name="gender" value="Other" required />
        <label for="other">Other</label><br /><br />

        <label for="nationality">Nationality:</label><br /><br />
        <select id="nationality" name="nationality" required>
            <option value="Indonesia">Indonesian</option>
            <option value="Malaysia">Malay</option>
            <option value="Singapore">Singapore</option>
            <option value="Other">Other</option>
        </select><br /><br />

        <label>Language Spoken:</label><br />
        <input type="checkbox" id="indonesian" name="language[]" value="Indonesian" />
        <label for="indonesian">Bahasa Indonesia</label><br />

        <input type="checkbox" id="english" name="language[]" value="English" />
        <label for="english">English</label><br />

        <input type="checkbox" id="other_language" name="language[]" value="Other" />
        <label for="other_language">Other</label><br /><br />

        <label for="bio">Bio:</label><br /><br />
        <textarea id="bio" name="bio" rows="8" cols="40" required></textarea><br />
        
        <input type="submit" value="Sign Up" />
    </form>
</body>
</html>
