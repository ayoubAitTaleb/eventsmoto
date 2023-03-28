<form action="{{ route('riders.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    First Name<br>
    <input type="text" name="first_name"><br>
    Family Name<br>
    <input type="text" name="family_name"><br>
    Email<br>
    <input type="email" name="email"><br>
    Confirm Email<br>
    <input type="email" name="email_confirm"><br>
    Password<br>
    <input type="password" name="password"><br>
    Confirm Password<br>
    <input type="password" name="password_confirm"><br>
    Phone<br>
    <select name="indicatif" id="indicatif">
        <option value="06">06</option>
    </select><br>
    <input type="number" name="phone"><br>
    Country<br>
    <select name="country" id="country">
        <option value="morocco">morocco</option>
    </select><br>
    City<br>
    <select name="city" id="city">
        <option value="marrakech">marrakech</option>
    </select>
    <br>
    Adresse<br>
    <textarea name="address"></textarea>
    <br>
    Type Of Motorbike/Scooter<br>
    <select name="moto_type">
        <option value="roadster">morocco</option>
    </select>
    <br>
    Brand Of Motorbike/Scooter
    <br>
    <select name="brand">
        <option value="honda">honda</option>
    </select>
    <br>
    Description
    <br>
    <textarea name="description" cols="30" rows="10"></textarea>
    <br>
    Photo de Profile
    <br>
    <input type="file" name="photo"><br>
    <br>
    <input type="submit" value="Valider">
</form>