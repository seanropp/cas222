<form method="post" action=" ">
                <form method="post" action="mailto:sean.ropp15@pcc.edu" id="inquiryForm">
                <!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>-->
            <table id="t02">    
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td><label for="name">*Your Name:</label></td>
                    <td><input type="text" name="name" id="name" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-Mail:</label></td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="party">Are you an Athlete, Volunteer, or Other Interested Party:</label></td>
                    <td><input type="text" name="party" id="party" list="partytype">
                                <datalist id="partytype">
                                <option value="Athlete">
                                <option value="Volunteer">
                                <option value="Interested">
                            </datalist>
                    </td>
                </tr>
                <tr>
                    <td><label for="comment">Write Something:</label></td>
                    <td><textarea type="text" name="comment" id="comment" rows="5" cols="25"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input id="mysubmit" type="submit" value="Submit">
                    </td>
                </tr>
                
            </table>

            </form>
        </form>