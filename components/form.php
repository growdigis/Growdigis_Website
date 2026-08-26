<form id="contact-form" name="contact-form" action="../GrowDigi/components/submit.php" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="contact-form mt-45">
                <label>Company Name</label>
                <input type="text" name="cname" id="cname" placeholder="Enter your company name" required>
            </div> <!-- contact-form -->
        </div>

        <div class="col-md-6">
            <div class="contact-form mt-45">
                <label>Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
            </div> <!-- contact-form -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="contact-form mt-45">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div> <!-- contact-form -->
        </div>

        <div class="col-md-6">
            <div class="contact-form mt-45">
                <label>Mobile Number</label>
                <input type="text" name="number" id="number" placeholder="Enter your mobile number" required>
            </div> <!-- contact-form -->
        </div>
    </div>


    <!-- testing  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

    <div class="col-md-12">
        <div class="contact-form mt-45">
            <label>Services</label>
            <div class="form-group">
                <select id="languages" name="service[]" multiple required>
                    <option value="3D Services">3D Services</option>
                    <option value="Graphic Services">Graphic Services</option>
                    <option value="Marketing Services">Marketing Services</option>
                    <option value="Development Services">Development Services</option>
                    <option value="Post Production Services">Post Production Services</option>
                    <option value="User Interface & Experience Services">User Interface & Experience Services</option>
                    <option value="Management Services">Management Services</option>
                    <option value="Optimizing Services">Optimizing Services</option>
                </select>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#languages').multiselect({
                nonSelectedText: 'Select Language'
            });
        });
    </script>




    <!-- Working -->
    <!-- <div class="col-md-12">
                                <div class="contact-form mt-45">
                                    <label>Services</label>
                                    <div class="multi_select_box w-100 dropdown">
                                    <select class="selectpicker" data-width="100%"  name="service[]" multiple data-selected-text-format="count > 8" title='Choose one...'>
                                            <option value="3D Services">3D Services</option>
                                            <option value="Graphic Services">Graphic Services</option>
                                            <option value="Marketing Services">Marketing Services</option>
                                            <option value="Development Services">Development Services</option>
                                            <option value="Post Production Services">Post Production Services</option>
                                            <option value="User Interface & Experience Services">User Interface & Experience Services</option>
                                            <option value="Management Services">Management Services</option>
                                            <option value="Optimizing Services">Optimizing Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>                          -->
    <!-- contact-form -->

    <div class="col-md-12">
        <div class="contact-form mt-45">
            <label>Message</label>
            <textarea name="message" id="message" placeholder="Enter your message..."></textarea>
        </div> <!-- contact-form -->
    </div>
    <p class="form-message"></p>
    <div class="col-md-12">
        <div class="contact-form mt-45">
            <button id="submitBtn" name="Submit" class="main-btn" value="Submit">Send Message</button>
        </div> <!-- contact-form -->
    </div>
    </div> <!-- row -->
</form>