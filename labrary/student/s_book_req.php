<? include "../include/head.php" ?>
<link href="../css/common.css" rel='stylesheet'>
<script src='../js/book_req.js'> </script>
</head>
    <body>
        <form action="">
            <fieldset>
                <legend>Book Form</legend>
                <label for="select">Categary</label>
                <select onchange='book_req()' name="select" id="select">
                    <option value="">Choose</option>
                    <option value="book_bank">Book Bank</option>
                    <option value="Other Book">Other Book</option>
                </select>
                <div id="semster" style="display:none">
                    <label for="book_bank">Semester</label>
                    <select name="book_bank" id="book_bank">
                        <option value="">Semester</option>
                        <option value="1st"><p>1<sup>st</sup></p></option>
                        <option value="2nd"><p>2<sup>nd</sup></p></option>
                        <option value="3rd"><p>3<sup>rd</sup></p></option>
                        <option value="4th"><p>4<sup>th</sup></p></option>
                        <option value="5th"><p>5<sup>th</sup></p></option>
                        <option value="6th"><p>6<sup>th</sup></p></option>
                        <option value="7th"><p>7<sup>th</sup></p></option>
                        <option value="8th"><p>8<sup>th</sup></p></option>
                    
                    </select>
                </div>
                <div id="other" style='display:none'>
                    <label for="bookname">Book Name</label>
                    <input type="text" id="bookname" required>
                    <label for="author">Author Name</label>
                    <input type="text" id="author" required>
                </div>

                <input style="display:none" id='submit' type="submit" name="send" value="Send Request">
            </fieldset>
        </form>
    </body>
 </html>