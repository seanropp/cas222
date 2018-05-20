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
                    <td><label for="number">Number:</label></td>
                    <td><input type="text" name="number" id="number" placeholder="XXX-XXX-XXXX"></td>
                </tr>
                <tr>
                    <td><label for="choice">Make a Choice?:</label></td>
                    <td><input type="text" name="choice" id="choice" list="participent">
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
                    <td><label for="name2">Name:</label></td>
                    <td><input type="text" name="name2" id="name2" required></td>
                </tr>
                <tr>
                    <td><label for="number2">Number:</label></td>
                    <td><input type="text" name="number2" id="number2" placeholder="XXX-XXX-XXXX"></td>
                </tr>
            </table>
                    <input id="mysubmit" type="submit" value="Submit">
            </form>
        </form>