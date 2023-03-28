<form action="{{ route('clubs.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    Admin Name<br>
    <input type="text" name="admin_name"><br>
    Club Name<br>
    <input type="text" name="club_name"><br>
    Email<br>
    <input type="email" name="email_confirm"><br>
    Confirm Email<br>
    <input type="email" name="email"><br>
    Password<br>
    <input type="password" name="password"><br>
    Password Confirm<br>
    <input type="password" name="password_confirm"><br>
    Phone<br>
    <select id="phone" name="indicatif">
        <option value="06">06</option>
    </select><br>
    <input type="text" name="phone"><br>
    Country<br>
    <select name="country" id="country">
        <option value="morocco">morocco</option>
    </select><br>
    City<br>
    <select name="city" id="city">
        <option value="marrakech">marrakech</option>
    </select><br>
    Addresse<br>
    <input type="text" name="address"><br>
    Description<br>
    <textarea name="description" id="" cols="30" rows="10"></textarea><br>
    Logo<br>
    <input type="file" name="logo"><br>
    Recepist Definitif<br>
    <input type="file" id="rec_def" name="rec_def"><br>
    <input type="submit" value="Valider">
</form>