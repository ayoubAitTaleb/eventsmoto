<form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    Admin Name<br>
    <input type="text" name="admin_name"><br>
    Media Name<br>
    <input type="text" name="media_name"><br>
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
    Legal Status
    <br>
    <select name="social_reason" id="social_reason">
        <option value="sarl">SARL</option>
        <option value="sa">SA</option>
        <option value="eirl">EIRL</option>
        <option value="eurl">EURL</option>
        <option value="snc">SNC</option>
    </select>
    <br>
    Country
    <br>
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
    Description
    <br>
    <textarea name="description" cols="30" rows="10"></textarea>
    <br>
    Logo
    <br>
    <input type="file" name="logo">
    <br>
    Professional Card
    <br>
    Front
    <br>
    <input type="file" name="card_front"><br>
    Back<br>
    <input type="file" name="card_back">
    <br>
    <input type="submit" value="Valider">
</form>