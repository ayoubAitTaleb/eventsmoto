<form action="{{ route('companies.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    Comercial Name<br>
    <input type="text" name="commercial name"><br>
    company Name<br>
    <input type="text" name="company_name"><br>
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
    </select><br>
    Adresse<br>
    <input type="text" name="address" id="address">
    <br>
    Pattente<br>
    <input type="text" name="patente"><br>
    Register Commerce - RC<br>
    <input type="text" name="registre_commerce"><br>
    Identifian Fiscal - IF<br>
    <input type="text" name="identifiant_fiscal"><br>
    ICE<br>
    <input type="text" name="ice"><br>
    Cnss<br>
    <input type="text" name="cnss"><br>
    Description<br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    Logo
    <br>
    <input type="file" name="logo"><br>
    Statuts
    <br>
    <input type="file" name="status">
    <br>
    <input type="submit" value="Valider">
</form>