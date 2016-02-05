<!-- Newsletter PopUp -->
<div class="newsLetterModal" id="js-newsLetterModal">
  <div class="newsLetterContainer-outer">
    <div class="newsLetterContainer [ amberBorder ]">
    
      <button title="Close (ESC)" type="button" class="newsLetter__close"><i class="icon-cross"></i></button>
      
      <h2 class="newsLetter__title [ u-textUpperCase u-margin-t-flush ]">Sign up for our <span class="[ u-inlineBlock ]">e-newsletter</span></h2>
      <form name="signup" id="signup" action="http://NewmanStreetTavern.fbmta.com/members/subscribe.aspx" method="post" onsubmit="return validate_signup(this)">
        
        

        <!-- Hidden Fields Required -->
        <input type="hidden" name="Action" value="subscribe" maxlength="200">
        <!-- ListID(s) can be found on the Manage Lists page in Enterprise -->
        <input type="hidden" name="ListID" value="25769804073">
        <!-- SiteGUID will be supplied by Fishbowl Client Support -->
        <input type="hidden" name="SiteGUID" value="99ECA6B2-46CF-44DB-B020-E1DDE03C62AE">
        <!-- YES if Enterprise should NOT send a confirmation e-mail to the subscriber -->
        <input type="hidden" name="SuppressConfirmation" value="yes">

        <!-- Absolute ReturnURL to which the user will be redirected after submitting the form -->
        <input type="hidden" name="ReturnURL" value="<?php echo get_home_url(); ?>/thank-you/">        
      
        

        <div class="newsL__blok u-cf">
          <label class="u-block u-textLeft">First name</label>
          
          <span class="u-textCapitalize u-block">
            <input class="text" type="text" maxlength="100" name="FirstName"/>  
          </span>
        </div>

        <div class="newsL__blok u-cf">
          <label class="u-block u-textLeft">Last name</label>
          
          <span class="u-textCapitalize u-block">
            <input class="text" type="text" maxlength="100" name="LastName"/>  
          </span>
        </div>

        <div class="newsL__blok u-cf">
          <label class="u-block u-textLeft">Email</label>
          
          <span class="u-textCapitalize u-block">
            <input type="email" name="EmailAddress" maxlength="200">  
          </span>
        </div>

        <div class="newsL__blok newsL__blok--btn u-textLeft">
          <input class="btn borderDouble button-dark [ btn--subscribe ]" id="gtm-elementId--mailingList" type="submit" name="Submit" value="Subscribe">
        </div>

      </form>

    </div>
  </div>
</div>
<!-- End Newsletter PopUp -->
