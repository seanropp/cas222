<form method="post" action=" ">
                <form method="post" action=" " id="inquiryForm">
                <!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>-->
            <table id="t02">    
                <tr>
                    <td><label for="name">*Your Name:</label></td>
                    <td><input type="text" name="name" id="name" placeholder="Enter your name" required></td>
                </tr>
                <tr>
                    <td><label for="email">E-Mail:</label></td>
                    <td><input type="text" name="email" id="email" placeholder="Enter your e-mail"></td>
                </tr>
                
                <tr>
                    <td><label for="party">Are you an Athlete, Volunteer, or Other Interested Party:</label></td>
                    <td>
                        <input type="radio" name="party" id="party" value="Athlete">Athlete<br>
                        <input type="radio" name="party" id="party" value="Volunteer">Volunteer<br>
                        <input type="radio" name="party" id="party" value="Just Interested">Just Interested
                    </td>
                </tr>
                <tr>
                    <td><label for="comment">Questions or Comments:</label></td>
                    <td><textarea type="text" name="comment" id="comment" rows="5" cols="25" placeholder="Enter your question/comment here"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input id="mysubmit" type="submit" value="Submit">
                    </td>
                </tr>
                
            </table>

            </form>
        </form>