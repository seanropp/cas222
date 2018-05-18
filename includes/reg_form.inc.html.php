            <form method="post" action=" ">
                <form method="post" action="mailto:sean.ropp15@pcc.edu" id="inquiryForm">
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
                    <td><label for="phone_number">Phone Number:</label></td>
                    <td><input type="text" name="phone_number" id="phone_number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><label for="athlete_or_volunteer">Athlete or Volunteer?:</label></td>
                    <td><input type="text" name="athlete_or_volunteer" id="athlete_or_volunteer" list="participent">
                            <datalist id="participent">
                                <option value="Athlete">
                                <option value="Volunteer">
                            </datalist>
                </tr>
                <tr>
                    <td><label for="events">Choose Your Event:</label></td>
                    <td><input type="text" name="events" id="events" list="eventchoice">
                            <datalist id="eventchoice">
                                <option value="Long Course Triathlon">
                                <option value="Olympic Triathlon">
                                <option value="10k">
                                <option value="Half Marathon">
                                <option value="Sprint Triathlon">
                                <option value="Try-a-Tri">
                                <option value="Splash n Dash">
                            </datalist>
                    </td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_name">Emergency Contact Name:</label></td>
                    <td><input type="text" name="emergency_contact_name" id="emergency_contact_name" required></td>
                </tr>
                <tr>
                    <td><label for="emergency_phone_number">Emergency Contact Number:</label></td>
                    <td><input type="text" name="emergency_phone_number" id="emergency_phone_number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><input id="mysubmit" type="submit" value="Submit"></td>
                </tr>
            </table>
            </form>
        </form>