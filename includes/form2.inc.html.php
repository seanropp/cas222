            <form method="post" action=" ">
                <form method="post" action=" " id="inquiryForm">
                <!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>-->
            <table id="t02">    
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-Mail:</label></td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="phone_number">Number:</label></td>
                    <td><input type="text" name="phone_number" id="phone_number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><label for="athlete_or_volunteer">Make a Choice?:</label></td>
                    <td><input type="text" name="athlete_or_volunteer" id="athlete_or_volunteer" list="participent">
                            <datalist id="participent">
                                <option value="Option 1">
                                <option value="Option 2">
                            </datalist>
                </tr>
                <tr>
                    <td><label for="events">Word:</label></td>
                    <td><input type="text" name="events" id="events" list="eventchoice">
                            <datalist id="eventchoice">
                                <option value="Word One">
                                <option value="Word Two">
                                <option value="Word Three">
                                <option value="Word Four">
                                <option value="Word Five">
                            </datalist>
                    </td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_name">Name:</label></td>
                    <td><input type="text" name="emergency_contact_name" id="emergency_contact_name" required></td>
                </tr>
                <tr>
                    <td><label for="emergency_phone_number">Number:</label></td>
                    <td><input type="text" name="emergency_phone_number" id="emergency_phone_number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
            </table>
                    <input id="mysubmit" type="submit" value="Submit">
            </form>
        </form>