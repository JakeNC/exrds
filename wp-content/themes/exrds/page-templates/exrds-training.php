<?php
/*
Template Name: ExRDS - Training
Template Post Type: post, page
*/
get_header();
?>
<div class="container">
    <h2>
        <?php wp_title('');?>
    </h2>
    <div class="exrds-header">
        <hr align="left">
    </div>
    <div class="col-md-9">
        <div class="row">
            <?php
            if (get_field('training')) {
                the_field('training');
            }
            ?>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/pow.jpg" alt="PADI Open Water">
                    <div class="caption">
                        <h3>Open Water Diver Course</h3>
                        <p>This course is designed to lay the foundation for how to safely explore the underwater world, as well as assemble and care for gear. It also addresses how depth and physics affect human physiology.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/paow.jpg" alt="PADI Advanced Open Water">
                    <div class="caption">
                        <h3>Advanced Open Water Course</h3>
                        <p>This course introduces new tools and types of diving such as wreck, deep, boat, navigation and buoyancy. It also challenges you to apply your introductory knowledge while learning advanced diving skills.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/pdeep.jpg" alt="PADI Deep">
                    <div class="caption">
                        <h3>Deep Diver Specialty Course</h3>
                        <p>This course is designed to lay the foundation for how to safely explore the underwater world, as well as assemble and care for gear. It also addresses how depth and physics affect human physiology.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/pwreck.jpg" alt="PADI Wreck">
                    <div class="caption">
                        <h3>Wreck Diver Course</h3>
                        <p>This course introduces the necessary tools and techniques to explore shipwrecks. You will learn about gas management, wreck reels, flashlights and more. Buoyancy and fining will be addressed as well.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/sdiowsi.png" alt="SDI Open Water Scuba Instructor">
                    <div class="caption">
                        <h3>SDI Open Water Scuba Instructor</h3>
                        <p>Are you looking to do something others can only dream of? To help transform lives? To open doors you didn’t even know existed? All of this, and more awaits you as an SDI Open Water Scuba Instructor</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/tdianx.png" alt="TDI Advanced Nitrox Diver Course">
                    <div class="caption">
                        <h3>TDI Advanced Nitrox Diver Course</h3>
                        <p>This course is designed to introduce experienced nitrox divers to the theories and techniques required for Technical Diving. The focus is on diving mindset, gear configuration, and equipment usage.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/tdiertmx.png" alt="TDI Extended Range And Trimix Diver Course">
                    <div class="caption">
                        <h3>TDI Extended Range & Trimix Diver Course</h3>
                        <p>This course will teach you how to plan and execute dives utilizing a minimum of 18 % oxygen and diving to a maximum depth of 60 m/200 feet with a blend of helium appropriate for the planned depth.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/wp-content/themes/exrds/assets/images/eqsp.jpg" alt="Equipment Specialist Course">
                    <div class="caption">
                        <h3>Equipment Specialist Course</h3>
                        <p>Our Equipment Specialist Seminar teaches how regulators really work, how they differ and what you can do to get them working again quickly. We also help you put together a useful ‘save a dive’ kit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <?php if ( is_active_sidebar( 'posts-side-bar' ) ) : ?>
            <?php dynamic_sidebar( 'posts-side-bar' ); ?>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>