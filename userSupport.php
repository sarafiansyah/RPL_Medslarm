<div class="container-contact100 ">
    <div class="wrap-contact100 shadow">
        <form class="contact100-form validate-form" name="rpl_medslarm">
            <span class="contact100-form-title">My Feedback</span>

            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Full Name</span>
                <input class="input100" type="text" name="name" placeholder="Enter your name">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <span class="label-input100">Email</span>
                <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Message is required">
                <span class="label-input100">Details</span>
                <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                <span class="focus-input100"></span>
            </div>
            <div class="mb-3 d-none">
                <label for="disabledTextInput" class="form-label">Time</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="time_posted" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                                                                                        echo date("H:i:s"); ?>">

            </div>
            <div class="mb-3 d-none">
                <label for="disabledTextInput" class="form-label">Date</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="date_posted" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                                                                                        echo date("d/m/Y"); ?>">
            </div>

            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn submitBtn" type="submit" name="addpoint">
                        <span>
                            Submit
                            <i class="fas fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn loadingBtn d-none" type="submit" name="addpoint">
                        <span>
                            Harap Tunggu
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>