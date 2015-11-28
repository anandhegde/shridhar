 <?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crucible
 */

get_header(); ?>

 <section id="content" class="content">

  <div class="container">
    <hr/>
    <div class="row">
      <div class="grid_12">
        
        <div class="map">
        <h3>How to Find Us</h3>
          <div id="google-map" class="map_model">
          </div>
          <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180" >
              <p> 9863 - 9867 Mill Road, Cambridge, MG09 99HT.<br><span>+1 800 559 6580</span><br><span>+1 800 603 6035</span></p>
            </li>
          </ul>
        </div><!--map-->
        <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.</p>
        <div class="contacts">
          <div class="contacts_addr">9863 - 9867 Mill Road,<br>Cambridge, MG09 99HT.</div>
          <div class="contacts_tel">
            <ul>
              <li>+1 800 559 6580</li>
              <li>+1 800 603 6035</li>
            </ul>
          </div>
          <div class="contacts_mail"><a href="#">mail@demolink.org</a></div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
  <hr class="hr-contacts">
    <h3 class="color-1">Contact Form</h3>
    <div class="row">
          <form id="contact-form">
          <div class="contact-form-loader"></div>
          <fieldset>
          <div class="grid_6">
            <label class="name">
              <input type="text" name="name" placeholder="Name" value="" data-constraints="@Required @JustLetters"  />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span>
            </label>
            <label class="email">
              <input type="text" name="email" placeholder="E-mail" value="" data-constraints="@Required @Email" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span>
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone" value="" data-constraints="@JustNumbers" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid phone.</span>
            </label>
          </div>
          <div class="grid_6">
            <label class="message">
              <textarea name="message" placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span>
            </label>
            <div>
              <a href="#" data-type="submit" class="main-btn arrow-right-icon">send message</a>
            </div>
          </div>  
            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
          </fieldset> 
          <div class="modal fade response-message">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  You message has been sent! We will be in touch soon.
                </div>      
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="grid_6"></div>
    </div>
    


  </section>  

 
  <?php get_footer(); ?>
