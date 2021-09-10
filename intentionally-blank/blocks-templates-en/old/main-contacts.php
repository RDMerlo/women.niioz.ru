<section class="page-section color">
    <div class="container">

        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">CONTACTS<small> / write to us</small></span>
        </h1>

        <!-- Contact form -->
        <form name="af-form" method="post" action="#contact" class="af-form row" id="af-form">

            <div class="col-sm-12 af-outer af-required">
                <div class="form-group af-inner">
                    <input
                            type="text" name="name" id="name" placeholder="Full name" value="" size="30"
                            data-toggle="tooltip" title="Enter name"
                            class="form-control placeholder"/>
                </div>
            </div>

            <div class="col-sm-12 af-outer af-required">
                <div class="form-group af-inner">
                    <input
                            type="text" name="email" id="email" placeholder="E-mail" value="" size="30"
                            data-toggle="tooltip" title="Enter e-mail"
                            class="form-control placeholder"/>
                </div>
            </div>

            <div class="col-sm-12 af-outer af-required">
                <div class="form-group af-inner">
                    <textarea
                            name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                            data-toggle="tooltip" title="Enter text"
                            class="form-control placeholder"></textarea>
                </div>
            </div>

            <div class="col-sm-12 af-outer af-required text-center">
                <div class="form-group af-inner">
                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Send" />
                </div>
            </div>

        </form>
        <!-- /Contact form -->

    </div> 
</section>
<!-- /PAGE CONTACT -->