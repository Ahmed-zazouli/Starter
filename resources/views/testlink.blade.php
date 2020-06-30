<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height" id="ad">


            <form  action="actions" method="get">
                <table>
                    <tr>
                        <td>
                            <label><b> Nom:</b></label>
                        </td>
                        <td>
                            <input type="text"  pattern="[A-Z][a-z]+"  name="nomField" placeholder="fddydtydrdrt"  required  title="nombre invalide" id="n" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>CIN:</b></label>
                        </td>
                        <td>
                            <input type="text" pattern="[A-Z]{2}[0-9]{6}"  name="nomField"   required  title="nombre invalide" >
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><b>date:</b></label>
                        </td>
                        <td>
                            <input type="date" name="dateField">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>SEX:</b></label>
                        </td>

                        <td>
                            <input type="radio"  name="v" value="M" >
                            <label><b>M</b></label>
                            <input type="radio"  name="v" value="F">
                            <label><b>F</b></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Tel:</b></label>
                        </td>
                        <td>
                            <input type="nombre"  value="+212" name="nombreField">
                        </td>
                    <tr>
                        <td>
                            <label><b>osir</b></label>
                        </td>

                        <td>
                            <label><b>voyage</b></label>
                            <input type="checkbox">
                            <label><b>foot </b></label>
                            <input type="checkbox" >
                        </td>
                    </tr>

                    <td>

                    </td>
                    <td>
                        <label><b>lecture</b></label>
                        <input type="checkbox"  >
                        <label><b>jeux</b></label>
                        <input type="checkbox"  >
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>email:</b></label>
                        </td>
                        <td>
                            <input type="email" name="emailField">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label><b>password:</b></label>
                        </td>
                        <td>
                            <input type="password" name="nomField">
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label><b>pays:</b></label>
                        </td>
                        <td>
                            <select name="pays">
                                <option></option>
                                <option value="ma">Maroc</option>
                                <option value="dz">Algerie</option>
                                <option value="dz">Egypt</option>
                                <option value="dz">France</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label><b>Image:</b></label>

                        <td>
                            <input type="file" name="img" id="img">
                        </td>
                    <tr>
                        <td>
                            <label><b>description:</b></label>

                        <td>
                            <textarea name="desc"rows="6" cols="30" ></textarea>
                            <input type="file" name="img">
                    <tr>
                        <td>

                        </td>
                        <td>
                            <input type="submit"  value="envoyer" onclick="checknom()">
                            <input type="reset"  value="effacer">
                        </td>
                    </tr>


                </table>
            </form>


            </div>
        </div>
    </body>
</html>
