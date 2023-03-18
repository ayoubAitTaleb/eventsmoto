<form action="{{ route('riders.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    First Name<br>
    <input type="text" name="first_name"><br>
    Family Name<br>
    <input type="text" name="family_name"><br>
    Email<br>
    <input type="email" name="email"><br>
    Password<br>
    <input type="password" name="password"><br>
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
    <input type="text" name="address" id="address">
    <br>
    Mumber Of Club<br>
    <select name="member" id="member">
        <option value="0">no</option>
        <option value="1">yes</option>
    </select>
    <br>
    Type Of Motorbike/Scooter<br>
    <select name="moto_type" id="moto_type">
        <option value="roadster">morocco</option>
    </select>
    <br>
    Brand Of Motorbike/Scooter
    <br>
    <select name="brand" id="brand">
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