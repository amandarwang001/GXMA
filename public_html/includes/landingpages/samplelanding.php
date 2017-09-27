<div class="container">

    <div class="row margin-bottom-lg">
        <div class="col s12 m7 ">
            <div class="card">
                <div class="card-image">
                    <img class="responsive-img" src="<?= IMAGE_URL ?>simon-matzinger-320332.jpg" alt="simon-matzinger-320332"/>
                    <!--                    <span class="card-title">Card Title</span>-->
                </div>
                <div class="card-content">
                    <p class="readableFont grey-text text-darken-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
                </div>

            </div>
            <!--            <div class="card-panel white  landingPageHeight">-->
            <!--                <span class="readableFont grey-text text-darken-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span>-->
            <!--            </div>-->
        </div>
        <div class="col s12 m5">
            <div class="card-panel green center-align">
                <span class="readableFont white-text">Sign up now for your promo deal!</span>
            </div>

            <form id="contact-form">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="name" id="name" type="text" class="validate readableFont grey-text text-lighten-2"
                               required>
                        <label for="first_name" class="monospaceFont">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email"
                               class="validate readableFont grey-text text-lighten-2" required>
                        <label for="email" class="monospaceFont">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                            <textarea name="message" id="message"
                                      class="materialize-textarea readableFont grey-text text-lighten-2"
                                      required></textarea>
                        <label for="message" class="monospaceFont">Message</label>
                    </div>
                </div>
                <input type="submit"
                       class="waves-effect btn green monospaceFont btn-contact"
                       name="formSubmit" value="Send"/>
            </form>
            <div class="messageSent alert alert-success alert-dismissable green" style="display: none">
                <a href="/" class="close right grey-text text-lighten-2 medFontSize padding-sm" data-dismiss="alert"
                   aria-label="close">×</a>
                <p class="monospaceFont grey-text text-lighten-2  padding-sm">Message sent successfully! We will reply
                    within 24 hours thank you!</p>
            </div>
            <div class="messageError alert alert-danger alert-dismissable" style="display: none">
                <a href="Home" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p class="monospaceFont grey-text text-lighten-2">Uh Oh! Looks like there was an issue sending your
                    message. Please try again and make sure all fields are correct.</p>
            </div>
        </div>
    </div>


    <div class="row center-align margin-bottom-lg">
        <a href="#!" class="waves-effect waves-light green monospaceFont btn-large fullWidth">Stay up to date with our
            blog!</a>
    </div>


    <div class="row center-align readableFont grey-text text-lighten-2">
        Other people are interested in:
    </div>
    <div class="row margin-bottom-lg">
        <div class="col s12 m4 center-align margin-bottom-custom">
            <a href="#!"><img class="responsive-img" src="<?= IMAGE_URL ?>simon-matzinger-320332.jpg" alt="simon-matzinger-320332"/><span
                    class="readableFont green-text">Link to something</span></a>
        </div>
        <div class="col s12 m4 center-align margin-bottom-custom">
            <a href="#!"><img class="responsive-img" src="<?= IMAGE_URL ?>simon-matzinger-320332.jpg" alt="simon-matzinger-320332"/><span
                    class="readableFont green-text">Link to something</span></a>
        </div>
        <div class="col s12 m4 center-align margin-bottom-custom">
            <a href="#!"><img class="responsive-img" src="<?= IMAGE_URL ?>simon-matzinger-320332.jpg" alt="simon-matzinger-320332"/><span
                    class="readableFont green-text">Link to something</span></a>
        </div>
    </div>


</div>