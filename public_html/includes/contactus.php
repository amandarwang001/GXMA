<div class="container">

    <div class="row">
        <div class="col m4 icon">
            <img src="<?=IMAGE_URL ?>contact.png" class="responsive-img">

        </div>
        <div class="col m8">
            <h1>CONTACT US</h1>
            <p>Thanks for visiting! If you would like to schedule a class, a seminar at your location, or have questions,
                please use this form to contact Shifu David and Instructor Amanda Wang. We will reply to your message as
                soon as possible -- usually within a day or two.<br><br>
                You may also call Instructor Amanda Wang at <a id="link" href="tel:8639443986">863.944.3986</a>.</p>

            <form class="contact-us">
                <div class="form-group">
                    <input type="text" class="form-control" name='name' id="name" placeholder="Name" required>
                    <br>
                    <input type="text" class="form-control" name='phone' id="email" placeholder="Phone" required>
                    <br>
                    <input type="email" class="form-control" name='email' id="email" placeholder="Email" required>
                    <br>
                    <textarea rows="10" cols="5" class="form-control"  type="text" name='msg' id="msg" placeholder="Message" required></textarea>
                    <button class="btn btn-md btn-contact red darken-4">Submit</button>
                </div>
            </form>
            <div class="messageSent alert alert-success alert-dismissable" style="display: none">
                <a href="/" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>Message sent successfully! We will reply within 24 hours thank you!</p>
            </div>
            <div class="messageError alert alert-danger alert-dismissable" style="display: none">
                <a href="Home" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>Uh Oh! Looks like there was an issue sending your message. Please try again and make sure all fields are correct.</p>
            </div>
        </div>
    </div>
</div>




