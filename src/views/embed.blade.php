<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

    .red {
        color: red;
    }

    .form-area {
        background-color: #FAFAFA;
        padding: 10px 40px 60px;
        margin: 10px 0px 60px;
        border: 1px solid GREY;
    }

</style>
<div class="container">
    <div class="col-md-5">
        <div class="form-area">
            <form role="form" method="post" action="{{ url('/') }}">
                @csrf
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number"
                           required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140"
                              rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft"
                                                class="help-block ">You have reached the limit</p></span>
                </div>

                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
            </form>
        </div>
    </div>
</div>