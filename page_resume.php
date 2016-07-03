<?php
/*
Template Name: Resume Page
*/
?>

    <?php get_header(); ?>

      <section class="row">

          <div class="twelve columns" style="display:block; margin-righ: auto; margin-left: auto;">
              <div>
                  <h1 style="text-align:center;">My Résumé</h1>
                      <ul>
                          <li>305.903.9810</li>
                          <li><a href="mailto:julioaenlle@gmail.com">EMAIL ME</a></li>
                      </ul>
                  <article title="Work Experience" class="resume">
                      <h2>Work Experience</h2>
                      <section title="SkyPlanner">
                          <h3>SkyPlanner</h3>
                          <h4>Brand Management Specialist & Social Media Manager</h4>
                          <h4>Miami, FL; July 2013 - October 2015</h4>
                          <p>
                            Responsible for heading SkyPlanner’s marketing efforts at both online and local levels. As social media manager responsibilities include creating and curating online content for use in social media and publishing a bi-weekly blog resulting in a considerable increase in SkyPlanner’s social media presence. Work closely with resident graphic designers to create promotional materials — brochures, newsletters, client success story presentations, etc. — for use in marketing and networking campaigns, as well as promotional materials for SkyPlanner business applications distributed through the Salesforce AppExchange. Act as first point-of-contact with potential customers and manage SkyPlanner’s business leads.
                          </p>
                      </section>
                      <section title="MGS">
                          <h3>MGSCOMM</h3>
                          <h4>Freelance Creative</h4>
                          <h4>Miami, FL; Apr. – May 2013</h4>
                          <p>
                            Charged with creating a campaign for the introduction of a new loyalty program for all Toyota dealerships in the Southeast. Also worked on creating content for campaigns involving the University of Miami’s UHealth medical system and the Miami Marlins. Utilized knowledge of Photoshop, Illustrator, and InDesign to assist in the creation and editing of print and direct mail materials.
                          </p>
                      </section>
                      <section title="Freelance">
                          <h3>Freelance</h3>
                          <h4>Creative & Social Media Consultant</h4>
                          <h4>Miami, FL; 2012 – Present</h4>
                          <p>
                            Since 2012 have performed freelance traditional advertising and social media consultation for various South Florida clients including an attorney’s office, a construction & glazing company, and a CrossFit affiliate with gyms throughout the South Florida area.
                          </p>
                      </section>
                      <section title="Havas">
                          <h3>Havas Worldwide</h3>
                          <h4>Freelance Copywriter</h4>
                          <h4>New York, NY; June – Dec. 2011</h4>
                          <p>
                            Worked closely with the executive creative director, creative director, and senior creatives in developing and executing work for multiple brands in the Reckitt Benckiser family of brands including Lysol, Durex, Air Wick, French’s condiments and Frank’s Redhot sauce.
                          </p>
                      </section>
                </article>

                <article title="Education" class="resume">
                    <h2>Education</h2>
                    <section title="SkyPlanner">
                        <h3>>SkyPlanner</span> Brand Management Specialist & Social Media Manager</h3>
                        <h3>Miami, FL; July 2013 - October 2015</h3>
                        <p>
                          Responsible for heading SkyPlanner’s marketing efforts at both online and local levels. As social media manager responsibilities include creating and curating online content for use in social media and publishing a bi-weekly blog resulting in a considerable increase in SkyPlanner’s social media presence. Work closely with resident graphic designers to create promotional materials — brochures, newsletters, client success story presentations, etc. — for use in marketing and networking campaigns, as well as promotional materials for SkyPlanner business applications distributed through the Salesforce AppExchange. Act as first point-of-contact with potential customers and manage SkyPlanner’s business leads.
                        </p>
                    </section>
                    <section title="MGS">
                        <h3 style="color: orange;">MGSCOMM</h3>
                        <h4>Freelance Creative</h4>
                        <h4>Miami, FL; Apr. – May 2013</h4>
                        <p>
                          Charged with creating a campaign for the introduction of a new loyalty program for all Toyota dealerships in the Southeast. Also worked on creating content for campaigns involving the University of Miami’s UHealth medical system and the Miami Marlins. Utilized knowledge of Photoshop, Illustrator, and InDesign to assist in the creation and editing of print and direct mail materials.
                        </p>
                    </section>
                    <section title="Freelance">
                        <h3 style="color: orange;">Freelance Creative & Social Media Consultant</h3>
                        <h3>Miami, FL; 2012 – Present</h3>
                        <p>
                          Since 2012 have performed freelance traditional advertising and social media consultation for various South Florida clients including an attorney’s office, a construction & glazing company, and a CrossFit affiliate with gyms throughout the South Florida area.
                        </p>
                    </section>
                    <section title="Havas">
                        <h3><span style="color: orange;">Havas Worldwide</span> Freelance Copywriter</h3>
                        <h3>New York, NY; June – Dec. 2011</h3>
                        <p>
                          Worked closely with the executive creative director, creative director, and senior creatives in developing and executing work for multiple brands in the Reckitt Benckiser family of brands including Lysol, Durex, Air Wick, French’s condiments and Frank’s Redhot sauce.
                        </p>
                    </section>
              </article>







                <!--BEGIN LOOP
                  <?php if ( have_posts() ) {
                      while ( have_posts() ){
                          the_post(); // the_post defines our Data CONTEXT ?>

                          <h2><?php the_title(); ?></h2>
                          <?php the_content();

                      } //end while statment
                  } //end if statement ?>
                END LOOP -->
              </div>
          </div>

      </section>



    <?php get_footer(); ?>
