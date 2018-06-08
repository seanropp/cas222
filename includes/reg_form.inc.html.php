            <form method="post" action=" ">
                <form method="post" action=" " id="inquiryForm">
                <!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>-->
            <table id="t02">    

                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" id="name" placeholder="Enter your name" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-Mail:</label></td>
                    <td><input type="text" name="email" id="email" placeholder="Enter your e-mail"></td>
                </tr>
                <tr>
                    <td><label for="phone_number">Phone Number:</label></td>
                    <td><input type="text" name="phone_number" id="phone_number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><label for="athlete_or_volunteer">Athlete or Volunteer?:</label></td>
                    <td>
                        <input type="radio" name="athlete_or_volunteer" id="athlete_or_volunteer" value="Athlete">Athlete<br>
                        <input type="radio" name="athlete_or_volunteer" id="athlete_or_volunteer" value="Volunteer">Volunteer
                    </td>
                </tr>    
                <tr>
                    <td rowspan="2"><label for="events">Choose Your Event:</label></td>
                    <td>--Saturday Events--<br>
                        <input type="radio" name="events01" id="events01" value="Long Course Triathlon">Long Course Triathlon<br>
                        <input type="radio" name="events01" id="events01" value="Olympic Triathlon">Olympic Triathlon<br>
                        <input type="radio" name="events01" id="events01" value="10k">10k<br>
                        <input type="radio" name="events01" id="events01" value="Half Marathon">Half Marathon<br>
                        <input type="radio" name="events01" id="events01" value="Not Participating">Not Participating<br>
                    </td>
                </tr>
                <tr>
                    <td>--Sunday Events--<br>
                        <input type="radio" name="events02" id="events02" value="Sprint Triathlon">Sprint Triathlon<br>
                        <input type="radio" name="events02" id="events02" value="Try-a-Tri">Try-a-Tri<br>
                        <input type="radio" name="events02" id="events02" value="Splash n Dash">Splash n Dash<br>
                        <input type="radio" name="events02" id="events02" value="Not Participating">Not Participating<br>
                    </td>
                </tr>
                <tr>
                    <td><label for="emergency_contact_name">Emergency Contact Name:</label></td>
                    <td><input type="text" name="emergency_contact_name" id="emergency_contact_name" placeholder="Enter a name here" required></td>
                </tr>
                <tr>
                    <td><label for="emergency_phone_number">Emergency Contact Number:</label></td>
                    <td><input type="text" name="emergency_phone_number" id="emergency_phone_number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><label for="genderid">How Do You Identify Yourself?:</label></td>
                    <td>
                        <input type="radio" name="genderid" id="genderid" value="Male">Male<br>
                        <input type="radio" name="genderid" id="genderid" value="Female">Female<br>
                        <input type="radio" name="genderid" id="genderid" value="Non-binary">Non-binary
                    </td>
                </tr>            
                <tr>
                    <td><label for="shirtsize">Choose Your Shirt Size:</label></td>
                    <td>
                        <input type="radio" name="shirtsize" id="shirtsize" value="XSmall">XSmall<br>
                        <input type="radio" name="shirtsize" id="shirtsize" value="Small">Small<br>
                        <input type="radio" name="shirtsize" id="shirtsize" value="Medium">Medium<br>
                        <input type="radio" name="shirtsize" id="shirtsize" value="Large">Large<br>
                        <input type="radio" name="shirtsize" id="shirtsize" value="XLarge">XLarge<br>
                        <input type="radio" name="shirtsize" id="shirtsize" value="XXLarge">XXLarge<br>
                        <input type="radio" name="shirtsize" id="shirtsize" value="XXXLarge">XXXLarge
                     </td>
                </tr>
                <tr>
                    <td><input id="mysubmit" type="submit" value="Submit"></td>
                </tr>
            </table>
            </form>
        </form>